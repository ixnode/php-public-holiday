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
use Ixnode\PhpPublicHoliday\Translation\Format;
use LogicException;

/**
 * Class FormatCode
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-11-23)
 * @since 0.1.0 (2024-11-23) First version.
 */
readonly class FormatCode
{
    private string $formatCode;

    /**
     * @param string $formatCode
     */
    public function __construct(string $formatCode)
    {
        $this->formatCode = $this->doFormatCode($formatCode);
    }

    /**
     * Converts given format code.
     *
     * @param string $formatCode
     * @return string
     */
    private function doFormatCode(string $formatCode): string
    {
        return strtolower($formatCode);
    }

    /**
     * Returns the country code of this object.
     */
    public function getFormatCode(): string
    {
        return $this->formatCode;
    }

    /**
     * Returns the translated country code.
     */
    public function getFormatName(string $localeCode = ConfigurationDefault::LOCALE): string
    {
        if (!array_key_exists($this->formatCode, Format::FORMATS)) {
            throw new LogicException(sprintf('Format code "%s" does not exist.', $this->formatCode));
        }

        $formatData = Format::FORMATS[$this->formatCode];

        if (!array_key_exists($localeCode, $formatData)) {
            throw new LogicException(sprintf('Locale code "%s" does not exist.', $localeCode));
        }

        return $formatData[$localeCode];
    }
}
