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

namespace Ixnode\PhpPublicHoliday\Translation;

use Ixnode\PhpTimezone\Constants\Locale;

/**
 * Class Holiday
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-11-21)
 * @since 0.1.0 (2024-11-21) First version.
 */
readonly class Holiday
{
    /* Holiday codes */
    final public const HOLIDAY_CODE_ALL_SAINTS_DAY = 'ALL_SAINTS_DAY';
    final public const HOLIDAY_CODE_ASSUMPTION_OF_MARY = 'ASSUMPTION_OF_MARY';
    final public const HOLIDAY_CODE_AUGSBURG_PEACE_FESTIVAL = 'AUGSBURG_PEACE_FESTIVAL';
    final public const HOLIDAY_CODE_BIBLICAL_MAGI = 'BIBLICAL_MAGI';
    final public const HOLIDAY_CODE_BOXING_DAY = 'BOXING_DAY';
    final public const HOLIDAY_CODE_BUSS_UND_BETTAG = 'BUSS_UND_BETTAG';
    final public const HOLIDAY_CODE_CHILDREN_S_DAY = 'CHILDREN_S_DAY';
    final public const HOLIDAY_CODE_CHRISTMAS = 'CHRISTMAS';
    final public const HOLIDAY_CODE_CHRISTMAS_DAY = 'CHRISTMAS_DAY';
    final public const HOLIDAY_CODE_EASTER_MONDAY = 'EASTER_MONDAY';
    final public const HOLIDAY_CODE_EASTER_SUNDAY = 'EASTER_SUNDAY';
    final public const HOLIDAY_CODE_FEAST_OF_CORPUS_CHRISTI = 'FEAST_OF_CORPUS_CHRISTI';
    final public const HOLIDAY_CODE_FEAST_OF_THE_ASCENSION = 'FEAST_OF_THE_ASCENSION';
    final public const HOLIDAY_CODE_GERMAN_UNITY_DAY = 'GERMAN_UNITY_DAY';
    final public const HOLIDAY_CODE_GOOD_FRIDAY = 'GOOD_FRIDAY';
    final public const HOLIDAY_CODE_IMMACULATE_CONCEPTION = 'IMMACULATE_CONCEPTION';
    final public const HOLIDAY_CODE_INTERNATIONAL_WOMEN_S_DAY = 'INTERNATIONAL_WOMEN_S_DAY';
    final public const HOLIDAY_CODE_LABOUR_DAY = 'LABOUR_DAY';
    final public const HOLIDAY_CODE_MAUNDY_THURSDAY = 'MAUNDY_THURSDAY';
    final public const HOLIDAY_CODE_NATIONAL_HOLIDAY = 'NATIONAL_HOLIDAY';
    final public const HOLIDAY_CODE_STATE_HOLIDAY = 'STATE_HOLIDAY';
    final public const HOLIDAY_CODE_NEW_YEAR = 'NEW_YEAR';
    final public const HOLIDAY_CODE_REFORMATION_DAY = 'REFORMATION_DAY';
    final public const HOLIDAY_CODE_STEFANITAG = 'STEFANITAG';
    final public const HOLIDAY_CODE_WHIT_MONDAY = 'WHIT_MONDAY';
    final public const HOLIDAY_CODE_WHIT_SUNDAY = 'WHIT_SUNDAY';

    /* Holiday names */
    final public const HOLIDAY_NAME_ALL_SAINTS_DAY = [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Allerheiligen',
        Locale::EN_GB => 'All Saints\' Day',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_ASSUMPTION_OF_MARY = [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Mariä Himmelfahrt',
        Locale::EN_GB => 'Assumption of Mary',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_AUGSBURG_PEACE_FESTIVAL = [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Augsburger Hohes Friedensfest',
        Locale::EN_GB => 'Augsburg Peace Festival',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_BIBLICAL_MAGI = [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Heilige drei Könige',
        Locale::EN_GB => 'Biblical Magi',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_BOXING_DAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Zweiter Weihnachtsfeiertag',
        Locale::EN_GB => 'Boxing Day',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_BUSS_UND_BETTAG =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Buß- und Bettag',
        Locale::EN_GB => 'Buß- und Bettag',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_CHILDREN_S_DAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Weltkindertag',
        Locale::EN_GB => 'Children\'s Day',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_CHRISTMAS =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Weihnachten',
        Locale::EN_GB => 'Christmas',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_CHRISTMAS_DAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Erster Weihnachtsfeiertag',
        Locale::EN_GB => 'Christmas Day',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_EASTER_MONDAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Ostermontag',
        Locale::EN_GB => 'Easter Monday',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_EASTER_SUNDAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Ostersonntag',
        Locale::EN_GB => 'Easter Sunday',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_FEAST_OF_CORPUS_CHRISTI =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Fronleichnam',
        Locale::EN_GB => 'Feast of Corpus Christi',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_FEAST_OF_THE_ASCENSION =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Christi Himmelfahrt',
        Locale::EN_GB => 'Feast of the Ascension',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_GERMAN_UNITY_DAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Tag der deutschen Einheit',
        Locale::EN_GB => 'German Unity Day',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_GOOD_FRIDAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Karfreitag',
        Locale::EN_GB => 'Good Friday',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_IMMACULATE_CONCEPTION =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Mariä Empfängnis',
        Locale::EN_GB => 'Immaculate Conception',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_INTERNATIONAL_WOMEN_S_DAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Internationaler Frauentag',
        Locale::EN_GB => 'International Women\'s Day',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_LABOUR_DAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Tag der Arbeit',
        Locale::EN_GB => 'Labour Day',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_MAUNDY_THURSDAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Gründonnerstag',
        Locale::EN_GB => 'Maundy Thursday',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_NATIONAL_HOLIDAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Nationalfeiertag',
        Locale::EN_GB => 'National Holiday',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_NEW_YEAR =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Neujahr',
        Locale::EN_GB => 'New Year',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_REFORMATION_DAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Reformationstag',
        Locale::EN_GB => 'Reformation Day',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_STATE_HOLIDAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Staatsfeiertag',
        Locale::EN_GB => 'State Holiday',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_STEFANITAG =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Stefanitag',
        Locale::EN_GB => 'Stefanitag',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_WHIT_MONDAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Pfingstmontag',
        Locale::EN_GB => 'Whit Monday',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];
    final public const HOLIDAY_NAME_WHIT_SUNDAY =  [
        Locale::CS_CZ => '',
        Locale::DE_DE => 'Pfingstsonntag',
        Locale::EN_GB => 'Whit Sunday',
        Locale::ES_ES => '',
        Locale::FR_FR => '',
        Locale::HR_HR => '',
        Locale::IT_IT => '',
        Locale::PL_PL => '',
        Locale::SE_SE => '',
    ];

    /* Holidays */
    final public const HOLIDAYS = [
        self::HOLIDAY_CODE_ALL_SAINTS_DAY => self::HOLIDAY_NAME_ALL_SAINTS_DAY,
        self::HOLIDAY_CODE_ASSUMPTION_OF_MARY => self::HOLIDAY_NAME_ASSUMPTION_OF_MARY,
        self::HOLIDAY_CODE_AUGSBURG_PEACE_FESTIVAL => self::HOLIDAY_NAME_AUGSBURG_PEACE_FESTIVAL,
        self::HOLIDAY_CODE_BIBLICAL_MAGI => self::HOLIDAY_NAME_BIBLICAL_MAGI,
        self::HOLIDAY_CODE_BOXING_DAY => self::HOLIDAY_NAME_BOXING_DAY,
        self::HOLIDAY_CODE_BUSS_UND_BETTAG => self::HOLIDAY_NAME_BUSS_UND_BETTAG,
        self::HOLIDAY_CODE_CHILDREN_S_DAY => self::HOLIDAY_NAME_CHILDREN_S_DAY,
        self::HOLIDAY_CODE_CHRISTMAS => self::HOLIDAY_NAME_CHRISTMAS,
        self::HOLIDAY_CODE_CHRISTMAS_DAY => self::HOLIDAY_NAME_CHRISTMAS_DAY,
        self::HOLIDAY_CODE_EASTER_MONDAY => self::HOLIDAY_NAME_EASTER_MONDAY,
        self::HOLIDAY_CODE_EASTER_SUNDAY => self::HOLIDAY_NAME_EASTER_SUNDAY,
        self::HOLIDAY_CODE_FEAST_OF_CORPUS_CHRISTI => self::HOLIDAY_NAME_FEAST_OF_CORPUS_CHRISTI,
        self::HOLIDAY_CODE_FEAST_OF_THE_ASCENSION => self::HOLIDAY_NAME_FEAST_OF_THE_ASCENSION,
        self::HOLIDAY_CODE_GERMAN_UNITY_DAY => self::HOLIDAY_NAME_GERMAN_UNITY_DAY,
        self::HOLIDAY_CODE_GOOD_FRIDAY => self::HOLIDAY_NAME_GOOD_FRIDAY,
        self::HOLIDAY_CODE_IMMACULATE_CONCEPTION => self::HOLIDAY_NAME_IMMACULATE_CONCEPTION,
        self::HOLIDAY_CODE_INTERNATIONAL_WOMEN_S_DAY => self::HOLIDAY_NAME_INTERNATIONAL_WOMEN_S_DAY,
        self::HOLIDAY_CODE_LABOUR_DAY => self::HOLIDAY_NAME_LABOUR_DAY,
        self::HOLIDAY_CODE_MAUNDY_THURSDAY => self::HOLIDAY_NAME_MAUNDY_THURSDAY,
        self::HOLIDAY_CODE_NATIONAL_HOLIDAY => self::HOLIDAY_NAME_NATIONAL_HOLIDAY,
        self::HOLIDAY_CODE_NEW_YEAR => self::HOLIDAY_NAME_NEW_YEAR,
        self::HOLIDAY_CODE_REFORMATION_DAY => self::HOLIDAY_NAME_REFORMATION_DAY,
        self::HOLIDAY_CODE_STATE_HOLIDAY => self::HOLIDAY_NAME_STATE_HOLIDAY,
        self::HOLIDAY_CODE_STEFANITAG => self::HOLIDAY_NAME_STEFANITAG,
        self::HOLIDAY_CODE_WHIT_MONDAY => self::HOLIDAY_NAME_WHIT_MONDAY,
        self::HOLIDAY_CODE_WHIT_SUNDAY => self::HOLIDAY_NAME_WHIT_SUNDAY,
    ];
}
