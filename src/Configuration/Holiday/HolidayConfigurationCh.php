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

use Ixnode\PhpPublicHoliday\Translation\Holiday;
use Ixnode\PhpTimezone\Constants\State\Europe\StateCh;

/**
 * Class HolidayConfigurationCh
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-07-18)
 * @since 0.1.0 (2024-07-18) First version.
 */
readonly class HolidayConfigurationCh
{
    final public const HOLIDAYS = [

        /*
         * Static holidays.
         */
        [
            /* Neujahr */
            'name' => Holiday::HOLIDAY_CODE_NEW_YEAR,
            'date' => '01-01',
            'states' => [StateCh::STATE_CODE_ALL],
        ],
        [
            /* Berchtoldstag */
            'name' => Holiday::HOLIDAY_CODE_BERCHTOLDSTAG,
            'date' => '01-02',
            'states' => [StateCh::STATE_CODE_AG, StateCh::STATE_CODE_BE, StateCh::STATE_CODE_JU, StateCh::STATE_CODE_TG, StateCh::STATE_CODE_VD],
        ],
        [
            /* Heilige Drei Könige */
            'name' => Holiday::HOLIDAY_CODE_BIBLICAL_MAGI,
            'date' => '01-06',
            'states' => [StateCh::STATE_CODE_GR, StateCh::STATE_CODE_SZ, StateCh::STATE_CODE_TI, StateCh::STATE_CODE_UR],
        ],
        [
            /* Josefstag */
            'name' => Holiday::HOLIDAY_CODE_SAINT_JOSEPHS_DAY,
            'date' => '03-19',
            'states' => [StateCh::STATE_CODE_GR, StateCh::STATE_CODE_LU, StateCh::STATE_CODE_NW, StateCh::STATE_CODE_SZ, StateCh::STATE_CODE_TI, StateCh::STATE_CODE_UR, StateCh::STATE_CODE_VS, StateCh::STATE_CODE_ZG],
        ],
        [
            /* Erster Mai, Tag der Arbeit */
            'name' => Holiday::HOLIDAY_CODE_LABOUR_DAY,
            'date' => '05-01',
            'states' => [
                StateCh::STATE_CODE_AG,
                StateCh::STATE_CODE_BL,
                StateCh::STATE_CODE_BS,
                StateCh::STATE_CODE_FR,
                StateCh::STATE_CODE_JU,
                StateCh::STATE_CODE_NE,
                StateCh::STATE_CODE_SH,
                StateCh::STATE_CODE_SO,
                StateCh::STATE_CODE_TI,
                StateCh::STATE_CODE_TG,
                StateCh::STATE_CODE_ZH,
            ],
        ],
        [
            /* Bundesfeiertag */
            'name' => Holiday::HOLIDAY_CODE_SWISS_NATIONAL_DAY,
            'date' => '08-01',
            'states' => [StateCh::STATE_CODE_ALL],
        ],
        [
            /* Mariä Himmelfahrt */
            'name' => Holiday::HOLIDAY_CODE_ASSUMPTION_OF_MARY,
            'date' => '08-15',
            'states' => [
                StateCh::STATE_CODE_AG,
                StateCh::STATE_CODE_AI,
                StateCh::STATE_CODE_FR,
                StateCh::STATE_CODE_GR,
                StateCh::STATE_CODE_NW,
                StateCh::STATE_CODE_OW,
                StateCh::STATE_CODE_SZ,
                StateCh::STATE_CODE_SO,
                StateCh::STATE_CODE_TI,
                StateCh::STATE_CODE_UR,
                StateCh::STATE_CODE_ZG,
            ],
        ],
        [
            /* Allerheiligen */
            'name' => Holiday::HOLIDAY_CODE_ALL_SAINTS_DAY,
            'date' => '11-01',
            'states' => [
                StateCh::STATE_CODE_AG,
                StateCh::STATE_CODE_AI,
                StateCh::STATE_CODE_FR,
                StateCh::STATE_CODE_GL,
                StateCh::STATE_CODE_GR,
                StateCh::STATE_CODE_JU,
                StateCh::STATE_CODE_LU,
                StateCh::STATE_CODE_NW,
                StateCh::STATE_CODE_OW,
                StateCh::STATE_CODE_SZ,
                StateCh::STATE_CODE_SO,
                StateCh::STATE_CODE_SG,
                StateCh::STATE_CODE_TI,
                StateCh::STATE_CODE_UR,
                StateCh::STATE_CODE_VS,
                StateCh::STATE_CODE_ZG,
            ],
        ],
        [
            /* Mariä Empfängnis */
            'name' => Holiday::HOLIDAY_CODE_IMMACULATE_CONCEPTION,
            'date' => '12-08',
            'states' => [
                StateCh::STATE_CODE_AG,
                StateCh::STATE_CODE_AI,
                StateCh::STATE_CODE_FR,
                StateCh::STATE_CODE_GR,
                StateCh::STATE_CODE_LU,
                StateCh::STATE_CODE_NW,
                StateCh::STATE_CODE_OW,
                StateCh::STATE_CODE_SZ,
                StateCh::STATE_CODE_SO,
                StateCh::STATE_CODE_TI,
                StateCh::STATE_CODE_UR,
                StateCh::STATE_CODE_VS,
                StateCh::STATE_CODE_ZG,
            ],
        ],
        [
            /* Weihnachten */
            'name' => Holiday::HOLIDAY_CODE_CHRISTMAS,
            'date' => '12-25',
            'states' => [StateCh::STATE_CODE_ALL],
        ],
        [
            /* Stephanstag */
            'name' => Holiday::HOLIDAY_CODE_STEFANITAG_CH,
            'date' => '12-26',
            'states' => [
                StateCh::STATE_CODE_AG,
                StateCh::STATE_CODE_AR,
                StateCh::STATE_CODE_AI,
                StateCh::STATE_CODE_BL,
                StateCh::STATE_CODE_BS,
                StateCh::STATE_CODE_BE,
                StateCh::STATE_CODE_GL,
                StateCh::STATE_CODE_GR,
                StateCh::STATE_CODE_LU,
                StateCh::STATE_CODE_SH,
                StateCh::STATE_CODE_SZ,
                StateCh::STATE_CODE_SO,
                StateCh::STATE_CODE_SG,
                StateCh::STATE_CODE_TI,
                StateCh::STATE_CODE_TG,
                StateCh::STATE_CODE_UR,
                StateCh::STATE_CODE_ZH,
            ],
        ],

        /*
         * Dynamic holidays.
         */
        [
            /* Karfreitag */
            'name' => Holiday::HOLIDAY_CODE_GOOD_FRIDAY,
            'date' => '-2 days',
            'states' => [
                /* Not in Tessing and Wallis */
                StateCh::STATE_CODE_ZH,
                StateCh::STATE_CODE_BE,
                StateCh::STATE_CODE_LU,
                StateCh::STATE_CODE_UR,
                StateCh::STATE_CODE_SZ,
                StateCh::STATE_CODE_OW,
                StateCh::STATE_CODE_NW,
                StateCh::STATE_CODE_GL,
                StateCh::STATE_CODE_ZG,
                StateCh::STATE_CODE_FR,
                StateCh::STATE_CODE_SO,
                StateCh::STATE_CODE_BS,
                StateCh::STATE_CODE_BL,
                StateCh::STATE_CODE_SH,
                StateCh::STATE_CODE_AR,
                StateCh::STATE_CODE_AI,
                StateCh::STATE_CODE_SG,
                StateCh::STATE_CODE_GR,
                StateCh::STATE_CODE_AG,
                StateCh::STATE_CODE_TG,
                StateCh::STATE_CODE_VD,
                StateCh::STATE_CODE_NE,
                StateCh::STATE_CODE_GE,
                StateCh::STATE_CODE_JU,
            ],
        ],
        [
            /* Ostermontag */
            'name' => Holiday::HOLIDAY_CODE_EASTER_MONDAY,
            'date' => '+1 day',
            'states' => [StateCh::STATE_CODE_ALL],
        ],
        [
            /* Auffahrt */
            'name' => Holiday::HOLIDAY_CODE_FEAST_OF_THE_ASCENSION_CH,
            'date' => '+39 days',
            'states' => [StateCh::STATE_CODE_ALL],
        ],
        [
            /* Pfingstmontag */
            'name' => Holiday::HOLIDAY_CODE_WHIT_MONDAY,
            'date' => '+50 days',
            'states' => [
                StateCh::STATE_CODE_AG,
                StateCh::STATE_CODE_AR,
                StateCh::STATE_CODE_AI,
                StateCh::STATE_CODE_BL,
                StateCh::STATE_CODE_BS,
                StateCh::STATE_CODE_BE,
                StateCh::STATE_CODE_GE,
                StateCh::STATE_CODE_GL,
                StateCh::STATE_CODE_GR,
                StateCh::STATE_CODE_JU,
                StateCh::STATE_CODE_SH,
                StateCh::STATE_CODE_SZ,
                StateCh::STATE_CODE_SO,
                StateCh::STATE_CODE_SG,
                StateCh::STATE_CODE_TI,
                StateCh::STATE_CODE_TG,
                StateCh::STATE_CODE_UR,
                StateCh::STATE_CODE_VD,
                StateCh::STATE_CODE_ZH,
            ],
        ],
        [
            /* Fronleichnam */
            'name' => Holiday::HOLIDAY_CODE_FEAST_OF_CORPUS_CHRISTI,
            'date' => '+60 days',
            'states' => [
                StateCh::STATE_CODE_AG,
                StateCh::STATE_CODE_AR,
                StateCh::STATE_CODE_FR,
                StateCh::STATE_CODE_GR,
                StateCh::STATE_CODE_JU,
                StateCh::STATE_CODE_LU,
                StateCh::STATE_CODE_NW,
                StateCh::STATE_CODE_OW,
                StateCh::STATE_CODE_SZ,
                StateCh::STATE_CODE_SO,
                StateCh::STATE_CODE_TI,
                StateCh::STATE_CODE_UR,
                StateCh::STATE_CODE_VS,
                StateCh::STATE_CODE_ZG,
                StateCh::STATE_CODE_NE,
            ],
        ],
    ];
}
