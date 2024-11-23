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

namespace Ixnode\PhpPublicHoliday\Configuration\Holiday;

use Ixnode\PhpPublicHoliday\Constant\Holiday as ConstantHoliday;
use Ixnode\PhpPublicHoliday\Tests\Unit\PublicHolidayDeTest;
use Ixnode\PhpPublicHoliday\Translation\Holiday;
use Ixnode\PhpTimezone\Constants\State\Europe\StateDe;

/**
 * Class HolidayConfigurationDe
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-07-18)
 * @since 0.1.0 (2024-07-18) First version.
 * @link PublicHolidayDeTest
 */
readonly class HolidayConfigurationDe
{
    final public const HOLIDAYS = [

        /*
         * Static holidays.
         */
        [
            /* Neujahr */
            'name' => Holiday::HOLIDAY_CODE_NEW_YEAR,
            'date' => '01-01',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            /* Heilige Drei Könige */
            'name' => Holiday::HOLIDAY_CODE_BIBLICAL_MAGI,
            'date' => '01-06',
            'states' => [StateDe::STATE_CODE_BW, StateDe::STATE_CODE_BY, StateDe::STATE_CODE_ST],
        ],
        [
            /* Internationaler Frauentag */
            'name' => Holiday::HOLIDAY_CODE_INTERNATIONAL_WOMEN_S_DAY,
            'date' => '03-08',
            'states' => [StateDe::STATE_CODE_BE, StateDe::STATE_CODE_MV],
        ],
        [
            /* Erster Mai, Tag der Arbeit */
            'name' => Holiday::HOLIDAY_CODE_LABOUR_DAY,
            'date' => '05-01',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            /* Friedensfest Augsburg */
            'name' => Holiday::HOLIDAY_CODE_AUGSBURG_PEACE_FESTIVAL,
            'date' => '08-08',
            'states' => [StateDe::STATE_CODE_BY],
        ],
        [
            /* Mariä Himmelfahrt */
            'name' => Holiday::HOLIDAY_CODE_ASSUMPTION_OF_MARY,
            'date' => '08-15',
            'states' => [StateDe::STATE_CODE_BY, StateDe::STATE_CODE_SL],
        ],
        [
            /* Weltkindertag */
            'name' => Holiday::HOLIDAY_CODE_CHILDREN_S_DAY,
            'date' => '09-20',
            'states' => [StateDe::STATE_CODE_TH],
        ],
        [
            /* Tag der Deutschen Einheit */
            'name' => Holiday::HOLIDAY_CODE_GERMAN_UNITY_DAY,
            'date' => '10-03',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            /* Reformationstag */
            'name' => Holiday::HOLIDAY_CODE_REFORMATION_DAY,
            'date' => '10-31',
            'states' => [StateDe::STATE_CODE_BB, StateDe::STATE_CODE_HB, StateDe::STATE_CODE_HH, StateDe::STATE_CODE_MV, StateDe::STATE_CODE_NI, StateDe::STATE_CODE_SN, StateDe::STATE_CODE_ST, StateDe::STATE_CODE_SH, StateDe::STATE_CODE_TH],
        ],
        [
            /* Allerheiligen */
            'name' => Holiday::HOLIDAY_CODE_ALL_SAINTS_DAY,
            'date' => '11-01',
            'states' => [StateDe::STATE_CODE_BW, StateDe::STATE_CODE_BY, StateDe::STATE_CODE_NW, StateDe::STATE_CODE_RP, StateDe::STATE_CODE_SL],
        ],
        [
            /* 1. Weihnachtsfeiertag */
            'name' => Holiday::HOLIDAY_CODE_CHRISTMAS_DAY,
            'date' => '12-25',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            /* 2. Weihnachtsfeiertag */
            'name' => Holiday::HOLIDAY_CODE_BOXING_DAY,
            'date' => '12-26',
            'states' => [StateDe::STATE_CODE_ALL],
        ],

        /*
         * Dynamic holidays.
         */
        [
            /* Gründonnerstag */
            'name' => Holiday::HOLIDAY_CODE_MAUNDY_THURSDAY,
            'date' => '-3 days',
            'states' => [StateDe::STATE_CODE_BW],
        ],
        [
            /* Karfreitag */
            'name' => Holiday::HOLIDAY_CODE_GOOD_FRIDAY,
            'date' => '-2 days',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            /* Ostersonntag */
            'name' => Holiday::HOLIDAY_CODE_EASTER_SUNDAY,
            'date' => '+0 days',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            /* Ostermontag */
            'name' => Holiday::HOLIDAY_CODE_EASTER_MONDAY,
            'date' => '+1 day',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            /* Christi Himmelfahrt */
            'name' => Holiday::HOLIDAY_CODE_FEAST_OF_THE_ASCENSION,
            'date' => '+39 days',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            /* Pfingstsonntag */
            'name' => Holiday::HOLIDAY_CODE_WHIT_SUNDAY,
            'date' => '+49 days',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            /* Pfingstmontag */
            'name' => Holiday::HOLIDAY_CODE_WHIT_MONDAY,
            'date' => '+50 days',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            /* Fronleichnam */
            'name' => Holiday::HOLIDAY_CODE_FEAST_OF_CORPUS_CHRISTI,
            'date' => '+60 days',
            'states' => [StateDe::STATE_CODE_BW, StateDe::STATE_CODE_BY, StateDe::STATE_CODE_HE, StateDe::STATE_CODE_NW, StateDe::STATE_CODE_RP, StateDe::STATE_CODE_SL, StateDe::STATE_CODE_SN, StateDe::STATE_CODE_TH],
        ],

        /*
         * Special dynamic holidays.
         */
        [
            /* Buß- und Bettag */
            'name' => Holiday::HOLIDAY_CODE_BUSS_UND_BETTAG,
            'date' => ConstantHoliday::BUSS_UND_BETTAG,
            'states' => [StateDe::STATE_CODE_SN],
        ],
    ];
}
