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
use Exception;
use Ixnode\PhpPublicHoliday\Constant\Date;

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

    /**
     * Returns the date of the holiday.
     *
     * @return DateTimeImmutable
     */
    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }

    /**
     * Returns the day difference.
     *
     * @throws Exception
     */
    public function getDays(DateTimeImmutable|string $referenceDate = Date::TODAY): int
    {
        if (is_string($referenceDate)) {
            $referenceDate = new DateTimeImmutable($referenceDate);
        }

        $diff = $this->date->diff($referenceDate);

        return $diff->days * ($diff->invert ? 1 : -1);
    }

    /**
     * Returns the name of the holiday.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
