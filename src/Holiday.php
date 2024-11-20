<?php

/*
 * This file is part of the ixno/php-public-holiday project.
 *
 * (c) Björn Hempel <https://www.hempel.li/>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Ixnode\PhpPublicHoliday;

use DateTimeImmutable;
use DateTimeZone;
use Exception;
use Ixnode\PhpPublicHoliday\Configuration\Configuration;
use Ixnode\PhpPublicHoliday\Configuration\Country;
use Ixnode\PhpPublicHoliday\Configuration\Country\CountryDe;
use Ixnode\PhpPublicHoliday\Configuration\Language;
use Ixnode\PhpPublicHoliday\Tests\Unit\HolidayTest;
use Ixnode\PhpPublicHoliday\Tools\ArrayToCsv;
use Ixnode\PhpPublicHoliday\Translation\TranslationDe;
use Ixnode\PhpPublicHoliday\Translation\TranslationEn;
use LogicException;

/**
 * Class Holiday
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-07-18)
 * @since 0.1.0 (2024-07-18) First version.
 * @link HolidayTest
 */
readonly class Holiday
{
    public function __construct(
        private int $year,
        private string $country = Country::DE,
        private string $state = CountryDe::STATE_ALL,
        private string $language = Language::DE,
        private int $preGenerationYears = Configuration::DEFAULT_PRE_GENERATION_YEARS,
    )
    {
        /* Validate pre-generation years. */
        if ($preGenerationYears < Configuration::PRE_GENERATION_YEARS_MIN) {
            throw new LogicException('Pre-generation years must be at least 1');
        }

        /* To avoid memory issues with large pre-generation years. */
        if ($preGenerationYears > Configuration::PRE_GENERATION_YEARS_MAX) {
            throw new LogicException('Pre-generation years must not exceed 3.');
        }
    }

    /**
     * Returns the year of this object.
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * Returns a list of public holidays for the given year.
     *
     * @return HolidayItem[]
     * @throws Exception
     */
    public function getHolidays(): array
    {
        $holidays = [];

        $easterDate = $this->getEasterDate();

        /* Pre-generate holidays for the specified number of years. */
        for ($i = 0; $i < $this->preGenerationYears; $i++) {
            $this->addHolidays($holidays, $easterDate, $this->year + $i);
        }

        /* Sort the holidays by date. */
        usort($holidays, fn(HolidayItem $dateA, HolidayItem $dateB) => $dateA->getDate() <=> $dateB->getDate());

        return $holidays;
    }

    /**
     * Returns all non-working days for the given year.
     *
     * @return DateTimeImmutable[]
     * @throws Exception
     */
    public function getNoWorkingDays(
        DateTimeImmutable $dateStart = null,
        DateTimeImmutable $dateEnd = null,
    ): array
    {
        $holidays = $this->getHolidays();
        $noWorkingDays = [];

        /* Add holidays to no-working days. */
        foreach ($holidays as $holiday) {
            $noWorkingDays[] = $holiday->getDate();
        }

        $dateStart = match (true) {
            is_null($dateStart) => (new DateTimeImmutable(sprintf('%d-01-01', $this->year))),
            default => $dateStart
        };
        $dateEnd = match (true) {
            is_null($dateEnd) => (new DateTimeImmutable(sprintf('%d-12-31', $this->year))),
            default => $dateEnd
        };

        /* Reset time to 00:00:00 for comparison. */
        $dateStart = $dateStart->setTime(0, 0);
        $dateEnd = $dateEnd->setTime(0, 0);

        /* Add weekends to no-working days */
        while ($dateStart <= $dateEnd) {
            $dayOfWeek = (int) $dateStart->format('w');

            if ($dayOfWeek !== Configuration::DAY_SUNDAY && $dayOfWeek !== Configuration::DAY_SATURDAY) {
                $dateStart = $dateStart->modify('+1 day');
                continue;
            }

            if (in_array($dateStart, $noWorkingDays)) {
                $dateStart = $dateStart->modify('+1 day');
                continue;
            }

            $noWorkingDays[] = $dateStart;

            $dateStart = $dateStart->modify('+1 day');
        }

        /* Sort no-working days by date. */
        usort($noWorkingDays, fn(DateTimeImmutable $dataA, DateTimeImmutable $dataB) => $dataA <=> $dataB);

        return $noWorkingDays;
    }

    /**
     * Returns all working days for the given year.
     *
     * @return DateTimeImmutable[]
     * @throws Exception
     */
    public function getWorkingDays(
        DateTimeImmutable $dateStart = null,
        DateTimeImmutable $dateEnd = null,
    ): array
    {
        $noWorkingDays = $this->getNoWorkingDays(dateStart: $dateStart, dateEnd: $dateEnd);

        $workingDays = [];

        $dateStart = match (true) {
            is_null($dateStart) => (new DateTimeImmutable(sprintf('%d-01-01', $this->year))),
            default => $dateStart
        };
        $dateEnd = match (true) {
            is_null($dateEnd) => (new DateTimeImmutable(sprintf('%d-12-31', $this->year))),
            default => $dateEnd
        };

        /* Reset time to 00:00:00 for comparison. */
        $dateStart = $dateStart->setTime(0, 0);
        $dateEnd = $dateEnd->setTime(0, 0);

        /* Add working days */
        while ($dateStart <= $dateEnd) {

            /* This is a holiday or no-working day */
            if (in_array($dateStart, $noWorkingDays)) {
                $dateStart = $dateStart->modify('+1 day');
                continue;
            }

            $workingDays[] = $dateStart;

            $dateStart = $dateStart->modify('+1 day');
        }

        /* Sort working days by date. */
        usort($workingDays, fn(DateTimeImmutable $dataA, DateTimeImmutable $dataB) => $dataA <=> $dataB);

        return $workingDays;
    }

    /**
     * Returns a list of public holidays for the given year formatted as strings.
     *
     * @return string[]
     * @throws Exception
     */
    public function getHolidaysFormatted(
        string $format = 'Y-m-d'
    ): array
    {
        $holidays = $this->getHolidays();
        $formattedHolidays = [];

        foreach ($holidays as $holiday) {
            $formattedHolidays[] = $holiday->getDate()->format($format);
        }

        return $formattedHolidays;
    }

    /**
     * Returns a list of no working days for the given year formatted as strings.
     *
     * @return string[]
     * @throws Exception
     */
    public function getNoWorkingDaysFormatted(
        string $format = 'Y-m-d',
        DateTimeImmutable $dateStart = null,
        DateTimeImmutable $dateEnd = null,
    ): array
    {
        $noWorkingDays = $this->getNoWorkingDays(
            dateStart: $dateStart,
            dateEnd: $dateEnd
        );
        $formattedHolidays = [];

        foreach ($noWorkingDays as $noWorkingDay) {
            $formattedHolidays[] = $noWorkingDay->format($format);
        }

        return $formattedHolidays;
    }

    /**
     * Returns the next working day after a given date with a specified distance in working days.
     *
     * @throws Exception
     */
    public function getNextWorkingDay(DateTimeImmutable $day = null, int $distanceWorkingDay = Configuration::DEFAULT_WORKING_DAYS_NEXT_DATE): DateTimeImmutable
    {
        if (is_null($day)) {
            $day = new DateTimeImmutable();
        }

        /* Reset time to 00:00:00. */
        $day = $day->setTime(0, 0);

        $noWorkingDays = $this->getNoWorkingDays();

        $currentDate = $day;
        $workingDaysCount = 0;

        /* The day today is a working day. */
        if (!in_array($currentDate, $noWorkingDays)) {
            $workingDaysCount++;
        }

        while ($workingDaysCount <= $distanceWorkingDay) {
            $currentDate = $currentDate->modify('+1 day');

            if (in_array($currentDate, $noWorkingDays)) {
                continue;
            }

            $workingDaysCount++;
        }

        return $currentDate;
    }

    /**
     * Adds state-specific public holidays to the given list of holidays.
     *
     * @param HolidayItem[] $holidays
     * @throws Exception
     */
    private function addHolidays(
        array &$holidays,
        DateTimeImmutable $easterDate,
        int $year
    ): void
    {
        $holidaysCountry = match ($this->country) {
            Country::DE => CountryDe::HOLIDAYS,
            default => throw new LogicException(sprintf('The given country "%s" is not supported.', $this->country)),
        };

        foreach ($holidaysCountry as $holidayData) {
            $states = $holidayData['states'];

            $name = match ($this->language) {
                Language::DE => TranslationDe::HOLIDAYS[$holidayData['name']],
                Language::EN => TranslationEn::HOLIDAYS[$holidayData['name']],
                default => throw new LogicException(sprintf('The given language "%s" is not supported.', $this->language)),
            };

            if (
                !in_array($this->state, $states) &&
                !in_array(CountryDe::STATE_ALL, $states)
            ) {
                continue;
            }

            $dateString = $holidayData['date'];

            $date = match (true) {
                preg_match('~^\d{2}-\d{2}$~', $dateString) === 1 => new DateTimeImmutable(sprintf('%d-%s', $year, $dateString)),
                $dateString === Configuration::BUSS_UND_BETTAG => $this->getBussUndBettag(),
                default => $easterDate->modify($dateString),
            };

            $holidays[] = new HolidayItem($date, $name);
        }
    }

    /**
     * @throws Exception
     */
    private function getBussUndBettag(): DateTimeImmutable
    {
        /* November 23 of the given year */
        $november23 = new DateTimeImmutable(sprintf('%s-11-23', $this->year));

        /* Weekday from November 23 */
        $weekday = (int) $november23->format('w');

        /* Calculate the number of days to the previous Wednesday */
        $daysToWednesday = ($weekday >= Configuration::LAST_WEDNESDAY) ? $weekday - Configuration::LAST_WEDNESDAY : $weekday + Configuration::NEXT_WEDNESDAY;

        /* Buß- und Bettag is the Wednesday before November 23rd */
        return $november23->modify(sprintf('-%d days', $daysToWednesday));
    }

    /**
     * Returns the easter date for the year of this class.
     *
     * @throws Exception
     */
    private function getEasterDate(): DateTimeImmutable
    {
        $easter = new DateTimeImmutable(sprintf('@%s', easter_date($this->year)));

        return $easter->setTimezone(new DateTimeZone('Europe/Berlin'));
    }

    /**
     * Returns the public holidays as array format.
     *
     * @return array{
     *     country: string,
     *     state: string,
     *     year: int,
     *     holidays: array<int, array{date: string, name: string}>
     * }
     * @throws Exception
     */
    public function getArray(): array
    {
        $holidays = [];

        foreach ($this->getHolidays() as $holidayItem) {
            $holidays[] = [
                'date' => $holidayItem->getDate()->format('Y-m-d'),
                'name' => $holidayItem->getName(),
            ];
        }

        return [
            'country' => $this->country,
            'state' => $this->state,
            'year' => $this->year,
            'language' => $this->language,
            'holidays' => $holidays,
        ];
    }

    /**
     * Returns the public holidays as csv format.
     *
     * @return string
     * @throws Exception
     */
    public function getCsv(): string
    {
        $data = [
            ['date', 'public holiday']
        ];

        foreach ($this->getHolidays() as $holiday) {
            $data[] = [
                $holiday->getDate()->format('Y-m-d'),
                $holiday->getName(),
            ];
        }

        return (new ArrayToCsv($data))->getCSV();
    }

    /**
     * Returns the public holidays as json format.
     *
     * @return string
     * @throws Exception
     */
    public function getJson(): string
    {
        $data = $this->getArray();

        $json = json_encode($data, JSON_PRETTY_PRINT);

        if (!is_string($json)) {
            throw new LogicException('Unable to encode json');
        }

        return $json;
    }
}
