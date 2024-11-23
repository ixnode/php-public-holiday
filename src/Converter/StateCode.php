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
use Ixnode\PhpTimezone\Constants\State\StateAll;
use LogicException;

/**
 * Class StateCode
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-11-23)
 * @since 0.1.0 (2024-11-23) First version.
 */
readonly class StateCode
{
    private string $countryCode;

    private string $stateCode;

    /**
     */
    public function __construct(string $countryCode, string $stateCode)
    {
        $this->countryCode = $this->doCountryCode($countryCode);
        $this->stateCode = $this->doStateCode($stateCode);
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
     * Converts given state code.
     *
     * @param string $stateCode
     * @return string
     */
    private function doStateCode(string $stateCode): string
    {
        return strtoupper($stateCode);
    }

    /**
     * Returns the country code of this object.
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Returns the state code of this object.
     */
    public function getStateCode(): string
    {
        return $this->stateCode;
    }

    /**
     * Returns the translated country code.
     */
    public function getCountryName(string $localeCode = ConfigurationDefault::LOCALE): string
    {
        return (new CountryCode($this->countryCode))->getCountryName($localeCode);
    }

    /**
     * Returns the translated state code.
     */
    public function getStateName(string $localeCode = ConfigurationDefault::LOCALE): string
    {
        if (!array_key_exists($this->countryCode, StateAll::STATE_NAMES)) {
            throw new LogicException(sprintf('Country code "%s" does not exist.', $this->countryCode));
        }

        $stateNames = StateAll::STATE_NAMES[$this->countryCode];

        if (!array_key_exists($this->stateCode, $stateNames)) {
            throw new LogicException(sprintf('State code "%s" does not exist.', $this->stateCode));
        }

        $stateData = $stateNames[$this->stateCode];

        if (!array_key_exists($localeCode, $stateData)) {
            throw new LogicException(sprintf('Locale code "%s" does not exist.', $localeCode));
        }

        return $stateData[$localeCode];
    }
}
