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
        [
            'name' => Holiday::HOLIDAY_CODE_NEW_YEAR, // Neujahr
            'date' => '01-01',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            'name' => Holiday::HOLIDAY_CODE_BIBLICAL_MAGI, // Heilige drei Könige
            'date' => '01-06',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            'name' => Holiday::HOLIDAY_CODE_EASTER_SUNDAY, // Ostersonntag
            'date' => '+0 days',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            'name' => Holiday::HOLIDAY_CODE_EASTER_MONDAY, // Ostermontag
            'date' => '+1 day',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            'name' => Holiday::HOLIDAY_CODE_FEAST_OF_THE_ASCENSION, // Christi Himmelfahrt
            'date' => '+39 days',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            'name' => Holiday::HOLIDAY_CODE_WHIT_SUNDAY, // Pfingstsonntag
            'date' => '+49 days',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            'name' => Holiday::HOLIDAY_CODE_WHIT_MONDAY, // Pfingstmontag
            'date' => '+50 days',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            'name' => Holiday::HOLIDAY_CODE_STATE_HOLIDAY, // Staatsfeiertag
            'date' => '05-01',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            'name' => Holiday::HOLIDAY_CODE_FEAST_OF_CORPUS_CHRISTI, // Fronleichnam
            'date' => '+60 days',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            'name' => Holiday::HOLIDAY_CODE_ASSUMPTION_OF_MARY, // Mariä Himmelfahrt
            'date' => '08-15',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            'name' => Holiday::HOLIDAY_CODE_NATIONAL_HOLIDAY, // Nationalfeiertag
            'date' => '10-26',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            'name' => Holiday::HOLIDAY_CODE_ALL_SAINTS_DAY,  // Allerheiligen
            'date' => '11-01',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            'name' => Holiday::HOLIDAY_CODE_IMMACULATE_CONCEPTION,  // Allerheiligen
            'date' => '12-08',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            'name' => Holiday::HOLIDAY_CODE_CHRISTMAS, // Weihnachten
            'date' => '12-25',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
        [
            'name' => Holiday::HOLIDAY_CODE_STEFANITAG, // Stefanitag
            'date' => '12-26',
            'states' => [StateAt::STATE_CODE_ALL],
        ],
    ];
}
