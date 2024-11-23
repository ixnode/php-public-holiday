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

use Ixnode\PhpPublicHoliday\Configuration\ConfigurationDefault;
use Ixnode\PhpTimezone\Constants\CountryAll;
use LogicException;

/**
 * Class CountryCode
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-11-23)
 * @since 0.1.0 (2024-11-23) First version.
 */
readonly class CountryCode
{
    private string $countryCode;

    /**
     * @param string $countryCode
     */
    public function __construct(string $countryCode)
    {
        $this->countryCode = $this->doCountryCode($countryCode);
    }

    /**
     * Converts given country code.
     *
     * @param string $countryCode
     * @return string
     */
    private function doCountryCode(string $countryCode): string
    {
        return strtoupper($countryCode);
    }

    /**
     * Returns the country code of this object.
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Returns the translated country code.
     */
    public function getCountryName(string $localeCode = ConfigurationDefault::LOCALE): string
    {
        if (!array_key_exists($this->countryCode, CountryAll::COUNTRY_NAMES)) {
            throw new LogicException(sprintf('Country code "%s" does not exist.', $this->countryCode));
        }

        $countryData = CountryAll::COUNTRY_NAMES[$this->countryCode];

        if (!array_key_exists($localeCode, $countryData)) {
            throw new LogicException(sprintf('Locale code "%s" does not exist.', $localeCode));
        }

        return $countryData[$localeCode];
    }
}
