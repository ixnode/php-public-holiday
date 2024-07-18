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
        'Neujahr' => [
            'date' => '01-01',
            'states' => [self::STATE_ALL],
        ],
        'Heilige drei Könige' => [
            'date' => '01-06',
            'states' => [self::STATE_BW, self::STATE_BY, self::STATE_ST],
        ],
        'Frauentag' => [
            'date' => '03-08',
            'states' => [self::STATE_BE, self::STATE_MV],
        ],
        'Gründonnerstag' => [
            'date' => '-3 days',
            'states' => [self::STATE_BW],
        ],
        'Karfreitag' => [
            'date' => '-2 days',
            'states' => [self::STATE_ALL],
        ],
        'Ostersonntag' => [
            'date' => '+0 days',
            'states' => [self::STATE_ALL],
        ],
        'Ostermontag' => [
            'date' => '+1 day',
            'states' => [self::STATE_ALL],
        ],
        'Christi Himmelfahrt' => [
            'date' => '+39 days',
            'states' => [self::STATE_ALL],
        ],
        'Pfingstsonntag' => [
            'date' => '+49 days',
            'states' => [self::STATE_ALL],
        ],
        'Pfingstmontag' => [
            'date' => '+50 days',
            'states' => [self::STATE_ALL],
        ],
        'Tag der Arbeit' => [
            'date' => '05-01',
            'states' => [self::STATE_ALL],
        ],
        'Fronleichnam' => [
            'date' => '+60 days',
            'states' => [self::STATE_BW, self::STATE_BY, self::STATE_HE, self::STATE_NW, self::STATE_RP, self::STATE_SL, self::STATE_SN, self::STATE_TH],
        ],
        'Augsburger Friedensfest' => [
            'date' => '08-08',
            'states' => [self::STATE_BY],
        ],
        'Mariä Himmelfahrt' => [
            'date' => '08-15',
            'states' => [self::STATE_BY, self::STATE_SL],
        ],
        'Weltkindertag' => [
            'date' => '09-20',
            'states' => [self::STATE_TH],
        ],
        'Tag der deutschen Einheit' => [
            'date' => '10-03',
            'states' => [self::STATE_ALL],
        ],
        'Reformationstag' => [
            'date' => '10-31',
            'states' => [self::STATE_BB, self::STATE_HB, self::STATE_HH, self::STATE_MV, self::STATE_NI, self::STATE_SN, self::STATE_ST, self::STATE_SH, self::STATE_TH],
        ],
        'Allerheiligen' => [
            'date' => '11-01',
            'states' => [self::STATE_BW, self::STATE_BY, self::STATE_NW, self::STATE_RP, self::STATE_SL],
        ],
        'Buß- und Bettag' => [
            'date' => Configuration::BUSS_UND_BETTAG,
            'states' => [self::STATE_SN],
        ],
        'Erster Weihnachtsfeiertag' => [
            'date' => '12-25',
            'states' => [self::STATE_ALL],
        ],
        'Zweiter Weihnachtsfeiertag' => [
            'date' => '12-26',
            'states' => [self::STATE_ALL],
        ],
    ];
}
