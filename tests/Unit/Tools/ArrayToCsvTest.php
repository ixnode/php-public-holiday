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

namespace Ixnode\PhpPublicHoliday\Tests\Unit\Tools;

use Ixnode\PhpPublicHoliday\Tools\ArrayToCsv;
use PHPUnit\Framework\TestCase;

/**
 * Class ArrayToCsvTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-11-20)
 * @since 0.1.0 (2024-11-20) First version.
 * @link ArrayToCsv
 */
final class ArrayToCsvTest extends TestCase
{
    /**
     * Test wrapper
     *
     * @dataProvider dataProviderCsv
     *
     * @test
     * @testdox $number) Test PublicHoliday $year $state
     * @param int $number
     * @param array<int, array<int, string|int>> $data
     * @param string $csvExpected
     */
    public function wrapperHoliday(
        int $number,
        array $data,
        string $csvExpected,
    ): void
    {
        /* Arrange */

        /* Act */
        $arrayToCsv = new ArrayToCsv($data);

        /* Assert */
        $this->assertIsNumeric($number); // To avoid phpmd warning.
        $this->assertSame($csvExpected, $arrayToCsv->getCsv());
    }

    /**
     * Data provider
     *
     * @return array<int, array{int, mixed}>
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function dataProviderCsv(): array
    {
        $number = 0;

        return [
            [
                ++$number,
                [
                    ['header1', 'header2'],
                    ['value1', 'value2'],
                ],
                "header1;header2\nvalue1;value2\n",
            ]
        ];
    }
}
