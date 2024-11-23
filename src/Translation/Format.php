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
 * Class Format
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-11-23)
 * @since 0.1.0 (2024-11-23) First version.
 */
readonly class Format
{
    /* Format codes */
    final public const FORMAT_CODE_CSV = 'csv';
    final public const FORMAT_CODE_JSON = 'json';
    final public const FORMAT_CODE_TEXT = 'text';



    /* Format names */
    final public const FORMAT_NAME_CSV =  [
        Locale::CS_CZ => 'Výstup ve formátu CSV, oddělovač: středník, formát: UTF8',
        Locale::DE_DE => 'CSV formatierte Ausgabe, Trennzeichen: Semikolon, Format: UTF8',
        Locale::EN_GB => 'CSV formatted output, separator: semicolon, format: UTF8',
        Locale::ES_ES => 'Salida con formato CSV, separador: punto y coma, formato: UTF8',
        Locale::FR_FR => 'Sortie formatée CSV, séparateur : point-virgule, format : UTF8',
        Locale::HR_HR => 'CSV formatirani izlaz, razdjelnik: točka-zarez, format: UTF8',
        Locale::IT_IT => 'Uscita formattata CSV, separatore: punto e virgola, formato: UTF8',
        Locale::PL_PL => 'Dane wyjściowe w formacie CSV, separator: średnik, format: UTF8',
        Locale::SV_SE => 'CSV-formaterad utdata, separator: semikolon, format: UTF8',
    ];
    final public const FORMAT_NAME_JSON =  [
        Locale::CS_CZ => 'Výstup v kódování JSON',
        Locale::DE_DE => 'JSON kodierte Ausgabe',
        Locale::EN_GB => 'JSON encoded output',
        Locale::ES_ES => 'Salida codificada JSON',
        Locale::FR_FR => 'Sortie codée en JSON',
        Locale::HR_HR => 'JSON kodirani izlaz',
        Locale::IT_IT => 'Uscita codificata JSON',
        Locale::PL_PL => 'Dane wyjściowe zakodowane w formacie JSON',
        Locale::SV_SE => 'JSON-kodad utdata',
    ];
    final public const FORMAT_NAME_TEXT =  [
        Locale::CS_CZ => 'Čitelné vydání textu',
        Locale::DE_DE => 'Lesbare Textausgabe',
        Locale::EN_GB => 'Readable text edition',
        Locale::ES_ES => 'Edición de texto legible',
        Locale::FR_FR => 'Édition lisible du texte',
        Locale::HR_HR => 'Izlaz čitljivog teksta',
        Locale::IT_IT => 'Edizione con testo leggibile',
        Locale::PL_PL => 'Czytelna edycja tekstu',
        Locale::SV_SE => 'Läsbar textutgåva',
    ];



    /* Formats */
    final public const FORMATS = [
        self::FORMAT_CODE_CSV => self::FORMAT_NAME_CSV,
        self::FORMAT_CODE_JSON => self::FORMAT_NAME_JSON,
        self::FORMAT_CODE_TEXT => self::FORMAT_NAME_TEXT,
    ];
}
