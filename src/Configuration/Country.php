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

namespace Ixnode\PhpPublicHoliday\Configuration;

use Ixnode\PhpTimezone\Constants\CountryEurope;

/**
 * Class Format
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-11-20)
 * @since 0.1.0 (2024-11-20) First version.
 */
readonly class Country
{
    final public const COUNTRIES_SUPPORTED = [
        CountryEurope::COUNTRY_CODE_AT,
        CountryEurope::COUNTRY_CODE_DE,
    ];
}
