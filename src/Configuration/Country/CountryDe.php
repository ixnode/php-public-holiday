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
    /* Deutschlandweit */
    final public const STATE_ALL = 'All states';

    /* Brandenburg */
    final public const STATE_BB = 'Brandenburg';

    /* Berlin */
    final public const STATE_BE = 'Berlin';

    /* Baden-Württemberg */
    final public const STATE_BW = 'Baden Württemberg';

    /* Bayern */
    final public const STATE_BY = 'Bavaria';

    /* Bremen */
    final public const STATE_HB = 'Bremen';

    /* Hessen */
    final public const STATE_HE = 'Hesse';

    /* Hamburg */
    final public const STATE_HH = 'Hamburg';

    /* Mecklenburg-Vorpommern */
    final public const STATE_MV = 'Mecklenburg-Western Pomerania';

    /* Niedersachsen */
    final public const STATE_NI = 'Lower Saxony';

    /* Nordrhein-Westfalen */
    final public const STATE_NW = 'North Rhine-Westphalia';

    /* Rheinland-Pfalz */
    final public const STATE_RP = 'Rhineland-Palatinate';

    /* Schleswig-Holstein */
    final public const STATE_SH = 'Schleswig-Holstein';

    /* Saarland */
    final public const STATE_SL = 'Saarland';

    /* Sachsen */
    final public const STATE_SN = 'Saxony';

    /* Sachsen-Anhalt */
    final public const STATE_ST = 'Saxony-Anhalt';

    /* Thüringen */
    final public const STATE_TH = 'Thuringia';

    final public const HOLIDAYS = [
        [
            'name' => TranslationKeys::NEW_YEAR,
            'date' => '01-01',
            'states' => [self::STATE_ALL],
        ],
        [
            'name' => TranslationKeys::BIBLICAL_MAGI,
            'date' => '01-06',
            'states' => [self::STATE_BW, self::STATE_BY, self::STATE_ST],
        ],
        [
            'name' => TranslationKeys::INTERNATIONAL_WOMEN_S_DAY,
            'date' => '03-08',
            'states' => [self::STATE_BE, self::STATE_MV],
        ],
        [
            'name' => TranslationKeys::MAUNDY_THURSDAY,
            'date' => '-3 days',
            'states' => [self::STATE_BW],
        ],
        [
            'name' => TranslationKeys::GOOD_FRIDAY,
            'date' => '-2 days',
            'states' => [self::STATE_ALL],
        ],
        [
            'name' => TranslationKeys::EASTER_SUNDAY,
            'date' => '+0 days',
            'states' => [self::STATE_ALL],
        ],
        [
            'name' => TranslationKeys::EASTER_MONDAY,
            'date' => '+1 day',
            'states' => [self::STATE_ALL],
        ],
        [
            'name' => TranslationKeys::FEAST_OF_THE_ASCENSION,
            'date' => '+39 days',
            'states' => [self::STATE_ALL],
        ],
        [
            'name' => TranslationKeys::WHIT_SUNDAY,
            'date' => '+49 days',
            'states' => [self::STATE_ALL],
        ],
        [
            'name' => TranslationKeys::WHIT_MONDAY,
            'date' => '+50 days',
            'states' => [self::STATE_ALL],
        ],
        [
            'name' => TranslationKeys::LABOUR_DAY,
            'date' => '05-01',
            'states' => [self::STATE_ALL],
        ],
        [
            'name' => TranslationKeys::FEAST_OF_CORPUS_CHRISTI,
            'date' => '+60 days',
            'states' => [self::STATE_BW, self::STATE_BY, self::STATE_HE, self::STATE_NW, self::STATE_RP, self::STATE_SL, self::STATE_SN, self::STATE_TH],
        ],
        [
            'name' => TranslationKeys::AUGSBURG_PEACE_FESTIVAL,
            'date' => '08-08',
            'states' => [self::STATE_BY],
        ],
        [
            'name' => TranslationKeys::ASSUMPTION_OF_MARY,
            'date' => '08-15',
            'states' => [self::STATE_BY, self::STATE_SL],
        ],
        [
            'name' => TranslationKeys::CHILDREN_S_DAY,
            'date' => '09-20',
            'states' => [self::STATE_TH],
        ],
        [
            'name' => TranslationKeys::GERMAN_UNITY_DAY,
            'date' => '10-03',
            'states' => [self::STATE_ALL],
        ],
        [
            'name' => TranslationKeys::REFORMATION_DAY,
            'date' => '10-31',
            'states' => [self::STATE_BB, self::STATE_HB, self::STATE_HH, self::STATE_MV, self::STATE_NI, self::STATE_SN, self::STATE_ST, self::STATE_SH, self::STATE_TH],
        ],
        [
            'name' => TranslationKeys::ALL_SAINTS_DAY,
            'date' => '11-01',
            'states' => [self::STATE_BW, self::STATE_BY, self::STATE_NW, self::STATE_RP, self::STATE_SL],
        ],
        [
            'name' => TranslationKeys::BUSS_UND_BETTAG,
            'date' => Configuration::BUSS_UND_BETTAG,
            'states' => [self::STATE_SN],
        ],
        [
            'name' => TranslationKeys::CHRISTMAS_DAY,
            'date' => '12-25',
            'states' => [self::STATE_ALL],
        ],
        [
            'name' => TranslationKeys::BOXING_DAY,
            'date' => '12-26',
            'states' => [self::STATE_ALL],
        ],
    ];
}
