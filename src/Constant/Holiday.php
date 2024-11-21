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

namespace Ixnode\PhpPublicHoliday\Constant;

/**
 * Class Holiday
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-07-18)
 * @since 0.1.0 (2024-07-18) First version.
 */
readonly class Holiday
{
    final public const BUSS_UND_BETTAG = 'Buß- und Bettag';

    final public const DAY_SATURDAY = 6;

    final public const DAY_SUNDAY = 0;

    final public const LAST_WEDNESDAY = 3;

    final public const NEXT_WEDNESDAY = 4;

    final public const DEFAULT_WORKING_DAYS_NEXT_DATE = 14;

    final public const DEFAULT_PRE_GENERATION_YEARS = 1;

    final public const PRE_GENERATION_YEARS_MIN = 1;

    final public const PRE_GENERATION_YEARS_MAX = 3;
}
