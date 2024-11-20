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

namespace Ixnode\PhpPublicHoliday\Tools;

use LogicException;

/**
 * Class ArrayToCsv
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-11-20)
 * @since 0.1.0 (2024-11-20) First version.
 */
readonly class ArrayToCsv
{
    /**
     * @param array<int, array<int, string|int>> $data
     */
    public function __construct(private array $data)
    {
    }

    /**
     * Returns the data in raw format (array).
     *
     * @return array<int, array<int, string|int>>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Returns the data in CSV Format.
     *
     * @param string $separator
     * @param string $enclosure
     * @return string
     */
    public function getCSV(
        string $separator = ";",
        string $enclosure = '"'
    ): string
    {
        $stream = fopen('php://temp', 'r+');

        if ($stream === false) {
            throw new LogicException('Unable to open temp file');
        }

        foreach ($this->data as $row) {
            fputcsv($stream, $row, separator: $separator, enclosure: $enclosure);
        }

        rewind($stream);

        $csvString = stream_get_contents($stream);

        if (!is_string($csvString)) {
            throw new LogicException('Unable to get stream content.');
        }

        fclose($stream);

        return $csvString;
    }
}
