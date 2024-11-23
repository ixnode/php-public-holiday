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

namespace Ixnode\PhpPublicHoliday\Converter;

use Ixnode\PhpPublicHoliday\Constant\Locale;
use Ixnode\PhpTimezone\Constants\Language;
use Ixnode\PhpTimezone\Constants\Locale as PhpTimezoneLocale;
use LogicException;

/**
 * Class LocaleCode
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-11-23)
 * @since 0.1.0 (2024-11-23) First version.
 */
readonly class LocaleCode
{
    private string $localeCode;

    /**
     * @param string $localeCode
     */
    public function __construct(string $localeCode)
    {
        $this->localeCode = $this->doLocaleCode($localeCode);
    }

    /**
     * Converts given locale code to iso code.
     *
     * @param string $localeCode
     * @return string
     */
    private function doLocaleCode(string $localeCode): string
    {
        return match (strtolower($localeCode)) {
            PhpTimezoneLocale::CS => PhpTimezoneLocale::CS_CZ,
            PhpTimezoneLocale::DE => PhpTimezoneLocale::DE_DE,
            PhpTimezoneLocale::EN => PhpTimezoneLocale::EN_GB,
            PhpTimezoneLocale::ES => PhpTimezoneLocale::ES_ES,
            PhpTimezoneLocale::FR => PhpTimezoneLocale::FR_FR,
            PhpTimezoneLocale::HR => PhpTimezoneLocale::HR_HR,
            PhpTimezoneLocale::IT => PhpTimezoneLocale::IT_IT,
            PhpTimezoneLocale::PL => PhpTimezoneLocale::PL_PL,
            PhpTimezoneLocale::SV => PhpTimezoneLocale::SV_SE,
            default => $localeCode,
        };
    }

    /**
     * Returns the locale code of this object.
     */
    public function getLocaleCode(): string
    {
        return $this->localeCode;
    }

    /**
     * Returns the language code from given locale code.
     */
    public function getLanguageCode(): string
    {
        return match ($this->localeCode) {
            PhpTimezoneLocale::CS_CZ => PHPTimezoneLocale::CS,
            PhpTimezoneLocale::DE_DE => PhpTimezoneLocale::DE,
            PhpTimezoneLocale::EN_GB => PhpTimezoneLocale::EN,
            PhpTimezoneLocale::ES_ES => PhpTimezoneLocale::ES,
            PhpTimezoneLocale::FR_FR => PhpTimezoneLocale::FR,
            PhpTimezoneLocale::HR_HR => PhpTimezoneLocale::HR,
            PhpTimezoneLocale::IT_IT => PhpTimezoneLocale::IT,
            PhpTimezoneLocale::PL_PL => PhpTimezoneLocale::PL,
            PhpTimezoneLocale::SV_SE => PhpTimezoneLocale::SV,
            default => throw new LogicException(sprintf('Invalid locale code: %s', $this->localeCode)),
        };
    }

    /**
     * Returns the language name of given locale code.
     */
    public function getLanguage(string $localeCode = null): string
    {
        if (!in_array($this->localeCode, Locale::LOCALES_SUPPORTED, true)) {
            throw new LogicException(sprintf('Locale code "%s" is not supported.', $this->localeCode));
        }

        $language = match ($this->localeCode) {
            PhpTimezoneLocale::CS_CZ => Language::CS,
            PhpTimezoneLocale::DE_DE => Language::DE,
            PhpTimezoneLocale::EN_GB => Language::EN,
            PhpTimezoneLocale::ES_ES => Language::ES,
            PhpTimezoneLocale::FR_FR => Language::FR,
            PhpTimezoneLocale::HR_HR => Language::HR,
            PhpTimezoneLocale::IT_IT => Language::IT,
            PhpTimezoneLocale::PL_PL => Language::PL,
            PhpTimezoneLocale::SV_SE => Language::SV,
        };

        $languageCode = $localeCode ? (new LocaleCode($localeCode))->getLanguageCode() : $this->getLanguageCode();

        if (!array_key_exists($languageCode, $language)) {
            throw new LogicException(sprintf('Language code "%s" does not exist.', $languageCode));
        }

        return $language[$languageCode];
    }
}
