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

namespace Ixnode\PhpPublicHoliday\Tests\Unit;

use DateTimeImmutable;
use Exception;
use Ixnode\PhpPublicHoliday\Configuration\Country;
use Ixnode\PhpPublicHoliday\Configuration\Country\CountryDe;
use Ixnode\PhpPublicHoliday\Holiday;
use PHPUnit\Framework\TestCase;

/**
 * Class HolidayTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-07-18)
 * @since 0.1.0 (2024-07-18) First version.
 * @link Holiday
 */
final class HolidayTest extends TestCase
{
    /**
     * Test wrapper
     *
     * @dataProvider dataProviderHoliday
     *
     * @test
     * @testdox $number) Test Holiday $year $state
     * @param string[] $expectedHolidays
     * @throws Exception
     */
    public function wrapperHoliday(
        int $number,
        int $year,
        string $country,
        string $state,
        array $expectedHolidays,
    ): void
    {
        /* Arrange */

        /* Act */
        $holiday = new Holiday($year, $country, $state);

        /* Assert */
        $this->assertIsNumeric($number); // To avoid phpmd warning.
        $this->assertSame($year, $holiday->getYear());
        $this->assertSame($expectedHolidays, array_values($holiday->getHolidaysFormatted()));
    }

    /**
     * Data provider
     *
     * @return array<int, array{int, mixed}>
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function dataProviderHoliday(): array
    {
        $number = 0;

        return [
            /* Germany-wide */
            [++$number, 2023, Country::DE, CountryDe::STATE_ALL, [
                '2023-01-01', /* Neujahr */
                '2023-04-07', /* Karfreitag */
                '2023-04-09', /* Ostersonntag */
                '2023-04-10', /* Ostermontag */
                '2023-05-01', /* Tag der Arbeit */
                '2023-05-18', /* Christi Himmelfahrt */
                '2023-05-28', /* Pfingstsonntag */
                '2023-05-29', /* Pfingstmontag */
                '2023-10-03', /* Tag der Deutschen Einheit */
                '2023-12-25', /* Erster Weihnachtsfeiertag */
                '2023-12-26', /* Zweiter Weihnachtsfeiertag */
            ]],
            [++$number, 2024, Country::DE, CountryDe::STATE_ALL, [
                '2024-01-01', /* Neujahr */
                '2024-03-29', /* Karfreitag */
                '2024-03-31', /* Ostersonntag */
                '2024-04-01', /* Ostermontag */
                '2024-05-01', /* Tag der Arbeit */
                '2024-05-09', /* Christi Himmelfahrt */
                '2024-05-19', /* Pfingstsonntag */
                '2024-05-20', /* Pfingstmontag */
                '2024-10-03', /* Tag der Deutschen Einheit */
                '2024-12-25', /* Erster Weihnachtsfeiertag */
                '2024-12-26', /* Zweiter Weihnachtsfeiertag */
            ]],
            [++$number, 2025, Country::DE, CountryDe::STATE_ALL, [
                '2025-01-01', /* Neujahr */
                '2025-04-18', /* Karfreitag */
                '2025-04-20', /* Ostersonntag */
                '2025-04-21', /* Ostermontag */
                '2025-05-01', /* Tag der Arbeit */
                '2025-05-29', /* Christi Himmelfahrt */
                '2025-06-08', /* Pfingstsonntag */
                '2025-06-09', /* Pfingstmontag */
                '2025-10-03', /* Tag der Deutschen Einheit */
                '2025-12-25', /* Erster Weihnachtsfeiertag */
                '2025-12-26', /* Zweiter Weihnachtsfeiertag */
            ]],

            /* Sachsen */
            [++$number, 2024, Country::DE, CountryDe::STATE_SN, [
                '2024-01-01', /* Neujahr */
                '2024-03-29', /* Karfreitag */
                '2024-03-31', /* Ostersonntag */
                '2024-04-01', /* Ostermontag */
                '2024-05-01', /* Tag der Arbeit */
                '2024-05-09', /* Christi Himmelfahrt */
                '2024-05-19', /* Pfingstsonntag */
                '2024-05-20', /* Pfingstmontag */
                '2024-05-30', /* Fronleichnam */
                '2024-10-03', /* Tag der Deutschen Einheit */
                '2024-10-31', /* Reformationstag */
                '2024-11-20', /* Buß- und Bettag */
                '2024-12-25', /* Erster Weihnachtsfeiertag */
                '2024-12-26', /* Zweiter Weihnachtsfeiertag */
            ]],

            /* Baden-Württemberg */
            [++$number, 2024, Country::DE, CountryDe::STATE_BW, [
                '2024-01-01', /* Neujahr */
                '2024-01-06', /* Heilige drei Könige */
                '2024-03-28', /* Gründonnerstag */
                '2024-03-29', /* Karfreitag */
                '2024-03-31', /* Ostersonntag */
                '2024-04-01', /* Ostermontag */
                '2024-05-01', /* Tag der Arbeit */
                '2024-05-09', /* Christi Himmelfahrt */
                '2024-05-19', /* Pfingstsonntag */
                '2024-05-20', /* Pfingstmontag */
                '2024-05-30', /* Fronleichnam */
                '2024-10-03', /* Tag der Deutschen Einheit */
                '2024-11-01', /* Allerheiligen */
                '2024-12-25', /* Erster Weihnachtsfeiertag */
                '2024-12-26', /* Zweiter Weihnachtsfeiertag */
            ]],

            /* Hamburg */
            [++$number, 2024, Country::DE, CountryDe::STATE_HH, [
                '2024-01-01', /* Neujahr */
                '2024-03-29', /* Karfreitag */
                '2024-03-31', /* Ostersonntag */
                '2024-04-01', /* Ostermontag */
                '2024-05-01', /* Tag der Arbeit */
                '2024-05-09', /* Christi Himmelfahrt */
                '2024-05-19', /* Pfingstsonntag */
                '2024-05-20', /* Pfingstmontag */
                '2024-10-03', /* Tag der Deutschen Einheit */
                '2024-10-31', /* Reformationstag */
                '2024-12-25', /* Erster Weihnachtsfeiertag */
                '2024-12-26', /* Zweiter Weihnachtsfeiertag */
            ]],
            [++$number, 2025, Country::DE, CountryDe::STATE_HH, [
                '2025-01-01', /* Neujahr */
                '2025-04-18', /* Karfreitag */
                '2025-04-20', /* Ostersonntag */
                '2025-04-21', /* Ostermontag */
                '2025-05-01', /* Tag der Arbeit */
                '2025-05-29', /* Christi Himmelfahrt */
                '2025-06-08', /* Pfingstsonntag */
                '2025-06-09', /* Pfingstmontag */
                '2025-10-03', /* Tag der deutschen Einheit */
                '2025-10-31', /* Reformationstag */
                '2025-12-25', /* Erster Weihnachtsfeiertag */
                '2025-12-26', /* Zweiter Weihnachtsfeiertag */
            ]],
        ];
    }

    /**
     * Test wrapper
     *
     * @dataProvider dataProviderNoWorkingDays
     *
     * @test
     * @testdox $number) Test Holiday $year $state
     * @param string[] $expectedHolidays
     * @throws Exception
     */
    public function wrapperNoWorkingDays(
        int $number,
        int $year,
        string $country,
        string $state,
        array $expectedHolidays,
    ): void
    {
        /* Arrange */

        /* Act */
        $holiday = new Holiday($year, $country, $state);

        /* Assert */
        $this->assertIsNumeric($number); // To avoid phpmd warning.
        $this->assertSame($expectedHolidays, array_values($holiday->getNoWorkingDaysFormatted()));
    }

    /**
     * Data provider
     *
     * @return array<int, array{int, mixed}>
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function dataProviderNoWorkingDays(): array
    {
        $number = 0;

        return [
            /* Germany-wide */
            [++$number, 2024, Country::DE, CountryDe::STATE_ALL, [
                '2024-01-01',
                '2024-01-06',
                '2024-01-07',
                '2024-01-13',
                '2024-01-14',
                '2024-01-20',
                '2024-01-21',
                '2024-01-27',
                '2024-01-28',
                '2024-02-03',
                '2024-02-04',
                '2024-02-10',
                '2024-02-11',
                '2024-02-17',
                '2024-02-18',
                '2024-02-24',
                '2024-02-25',
                '2024-03-02',
                '2024-03-03',
                '2024-03-09',
                '2024-03-10',
                '2024-03-16',
                '2024-03-17',
                '2024-03-23',
                '2024-03-24',
                '2024-03-29',
                '2024-03-30',
                '2024-03-31',
                '2024-03-31',
                '2024-04-01',
                '2024-04-06',
                '2024-04-07',
                '2024-04-13',
                '2024-04-14',
                '2024-04-20',
                '2024-04-21',
                '2024-04-27',
                '2024-04-28',
                '2024-05-01',
                '2024-05-04',
                '2024-05-05',
                '2024-05-09',
                '2024-05-11',
                '2024-05-12',
                '2024-05-18',
                '2024-05-19',
                '2024-05-19',
                '2024-05-20',
                '2024-05-25',
                '2024-05-26',
                '2024-06-01',
                '2024-06-02',
                '2024-06-08',
                '2024-06-09',
                '2024-06-15',
                '2024-06-16',
                '2024-06-22',
                '2024-06-23',
                '2024-06-29',
                '2024-06-30',
                '2024-07-06',
                '2024-07-07',
                '2024-07-13',
                '2024-07-14',
                '2024-07-20',
                '2024-07-21',
                '2024-07-27',
                '2024-07-28',
                '2024-08-03',
                '2024-08-04',
                '2024-08-10',
                '2024-08-11',
                '2024-08-17',
                '2024-08-18',
                '2024-08-24',
                '2024-08-25',
                '2024-08-31',
                '2024-09-01',
                '2024-09-07',
                '2024-09-08',
                '2024-09-14',
                '2024-09-15',
                '2024-09-21',
                '2024-09-22',
                '2024-09-28',
                '2024-09-29',
                '2024-10-03',
                '2024-10-05',
                '2024-10-06',
                '2024-10-12',
                '2024-10-13',
                '2024-10-19',
                '2024-10-20',
                '2024-10-26',
                '2024-10-27',
                '2024-11-02',
                '2024-11-03',
                '2024-11-09',
                '2024-11-10',
                '2024-11-16',
                '2024-11-17',
                '2024-11-23',
                '2024-11-24',
                '2024-11-30',
                '2024-12-01',
                '2024-12-07',
                '2024-12-08',
                '2024-12-14',
                '2024-12-15',
                '2024-12-21',
                '2024-12-22',
                '2024-12-25',
                '2024-12-26',
                '2024-12-28',
                '2024-12-29',
            ]],
        ];
    }

    /**
     * Test wrapper
     *
     * @dataProvider dataProviderNextWorkingDay
     *
     * @test
     * @testdox $number) Test Holiday $year $state
     * @throws Exception
     */
    public function wrapperNextWorkingDay(
        int $number,
        int $year,
        string $country,
        string $state,
        string $todayDay,
        int $distanceWorkingDay,
        string $expectedDay,
    ): void
    {
        /* Arrange */

        /* Act */
        $holiday = new Holiday($year, $country, $state);

        /* Assert */
        $this->assertIsNumeric($number); // To avoid phpmd warning.
        $this->assertSame($expectedDay, $holiday->getNextWorkingDay(new DateTimeImmutable($todayDay), $distanceWorkingDay)->format('Y-m-d'));
    }

    /**
     * Data provider
     *
     * @return array<int, array{int, mixed}>
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function dataProviderNextWorkingDay(): array
    {
        $number = 0;

        return [
            /* Germany-wide */
            [++$number, 2024, Country::DE, CountryDe::STATE_HH, '2024-01-01', 14, '2024-01-22'],
            [++$number, 2024, Country::DE, CountryDe::STATE_HH, '2024-02-15', 14, '2024-03-06'],
        ];
    }
}
