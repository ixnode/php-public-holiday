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

namespace Ixnode\PhpPublicHoliday;

use DateTimeImmutable;

/**
 * Class HolidayItem
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-07-18)
 * @since 0.1.0 (2024-07-18) First version.
 */
readonly class HolidayItem
{
    public function __construct(private DateTimeImmutable $date, private string $name)
    {
    }

    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
