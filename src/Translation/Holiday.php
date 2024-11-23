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
    final public const HOLIDAY_CODE_BERCHTOLDSTAG = 'BERCHTOLDSTAG';
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
    final public const HOLIDAY_CODE_FEAST_OF_THE_ASCENSION_CH = 'FEAST_OF_THE_ASCENSION_CH';
    final public const HOLIDAY_CODE_GERMAN_UNITY_DAY = 'GERMAN_UNITY_DAY';
    final public const HOLIDAY_CODE_GOOD_FRIDAY = 'GOOD_FRIDAY';
    final public const HOLIDAY_CODE_IMMACULATE_CONCEPTION = 'IMMACULATE_CONCEPTION';
    final public const HOLIDAY_CODE_INTERNATIONAL_WOMEN_S_DAY = 'INTERNATIONAL_WOMEN_S_DAY';
    final public const HOLIDAY_CODE_LABOUR_DAY = 'LABOUR_DAY';
    final public const HOLIDAY_CODE_MAUNDY_THURSDAY = 'MAUNDY_THURSDAY';
    final public const HOLIDAY_CODE_NATIONAL_HOLIDAY = 'NATIONAL_HOLIDAY';
    final public const HOLIDAY_CODE_NEW_YEAR = 'NEW_YEAR';
    final public const HOLIDAY_CODE_SAINT_JOSEPHS_DAY = 'SAINT_JOSEPHS_DAY';
    final public const HOLIDAY_CODE_STATE_HOLIDAY = 'STATE_HOLIDAY';
    final public const HOLIDAY_CODE_SWISS_NATIONAL_DAY = 'SWISS_NATIONAL_DAY';
    final public const HOLIDAY_CODE_REFORMATION_DAY = 'REFORMATION_DAY';
    final public const HOLIDAY_CODE_STEFANITAG = 'STEFANITAG';
    final public const HOLIDAY_CODE_STEFANITAG_CH = 'STEFANITAG_CH';
    final public const HOLIDAY_CODE_WHIT_MONDAY = 'WHIT_MONDAY';
    final public const HOLIDAY_CODE_WHIT_SUNDAY = 'WHIT_SUNDAY';

    /*
     * A) Static holiday names
     */

    /* 01-01 */
    final public const HOLIDAY_NAME_NEW_YEAR =  [
        Locale::CS_CZ => 'Nový rok',
        Locale::DE_DE => 'Neujahr',
        Locale::EN_GB => 'New Year',
        Locale::ES_ES => 'Año Nuevo',
        Locale::FR_FR => 'Jour de l\'an',
        Locale::HR_HR => 'Nova godina',
        Locale::IT_IT => 'Capodanno',
        Locale::PL_PL => 'Nowy Rok',
        Locale::SV_SE => 'Nyår',
    ];

    /* 01-02 */
    final public const HOLIDAY_NAME_BERCHTOLDSTAG = [
        Locale::CS_CZ => 'Berchtoldův den',
        Locale::DE_DE => 'Berchtoldstag',
        Locale::EN_GB => 'Berchtold\'s Day',
        Locale::ES_ES => 'Día de Berchtold',
        Locale::FR_FR => 'Journée du Berchtold',
        Locale::HR_HR => 'Berchtoldov dan',
        Locale::IT_IT => 'Il giorno di Berchtold',
        Locale::PL_PL => 'Dzień Berchtolda',
        Locale::SV_SE => 'Berchtolds dag',
    ];

    /* 01-06 */
    final public const HOLIDAY_NAME_BIBLICAL_MAGI = [
        Locale::CS_CZ => 'Tři králové',
        Locale::DE_DE => 'Heilige drei Könige',
        Locale::EN_GB => 'Biblical Magi',
        Locale::ES_ES => 'Reyes Magos',
        Locale::FR_FR => 'Rois mages',
        Locale::HR_HR => 'Sveta tri kralja',
        Locale::IT_IT => 'Magi (Bibbia)',
        Locale::PL_PL => 'Trzej Królowie',
        Locale::SV_SE => 'Tre vise männen',
    ];

    /* 03-08 */
    final public const HOLIDAY_NAME_INTERNATIONAL_WOMEN_S_DAY =  [
        Locale::CS_CZ => 'Mezinárodní den žen',
        Locale::DE_DE => 'Internationaler Frauentag',
        Locale::EN_GB => 'International Women\'s Day',
        Locale::ES_ES => 'Día Internacional de la Mujer',
        Locale::FR_FR => 'Journée internationale des femmes',
        Locale::HR_HR => 'Međunarodni dan žena',
        Locale::IT_IT => 'Giornata internazionale della donna',
        Locale::PL_PL => 'Dzień Kobiet',
        Locale::SV_SE => 'Internationella kvinnodagen',
    ];

    /* 03-19 */
    final public const HOLIDAY_NAME_SAINT_JOSEPHS_DAY =  [
        Locale::CS_CZ => 'Den svatého Josefa',
        Locale::DE_DE => 'Josefstag',
        Locale::EN_GB => 'Saint Joseph\'s Day',
        Locale::ES_ES => 'Día de San José',
        Locale::FR_FR => 'Fête de la Saint Joseph',
        Locale::HR_HR => 'Svetog Josipa',
        Locale::IT_IT => 'Giorno di San Giuseppe',
        Locale::PL_PL => 'Dzień Świętego Józefa',
        Locale::SV_SE => 'Sankt Josefs dag',
    ];

    /* 05-01 */
    final public const HOLIDAY_NAME_LABOUR_DAY =  [
        Locale::CS_CZ => 'Svátek práce',
        Locale::DE_DE => 'Tag der Arbeit',
        Locale::EN_GB => 'International Workers\' Day',
        Locale::ES_ES => 'Día Internacional de los Trabajadores',
        Locale::FR_FR => 'Fête du travail',
        Locale::HR_HR => 'Međunarodni praznik rada',
        Locale::IT_IT => 'Festa del Lavoro',
        Locale::PL_PL => 'Święto Państwowe',
        Locale::SV_SE => 'Första maj',
    ];

    /* 05-01 */
    final public const HOLIDAY_NAME_STATE_HOLIDAY =  [
        Locale::CS_CZ => 'Státní svátky',
        Locale::DE_DE => 'Staatsfeiertag',
        Locale::EN_GB => 'State Holiday',
        Locale::ES_ES => 'Días festivos',
        Locale::FR_FR => 'Fête nationale',
        Locale::HR_HR => 'Državni praznik',
        Locale::IT_IT => 'Giorni festivi',
        Locale::PL_PL => 'Dni wolne od pracy',
        Locale::SV_SE => 'Bankdagar',
    ];

    /* 08-08 */
    final public const HOLIDAY_NAME_SWISS_NATIONAL_DAY = [
        Locale::CS_CZ => 'Švýcarský národní den',
        Locale::DE_DE => 'Bundesfeiertag',
        Locale::EN_GB => 'Swiss National Day',
        Locale::ES_ES => 'Fiesta Nacional de Suiza',
        Locale::FR_FR => 'Fête nationale suisse',
        Locale::HR_HR => 'Nacionalni dan Švicarske',
        Locale::IT_IT => 'Festa nazionale svizzera',
        Locale::PL_PL => 'Święto Narodowe Szwajcarii',
        Locale::SV_SE => 'Schweiz nationaldag',
    ];

    /* 08-08 */
    final public const HOLIDAY_NAME_AUGSBURG_PEACE_FESTIVAL = [
        Locale::CS_CZ => 'Augsburský svátek míru',
        Locale::DE_DE => 'Augsburger Hohes Friedensfest',
        Locale::EN_GB => 'Augsburg Peace Festival',
        Locale::ES_ES => 'Festival de la Paz de Augsburgo',
        Locale::FR_FR => 'Haute fête de la paix d\'Augsbourg',
        Locale::HR_HR => 'Augsburški festival visokog mira',
        Locale::IT_IT => 'Festival della Pace di Augusta',
        Locale::PL_PL => 'Augsburski Festiwal Wysokiego Pokoju',
        Locale::SV_SE => 'Augsburg Peace Festival',
    ];

    /* 08-15 */
    final public const HOLIDAY_NAME_ASSUMPTION_OF_MARY = [
        Locale::CS_CZ => 'Nanebevzetí Panny Marie',
        Locale::DE_DE => 'Mariä Himmelfahrt',
        Locale::EN_GB => 'Assumption of Mary',
        Locale::ES_ES => 'Asunción de María',
        Locale::FR_FR => 'Assomption',
        Locale::HR_HR => 'Velika Gospa',
        Locale::IT_IT => 'Assunzione di Maria',
        Locale::PL_PL => 'Wniebowzięcie Najświętszej Maryi Panny',
        Locale::SV_SE => 'Jungfru Marie himmelsfärd',
    ];

    /* 09-20 */
    /* 06-01 */
    final public const HOLIDAY_NAME_CHILDREN_S_DAY =  [
        Locale::CS_CZ => 'Mezinárodní den dětí',
        Locale::DE_DE => 'Weltkindertag',
        Locale::EN_GB => 'Children\'s Day',
        Locale::ES_ES => 'Día Mundial del Niño',
        Locale::FR_FR => 'Journée de l\'enfance',
        Locale::HR_HR => 'Svjetski dan djece',
        Locale::IT_IT => 'Giornata internazionale per i diritti dell\'infanzia e dell\'adolescenza',
        Locale::PL_PL => 'Dzień Dziecka',
        Locale::SV_SE => 'Internationella barndagen',
    ];

    /* 10-03 */
    final public const HOLIDAY_NAME_GERMAN_UNITY_DAY =  [
        Locale::CS_CZ => 'Den německé jednoty',
        Locale::DE_DE => 'Tag der deutschen Einheit',
        Locale::EN_GB => 'German Unity Day',
        Locale::ES_ES => 'Día de la Unidad Alemana',
        Locale::FR_FR => 'Jour de l\'Unité allemande',
        Locale::HR_HR => 'Dan njemačkoga jedinstva',
        Locale::IT_IT => 'Giorno dell\'unità tedesca',
        Locale::PL_PL => 'Dzień Jedności Niemiec',
        Locale::SV_SE => 'Tyska enhetens dag',
    ];

    /* 10-26 */
    final public const HOLIDAY_NAME_NATIONAL_HOLIDAY =  [
        Locale::CS_CZ => 'Státní svátky',
        Locale::DE_DE => 'Nationalfeiertag',
        Locale::EN_GB => 'National day',
        Locale::ES_ES => 'Día nacional',
        Locale::FR_FR => 'Fête nationale',
        Locale::HR_HR => 'Dan državnosti',
        Locale::IT_IT => 'Festa nazionale',
        Locale::PL_PL => 'Święto państwowe',
        Locale::SV_SE => 'Nationaldag',
    ];

    /* 10-31 */
    final public const HOLIDAY_NAME_REFORMATION_DAY =  [
        Locale::CS_CZ => 'Den reformace',
        Locale::DE_DE => 'Reformationstag',
        Locale::EN_GB => 'Reformation Day',
        Locale::ES_ES => 'Día de la Reforma',
        Locale::FR_FR => 'Fête de la Réformation',
        Locale::HR_HR => 'Dan Reformacije',
        Locale::IT_IT => 'Giorno della Riforma',
        Locale::PL_PL => 'Święto Reformacji',
        Locale::SV_SE => 'Reformationsdagen',
    ];

    /* 11-01 */
    final public const HOLIDAY_NAME_ALL_SAINTS_DAY = [
        Locale::CS_CZ => 'Slavnost Všech svatých',
        Locale::DE_DE => 'Allerheiligen',
        Locale::EN_GB => 'All Saints\' Day',
        Locale::ES_ES => 'Día de Todos los Santos',
        Locale::FR_FR => 'Toussaint',
        Locale::HR_HR => 'Svi sveti',
        Locale::IT_IT => 'Tutti i Santi',
        Locale::PL_PL => 'Wszystkich Świętych',
        Locale::SV_SE => 'Alla helgons dag',
    ];

    /* 12-08 */
    final public const HOLIDAY_NAME_IMMACULATE_CONCEPTION =  [
        Locale::CS_CZ => 'Neposkvrněné početí Panny Marie',
        Locale::DE_DE => 'Mariä Empfängnis',
        Locale::EN_GB => 'Immaculate Conception',
        Locale::ES_ES => 'Fiesta de la Asunción',
        Locale::FR_FR => 'Immaculée Conception',
        Locale::HR_HR => 'Bezgrješno začeće Blažene Djevice Marije',
        Locale::IT_IT => 'Immacolata Concezione',
        Locale::PL_PL => 'Dogmat o Niepokalanym Poczęciu Najświętszej Maryi Panny',
        Locale::SV_SE => 'Obefläckade avlelsen',
    ];

    /* 12-25 */
    final public const HOLIDAY_NAME_CHRISTMAS =  [
        Locale::CS_CZ => 'Vánoce',
        Locale::DE_DE => 'Weihnachten',
        Locale::EN_GB => 'Christmas',
        Locale::ES_ES => 'Navidad',
        Locale::FR_FR => 'Noël',
        Locale::HR_HR => 'Božić',
        Locale::IT_IT => 'Nascita di Gesù',
        Locale::PL_PL => 'Pierwszy dzień Bożego Narodzenia',
        Locale::SV_SE => 'Jul',
    ];

    /* 12-25 */
    final public const HOLIDAY_NAME_CHRISTMAS_DAY =  [
        Locale::CS_CZ => 'Vánoce',
        Locale::DE_DE => 'Erster Weihnachtsfeiertag',
        Locale::EN_GB => 'Christmas Day',
        Locale::ES_ES => 'Navidad',
        Locale::FR_FR => 'Noël',
        Locale::HR_HR => 'Božić',
        Locale::IT_IT => 'Nascita di Gesù',
        Locale::PL_PL => 'Pierwszy dzień Bożego Narodzenia',
        Locale::SV_SE => 'Jul',
    ];

    /* 12-26 */
    final public const HOLIDAY_NAME_BOXING_DAY =  [
        Locale::CS_CZ => 'Druhý svátek vánoční',
        Locale::DE_DE => 'Zweiter Weihnachtsfeiertag',
        Locale::EN_GB => 'Boxing Day',
        Locale::ES_ES => 'Segundo día de Navidad',
        Locale::FR_FR => 'Saint Etienne',
        Locale::HR_HR => 'Prvi dan po Božiću, Sveti Stjepan',
        Locale::IT_IT => 'Giorno di Santo Stefano',
        Locale::PL_PL => 'Drugi dzień Bożego Narodzenia',
        Locale::SV_SE => 'Annandag jul',
    ];

    /* 12-26 */
    final public const HOLIDAY_NAME_STEFANITAG =  [
        Locale::CS_CZ => 'Svátek svatého Štěpána',
        Locale::DE_DE => 'Stefanitag',
        Locale::EN_GB => 'Saint Stephen\'s Day',
        Locale::ES_ES => 'Día de San Esteban',
        Locale::FR_FR => 'Fête de la Saint-Étienne',
        Locale::HR_HR => 'Prvi dan po Božiću, Sveti Stjepan',
        Locale::IT_IT => 'Giorno di Santo Stefano',
        Locale::PL_PL => 'Dzień Świętego Szczepana',
        Locale::SV_SE => 'Stefani dag',
    ];
    final public const HOLIDAY_NAME_STEFANITAG_CH =  [
        Locale::CS_CZ => 'Svátek svatého Štěpána',
        Locale::DE_DE => 'Stephanstag',
        Locale::EN_GB => 'Saint Stephen\'s Day',
        Locale::ES_ES => 'Día de San Esteban',
        Locale::FR_FR => 'Fête de la Saint-Étienne',
        Locale::HR_HR => 'Prvi dan po Božiću, Sveti Stjepan',
        Locale::IT_IT => 'Giorno di Santo Stefano',
        Locale::PL_PL => 'Dzień Świętego Szczepana',
        Locale::SV_SE => 'Stefani dag',
    ];

    /*
     * B) Dynamic holiday names
     */

    /* Easter: -3 days */
    final public const HOLIDAY_NAME_MAUNDY_THURSDAY =  [
        Locale::CS_CZ => 'Zelený čtvrtek',
        Locale::DE_DE => 'Gründonnerstag',
        Locale::EN_GB => 'Maundy Thursday',
        Locale::ES_ES => 'Jueves Santo',
        Locale::FR_FR => 'Jeudi saint',
        Locale::HR_HR => 'Veliki četvrtak',
        Locale::IT_IT => 'Giovedì santo',
        Locale::PL_PL => 'Wielki Czwartek',
        Locale::SV_SE => 'Skärtorsdagen',
    ];

    /* Easter: -2 days */
    final public const HOLIDAY_NAME_GOOD_FRIDAY =  [
        Locale::CS_CZ => 'Velký pátek',
        Locale::DE_DE => 'Karfreitag',
        Locale::EN_GB => 'Good Friday',
        Locale::ES_ES => 'Viernes Santo',
        Locale::FR_FR => 'Vendredi Saint',
        Locale::HR_HR => 'Veliki petak',
        Locale::IT_IT => 'Venerdì santo',
        Locale::PL_PL => 'Wielki Piątek',
        Locale::SV_SE => 'Långfredagen',
    ];

    /* Easter: +0 days */
    final public const HOLIDAY_NAME_EASTER_SUNDAY =  [
        Locale::CS_CZ => 'Slavnost Zmrtvýchvstání Páně',
        Locale::DE_DE => 'Ostersonntag',
        Locale::EN_GB => 'Easter Sunday',
        Locale::ES_ES => 'Domingo de Pascua',
        Locale::FR_FR => 'Dimanche de Pâques',
        Locale::HR_HR => 'Uskrsna nedjelja',
        Locale::IT_IT => 'Domenica di Pasqua',
        Locale::PL_PL => 'Pierwszy dzień Wielkanocy',
        Locale::SV_SE => 'Påskdagen',
    ];

    /* Easter: +1 days */
    final public const HOLIDAY_NAME_EASTER_MONDAY =  [
        Locale::CS_CZ => 'Velikonoční pondělí',
        Locale::DE_DE => 'Ostermontag',
        Locale::EN_GB => 'Easter Monday',
        Locale::ES_ES => 'Lunes de Pascua',
        Locale::FR_FR => 'Lundi de Pâques',
        Locale::HR_HR => 'Uskrsni ponedjeljak',
        Locale::IT_IT => 'Lunedì di Pasqua',
        Locale::PL_PL => 'Drugi dzień Wielkanocy',
        Locale::SV_SE => 'Annandag påsk',
    ];

    /* Easter: +39 days */
    final public const HOLIDAY_NAME_FEAST_OF_THE_ASCENSION =  [
        Locale::CS_CZ => 'Svátek Nanebevstoupení Páně',
        Locale::DE_DE => 'Christi Himmelfahrt',
        Locale::EN_GB => 'Feast of the Ascension',
        Locale::ES_ES => 'Día de la Ascensión',
        Locale::FR_FR => 'Ascension',
        Locale::HR_HR => 'Uzašašće',
        Locale::IT_IT => 'Ascensione (festività)',
        Locale::PL_PL => 'Wniebowstąpienie Pańskie',
        Locale::SV_SE => 'Kristi himmelsfärdsdag',
    ];
    final public const HOLIDAY_NAME_FEAST_OF_THE_ASCENSION_CH =  [
        Locale::CS_CZ => 'Svátek Nanebevstoupení Páně',
        Locale::DE_DE => 'Auffahrt',
        Locale::EN_GB => 'Feast of the Ascension',
        Locale::ES_ES => 'Día de la Ascensión',
        Locale::FR_FR => 'Ascension',
        Locale::HR_HR => 'Uzašašće',
        Locale::IT_IT => 'Ascensione (festività)',
        Locale::PL_PL => 'Wniebowstąpienie Pańskie',
        Locale::SV_SE => 'Kristi himmelsfärdsdag',
    ];

    /* Easter: +49 days */
    final public const HOLIDAY_NAME_WHIT_SUNDAY =  [
        Locale::CS_CZ => 'Letnice',
        Locale::DE_DE => 'Pfingstsonntag',
        Locale::EN_GB => 'Pentecost',
        Locale::ES_ES => 'Pentecostés',
        Locale::FR_FR => 'Pentecôte',
        Locale::HR_HR => 'Duhovi (svetkovina)',
        Locale::IT_IT => 'Pentecoste',
        Locale::PL_PL => 'Pierwszy dzień Zielonych Świątek',
        Locale::SV_SE => 'Pingst',
    ];

    /* Easter: +50 days */
    final public const HOLIDAY_NAME_WHIT_MONDAY =  [
        Locale::CS_CZ => 'Bílé pondělí',
        Locale::DE_DE => 'Pfingstmontag',
        Locale::EN_GB => 'Whit Monday',
        Locale::ES_ES => 'Lunes de Pentecostés',
        Locale::FR_FR => 'Lundi de Pentecôte',
        Locale::HR_HR => 'Duhovski ponedjeljak',
        Locale::IT_IT => 'Lunedì bianco',
        Locale::PL_PL => 'Biały poniedziałek',
        Locale::SV_SE => 'Annandag pingst',
    ];

    /* Easter: +60 days */
    final public const HOLIDAY_NAME_FEAST_OF_CORPUS_CHRISTI =  [
        Locale::CS_CZ => 'Slavnost Těla a Krve Páně',
        Locale::DE_DE => 'Fronleichnam',
        Locale::EN_GB => 'Feast of Corpus Christi',
        Locale::ES_ES => 'Corpus Christi',
        Locale::FR_FR => 'Fête-Dieu',
        Locale::HR_HR => 'Tijelovo',
        Locale::IT_IT => 'Corpus Domini',
        Locale::PL_PL => 'Uroczystość Najświętszego Ciała i Krwi Chrystusa',
        Locale::SV_SE => 'Corpus Christi',
    ];

    /*
     * C) Special dynamic holiday names
     */

    /* Wednesday before 23 November */
    final public const HOLIDAY_NAME_BUSS_UND_BETTAG =  [
        Locale::CS_CZ => 'Den pokání a modlitby',
        Locale::DE_DE => 'Buß- und Bettag',
        Locale::EN_GB => 'Buß- und Bettag',
        Locale::ES_ES => 'Día de oración y arrepentimiento',
        Locale::FR_FR => 'Jour de pénitence et de prière',
        Locale::HR_HR => 'Dan pokore',
        Locale::IT_IT => 'Giornata di preghiera e pentimento',
        Locale::PL_PL => 'Dzień modlitwy i pokuty',
        Locale::SV_SE => 'Buss- und Bettag',
    ];



    /* Holidays */
    final public const HOLIDAYS = [
        self::HOLIDAY_CODE_ALL_SAINTS_DAY => self::HOLIDAY_NAME_ALL_SAINTS_DAY,
        self::HOLIDAY_CODE_ASSUMPTION_OF_MARY => self::HOLIDAY_NAME_ASSUMPTION_OF_MARY,
        self::HOLIDAY_CODE_AUGSBURG_PEACE_FESTIVAL => self::HOLIDAY_NAME_AUGSBURG_PEACE_FESTIVAL,
        self::HOLIDAY_CODE_BERCHTOLDSTAG => self::HOLIDAY_NAME_BERCHTOLDSTAG,
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
        self::HOLIDAY_CODE_FEAST_OF_THE_ASCENSION_CH => self::HOLIDAY_NAME_FEAST_OF_THE_ASCENSION_CH,
        self::HOLIDAY_CODE_GERMAN_UNITY_DAY => self::HOLIDAY_NAME_GERMAN_UNITY_DAY,
        self::HOLIDAY_CODE_GOOD_FRIDAY => self::HOLIDAY_NAME_GOOD_FRIDAY,
        self::HOLIDAY_CODE_IMMACULATE_CONCEPTION => self::HOLIDAY_NAME_IMMACULATE_CONCEPTION,
        self::HOLIDAY_CODE_INTERNATIONAL_WOMEN_S_DAY => self::HOLIDAY_NAME_INTERNATIONAL_WOMEN_S_DAY,
        self::HOLIDAY_CODE_LABOUR_DAY => self::HOLIDAY_NAME_LABOUR_DAY,
        self::HOLIDAY_CODE_MAUNDY_THURSDAY => self::HOLIDAY_NAME_MAUNDY_THURSDAY,
        self::HOLIDAY_CODE_NATIONAL_HOLIDAY => self::HOLIDAY_NAME_NATIONAL_HOLIDAY,
        self::HOLIDAY_CODE_NEW_YEAR => self::HOLIDAY_NAME_NEW_YEAR,
        self::HOLIDAY_CODE_REFORMATION_DAY => self::HOLIDAY_NAME_REFORMATION_DAY,
        self::HOLIDAY_CODE_SAINT_JOSEPHS_DAY => self::HOLIDAY_NAME_SAINT_JOSEPHS_DAY,
        self::HOLIDAY_CODE_STATE_HOLIDAY => self::HOLIDAY_NAME_STATE_HOLIDAY,
        self::HOLIDAY_CODE_STEFANITAG => self::HOLIDAY_NAME_STEFANITAG,
        self::HOLIDAY_CODE_STEFANITAG_CH => self::HOLIDAY_NAME_STEFANITAG_CH,
        self::HOLIDAY_CODE_SWISS_NATIONAL_DAY => self::HOLIDAY_NAME_SWISS_NATIONAL_DAY,
        self::HOLIDAY_CODE_WHIT_MONDAY => self::HOLIDAY_NAME_WHIT_MONDAY,
        self::HOLIDAY_CODE_WHIT_SUNDAY => self::HOLIDAY_NAME_WHIT_SUNDAY,
    ];
}
