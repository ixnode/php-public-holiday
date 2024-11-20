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

use Ixnode\PhpPublicHoliday\Configuration\Configuration;
use Ixnode\PhpPublicHoliday\Tests\Unit\HolidayDeTest;
use Ixnode\PhpPublicHoliday\Translation\TranslationKeys;
use Ixnode\PhpTimezone\Constants\State\Europe\StateDe;

/**
 * Class HolidayConfigurationDe
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-07-18)
 * @since 0.1.0 (2024-07-18) First version.
 * @link HolidayDeTest
 */
readonly class HolidayConfigurationDe
{
    final public const HOLIDAYS = [
        [
            'name' => TranslationKeys::NEW_YEAR,
            'date' => '01-01',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::BIBLICAL_MAGI,
            'date' => '01-06',
            'states' => [StateDe::STATE_CODE_BW, StateDe::STATE_CODE_BY, StateDe::STATE_CODE_ST],
        ],
        [
            'name' => TranslationKeys::INTERNATIONAL_WOMEN_S_DAY,
            'date' => '03-08',
            'states' => [StateDe::STATE_CODE_BE, StateDe::STATE_CODE_MV],
        ],
        [
            'name' => TranslationKeys::MAUNDY_THURSDAY,
            'date' => '-3 days',
            'states' => [StateDe::STATE_CODE_BW],
        ],
        [
            'name' => TranslationKeys::GOOD_FRIDAY,
            'date' => '-2 days',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::EASTER_SUNDAY,
            'date' => '+0 days',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::EASTER_MONDAY,
            'date' => '+1 day',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::FEAST_OF_THE_ASCENSION,
            'date' => '+39 days',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::WHIT_SUNDAY,
            'date' => '+49 days',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::WHIT_MONDAY,
            'date' => '+50 days',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::LABOUR_DAY,
            'date' => '05-01',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::FEAST_OF_CORPUS_CHRISTI,
            'date' => '+60 days',
            'states' => [StateDe::STATE_CODE_BW, StateDe::STATE_CODE_BY, StateDe::STATE_CODE_HE, StateDe::STATE_CODE_NW, StateDe::STATE_CODE_RP, StateDe::STATE_CODE_SL, StateDe::STATE_CODE_SN, StateDe::STATE_CODE_TH],
        ],
        [
            'name' => TranslationKeys::AUGSBURG_PEACE_FESTIVAL,
            'date' => '08-08',
            'states' => [StateDe::STATE_CODE_BY],
        ],
        [
            'name' => TranslationKeys::ASSUMPTION_OF_MARY,
            'date' => '08-15',
            'states' => [StateDe::STATE_CODE_BY, StateDe::STATE_CODE_SL],
        ],
        [
            'name' => TranslationKeys::CHILDREN_S_DAY,
            'date' => '09-20',
            'states' => [StateDe::STATE_CODE_TH],
        ],
        [
            'name' => TranslationKeys::GERMAN_UNITY_DAY,
            'date' => '10-03',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::REFORMATION_DAY,
            'date' => '10-31',
            'states' => [StateDe::STATE_CODE_BB, StateDe::STATE_CODE_HB, StateDe::STATE_CODE_HH, StateDe::STATE_CODE_MV, StateDe::STATE_CODE_NI, StateDe::STATE_CODE_SN, StateDe::STATE_CODE_ST, StateDe::STATE_CODE_SH, StateDe::STATE_CODE_TH],
        ],
        [
            'name' => TranslationKeys::ALL_SAINTS_DAY,
            'date' => '11-01',
            'states' => [StateDe::STATE_CODE_BW, StateDe::STATE_CODE_BY, StateDe::STATE_CODE_NW, StateDe::STATE_CODE_RP, StateDe::STATE_CODE_SL],
        ],
        [
            'name' => TranslationKeys::BUSS_UND_BETTAG,
            'date' => Configuration::BUSS_UND_BETTAG,
            'states' => [StateDe::STATE_CODE_SN],
        ],
        [
            'name' => TranslationKeys::CHRISTMAS_DAY,
            'date' => '12-25',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::BOXING_DAY,
            'date' => '12-26',
            'states' => [StateDe::STATE_CODE_ALL],
        ],
    ];
}
