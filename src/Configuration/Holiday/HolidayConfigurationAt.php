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

use Ixnode\PhpPublicHoliday\Tests\Unit\PublicHolidayDeTest;
use Ixnode\PhpPublicHoliday\Translation\Holiday;
use Ixnode\PhpTimezone\Constants\State\Europe\StateAt;

/**
 * Class HolidayConfigurationDe
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-07-18)
 * @since 0.1.0 (2024-07-18) First version.
 * @link PublicHolidayDeTest
 */
readonly class HolidayConfigurationAt
{
    final public const HOLIDAYS = [

        /*
         * Static holidays.
         */
        [
            /* Neujahr */
            'name' => Holiday::HOLIDAY_CODE_NEW_YEAR,
            'date' => '01-01',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            /* Heilige drei Könige */
            'name' => Holiday::HOLIDAY_CODE_BIBLICAL_MAGI,
            'date' => '01-06',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            /* Staatsfeiertag */
            'name' => Holiday::HOLIDAY_CODE_STATE_HOLIDAY,
            'date' => '05-01',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            /* Mariä Himmelfahrt */
            'name' => Holiday::HOLIDAY_CODE_ASSUMPTION_OF_MARY,
            'date' => '08-15',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            /* Nationalfeiertag */
            'name' => Holiday::HOLIDAY_CODE_NATIONAL_HOLIDAY,
            'date' => '10-26',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            /* Allerheiligen */
            'name' => Holiday::HOLIDAY_CODE_ALL_SAINTS_DAY,
            'date' => '11-01',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            /* Mariä Empfängnis */
            'name' => Holiday::HOLIDAY_CODE_IMMACULATE_CONCEPTION,
            'date' => '12-08',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            /* Weihnachten */
            'name' => Holiday::HOLIDAY_CODE_CHRISTMAS,
            'date' => '12-25',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            /* Stefanitag */
            'name' => Holiday::HOLIDAY_CODE_STEFANITAG,
            'date' => '12-26',
            'states' => [StateAt::STATE_CODE_ALL],
        ],

        /*
         * Dynamic holidays.
         */
        [
            /* Ostersonntag */
            'name' => Holiday::HOLIDAY_CODE_EASTER_SUNDAY,
            'date' => '+0 days',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            /* Ostermontag */
            'name' => Holiday::HOLIDAY_CODE_EASTER_MONDAY,
            'date' => '+1 day',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            /* Christi Himmelfahrt */
            'name' => Holiday::HOLIDAY_CODE_FEAST_OF_THE_ASCENSION,
            'date' => '+39 days',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            /* Pfingstsonntag */
            'name' => Holiday::HOLIDAY_CODE_WHIT_SUNDAY,
            'date' => '+49 days',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            /* Pfingstmontag */
            'name' => Holiday::HOLIDAY_CODE_WHIT_MONDAY,
            'date' => '+50 days',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            /* Fronleichnam */
            'name' => Holiday::HOLIDAY_CODE_FEAST_OF_CORPUS_CHRISTI,
            'date' => '+60 days',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
    ];
}
