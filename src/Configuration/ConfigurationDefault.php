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

use Ixnode\PhpTimezone\Constants\Locale;

/**
 * Class ConfigurationDefault
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-07-23)
 * @since 0.1.0 (2024-07-23) First version.
 */
readonly class ConfigurationDefault
{
    /* Default locale within the whole application: de_DE, etc. */
    final public const LOCALE = Locale::DE_DE;

    final public const WORKING_DAYS_NEXT_DATE = 14;

    final public const PRE_GENERATION_YEARS = 1;

    final public const PRE_GENERATION_YEARS_MIN = 1;

    final public const PRE_GENERATION_YEARS_MAX = 3;
}
