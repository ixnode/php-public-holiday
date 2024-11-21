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
 * Class Date
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-11-21)
 * @since 0.1.0 (2024-11-21) First version.
 */
readonly class Date
{
    final public const TODAY = 'today';

    final public const DATE_FORMAT_DE_YMD = 'd.m.Y';

    final public const DATE_FORMAT_EN_YMD = 'Y-m-d';
}
