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
use Ixnode\PhpPublicHoliday\Configuration\ConfigurationDefault;
use Ixnode\PhpPublicHoliday\Constant\Country;
use Ixnode\PhpPublicHoliday\Constant\Date;
use Ixnode\PhpPublicHoliday\Constant\Holiday;
use Ixnode\PhpPublicHoliday\Converter\CountryCode;
use Ixnode\PhpPublicHoliday\Converter\LocaleCode;
use Ixnode\PhpPublicHoliday\Converter\StateCode;
use Ixnode\PhpPublicHoliday\Tests\Unit\PublicHolidayDeTest;
use Ixnode\PhpPublicHoliday\Tools\ArrayToCsv;
use Ixnode\PhpPublicHoliday\Translation\Holiday as TranslationHoliday;
use Ixnode\PhpTimezone\Constants\CountryEurope;
use Ixnode\PhpTimezone\Constants\Locale as PhpTimezoneLocale;
use Ixnode\PhpTimezone\Constants\State\Europe\StateDe;
use LogicException;

/**
 * Class PublicHoliday
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-07-18)
 * @since 0.1.0 (2024-07-18) First version.
 * @link PublicHolidayDeTest
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
readonly class PublicHoliday
{
    private string $localeCode;

    public function __construct(
        private int $year,
        private string $countryCode = CountryEurope::COUNTRY_CODE_DE,
        private string $stateCode = StateDe::STATE_CODE_ALL,
        string $localeCode = ConfigurationDefault::LOCALE,
        private int $preGenerationYears = ConfigurationDefault::PRE_GENERATION_YEARS,
    )
    {
        /* Translate locale code. */
        $this->localeCode = (new LocaleCode($localeCode))->getLocaleCode();
        
        /* Validate pre-generation years. */
        if ($preGenerationYears < ConfigurationDefault::PRE_GENERATION_YEARS_MIN) {
            throw new LogicException('Pre-generation years must be at least 1');
        }

        /* To avoid memory issues with large pre-generation years. */
        if ($preGenerationYears > ConfigurationDefault::PRE_GENERATION_YEARS_MAX) {
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
     * Returns the country code of this object.
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Returns the translated country of this object.
     */
    public function getCountry(): string
    {
        return (new CountryCode($this->countryCode))->getCountryName($this->localeCode);
    }

    /**
     * Returns the state code of this object
     */
    public function getStateCode(): string
    {
        return $this->stateCode;
    }

    /**
     * Returns the translated state of this object.
     */
    public function getState(): string
    {
        return (new StateCode(countryCode: $this->countryCode, stateCode: $this->stateCode))
            ->getStateName($this->localeCode);
    }

    /**
     * Returns the locale code of this object.
     */
    public function getLocaleCode(): string
    {
        return $this->localeCode;
    }

    /**
     * Returns the locale code of this object.
     */
    public function getLocaleCodeFull(): string
    {
        return (new LocaleCode($this->localeCode))->getLocaleCode();
    }

    /**
     * Returns the translated locale code of this object.
     */
    public function getLanguage(): string
    {
        return (new LocaleCode($this->localeCode))->getLanguage();
    }

    /**
     * Returns a list of public holidays for the given year.
     *
     * @return PublicHolidayItem[]
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
        usort($holidays, fn(PublicHolidayItem $dateA, PublicHolidayItem $dateB) => $dateA->getDate() <=> $dateB->getDate());

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

            if ($dayOfWeek !== Holiday::DAY_SUNDAY && $dayOfWeek !== Holiday::DAY_SATURDAY) {
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
    public function getNextWorkingDay(DateTimeImmutable $day = null, int $distanceWorkingDay = ConfigurationDefault::WORKING_DAYS_NEXT_DATE): DateTimeImmutable
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
     * @param PublicHolidayItem[] $holidays
     * @throws Exception
     */
    private function addHolidays(
        array &$holidays,
        DateTimeImmutable $easterDate,
        int $year
    ): void
    {
        if (!array_key_exists($this->countryCode, Country::COUNTRY_HOLIDAYS)) {
            throw new LogicException(sprintf('The given country "%s" is not supported.', $this->countryCode));
        }

        $holidaysCountry = Country::COUNTRY_HOLIDAYS[$this->countryCode];

        foreach ($holidaysCountry as $holidayData) {
            $states = $holidayData['states'];

            /* Check holiday state code. */
            if (
                !in_array($this->stateCode, $states) &&
                !in_array(StateDe::STATE_CODE_ALL, $states)
            ) {
                continue;
            }

            /* Check holiday code. */
            $holidayCode = $holidayData['name'];
            if (!array_key_exists($holidayCode, TranslationHoliday::HOLIDAYS)) {
                throw new LogicException(sprintf('The holiday "%s" does not exist.', $holidayCode));
            }

            /* Get all translations. */
            $translations = TranslationHoliday::HOLIDAYS[$holidayCode];

            /* Check locale. */
            $localeCode = $this->getLocaleCodeFull();
            if (!array_key_exists($localeCode, $translations)) {
                throw new LogicException(sprintf('The locale code "%s" does not exist.', $localeCode));
            }

            /* Get translation. */
            $translated = $translations[$localeCode];

            /* Check and get date. */
            $dateString = $holidayData['date'];
            $date = match (true) {
                preg_match('~^\d{2}-\d{2}$~', $dateString) === 1 => new DateTimeImmutable(sprintf('%d-%s', $year, $dateString)),
                $dateString === Holiday::BUSS_UND_BETTAG => $this->getBussUndBettag(),
                default => $easterDate->modify($dateString),
            };

            /* Build public holiday. */
            $holidays[] = new PublicHolidayItem($date, $translated);
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
        $daysToWednesday = ($weekday >= Holiday::LAST_WEDNESDAY) ? $weekday - Holiday::LAST_WEDNESDAY : $weekday + Holiday::NEXT_WEDNESDAY;

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
    public function getArray(DateTimeImmutable|string $referenceDate = Date::TODAY): array
    {
        $holidays = [];

        $dateFormat = $this->getDateFormat();

        foreach ($this->getHolidays() as $holidayItem) {
            $holidays[] = [
                'date' => $holidayItem->getDate()->format($dateFormat),
                'name' => $holidayItem->getName(),
                'difference' => $holidayItem->getDays(referenceDate: $referenceDate),
            ];
        }

        return [
            'country' => $this->countryCode,
            'state' => $this->stateCode,
            'year' => $this->year,
            'locale' => $this->localeCode,
            'holidays' => $holidays,
        ];
    }

    /**
     * Returns the public holidays as csv format.
     *
     * @param DateTimeImmutable|string $referenceDate
     * @return string
     * @throws Exception
     */
    public function getCsv(DateTimeImmutable|string $referenceDate = Date::TODAY): string
    {
        $data = [
            ['date', 'public holiday', 'difference']
        ];

        $dateFormat = $this->getDateFormat();

        foreach ($this->getHolidays() as $holiday) {
            $data[] = [
                $holiday->getDate()->format($dateFormat),
                $holiday->getName(),
                $holiday->getDays($referenceDate),
            ];
        }

        return (new ArrayToCsv($data))->getCSV();
    }

    /**
     * Returns the public holidays as json format.
     *
     * @throws Exception
     */
    public function getJson(DateTimeImmutable|string $referenceDate = Date::TODAY): string
    {
        $data = $this->getArray(referenceDate: $referenceDate);

        $json = json_encode($data, JSON_PRETTY_PRINT);

        if (!is_string($json)) {
            throw new LogicException('Unable to encode json');
        }

        return $json;
    }

    /**
     * Returns the date format according to local code.
     */
    public function getDateFormat(): string
    {
        return match ($this->localeCode) {
            PhpTimezoneLocale::DE => Date::DATE_FORMAT_DE_YMD,
            default => Date::DATE_FORMAT_EN_YMD,
        };
    }
}
