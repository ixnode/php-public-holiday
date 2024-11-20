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

namespace Ixnode\PhpPublicHoliday\Configuration\Country;

use Ixnode\PhpPublicHoliday\Configuration\Configuration;
use Ixnode\PhpPublicHoliday\Translation\TranslationKeys;
use Ixnode\PhpTimezone\Constants\State\Europe\StateGermany;

/**
 * Class CountryDe
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-07-18)
 * @since 0.1.0 (2024-07-18) First version.
 * @link HolidayTest
 */
readonly class CountryDe
{
    final public const HOLIDAYS = [
        [
            'name' => TranslationKeys::NEW_YEAR,
            'date' => '01-01',
            'states' => [StateGermany::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::BIBLICAL_MAGI,
            'date' => '01-06',
            'states' => [StateGermany::STATE_CODE_BW, StateGermany::STATE_CODE_BY, StateGermany::STATE_CODE_ST],
        ],
        [
            'name' => TranslationKeys::INTERNATIONAL_WOMEN_S_DAY,
            'date' => '03-08',
            'states' => [StateGermany::STATE_CODE_BE, StateGermany::STATE_CODE_MV],
        ],
        [
            'name' => TranslationKeys::MAUNDY_THURSDAY,
            'date' => '-3 days',
            'states' => [StateGermany::STATE_CODE_BW],
        ],
        [
            'name' => TranslationKeys::GOOD_FRIDAY,
            'date' => '-2 days',
            'states' => [StateGermany::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::EASTER_SUNDAY,
            'date' => '+0 days',
            'states' => [StateGermany::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::EASTER_MONDAY,
            'date' => '+1 day',
            'states' => [StateGermany::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::FEAST_OF_THE_ASCENSION,
            'date' => '+39 days',
            'states' => [StateGermany::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::WHIT_SUNDAY,
            'date' => '+49 days',
            'states' => [StateGermany::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::WHIT_MONDAY,
            'date' => '+50 days',
            'states' => [StateGermany::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::LABOUR_DAY,
            'date' => '05-01',
            'states' => [StateGermany::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::FEAST_OF_CORPUS_CHRISTI,
            'date' => '+60 days',
            'states' => [StateGermany::STATE_CODE_BW, StateGermany::STATE_CODE_BY, StateGermany::STATE_CODE_HE, StateGermany::STATE_CODE_NW, StateGermany::STATE_CODE_RP, StateGermany::STATE_CODE_SL, StateGermany::STATE_CODE_SN, StateGermany::STATE_CODE_TH],
        ],
        [
            'name' => TranslationKeys::AUGSBURG_PEACE_FESTIVAL,
            'date' => '08-08',
            'states' => [StateGermany::STATE_CODE_BY],
        ],
        [
            'name' => TranslationKeys::ASSUMPTION_OF_MARY,
            'date' => '08-15',
            'states' => [StateGermany::STATE_CODE_BY, StateGermany::STATE_CODE_SL],
        ],
        [
            'name' => TranslationKeys::CHILDREN_S_DAY,
            'date' => '09-20',
            'states' => [StateGermany::STATE_CODE_TH],
        ],
        [
            'name' => TranslationKeys::GERMAN_UNITY_DAY,
            'date' => '10-03',
            'states' => [StateGermany::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::REFORMATION_DAY,
            'date' => '10-31',
            'states' => [StateGermany::STATE_CODE_BB, StateGermany::STATE_CODE_HB, StateGermany::STATE_CODE_HH, StateGermany::STATE_CODE_MV, StateGermany::STATE_CODE_NI, StateGermany::STATE_CODE_SN, StateGermany::STATE_CODE_ST, StateGermany::STATE_CODE_SH, StateGermany::STATE_CODE_TH],
        ],
        [
            'name' => TranslationKeys::ALL_SAINTS_DAY,
            'date' => '11-01',
            'states' => [StateGermany::STATE_CODE_BW, StateGermany::STATE_CODE_BY, StateGermany::STATE_CODE_NW, StateGermany::STATE_CODE_RP, StateGermany::STATE_CODE_SL],
        ],
        [
            'name' => TranslationKeys::BUSS_UND_BETTAG,
            'date' => Configuration::BUSS_UND_BETTAG,
            'states' => [StateGermany::STATE_CODE_SN],
        ],
        [
            'name' => TranslationKeys::CHRISTMAS_DAY,
            'date' => '12-25',
            'states' => [StateGermany::STATE_CODE_ALL],
        ],
        [
            'name' => TranslationKeys::BOXING_DAY,
            'date' => '12-26',
            'states' => [StateGermany::STATE_CODE_ALL],
        ],
    ];
}
