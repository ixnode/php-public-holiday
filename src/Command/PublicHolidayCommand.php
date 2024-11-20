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

namespace Ixnode\PhpPublicHoliday\Command;

use Ahc\Cli\Input\Command;
use Ahc\Cli\Output\Color;
use Ahc\Cli\Output\Writer;
use Exception;
use Ixnode\PhpPublicHoliday\Holiday;
use Ixnode\PhpPublicHoliday\Tools\ArrayToCsv;
use LogicException;

/**
 * Class PhpPublicHolidayCommand
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.1 (2024-11-20)
 * @since 0.1.1 (2024-11-20) Add different output formats: text, json, csv.
 * @since 0.1.0 (2024-07-18) First version.
 * @property string|null $country
 * @property string|null $state
 * @property int $year
 * @property string|null $format
 */
class PublicHolidayCommand extends Command
{
    private const SUCCESS = 0;

    private const INVALID = 2;

    private const FORMAT_TEXT = 'text';

    private const FORMAT_JSON = 'json';

    private const FORMAT_CSV = 'csv';

    private const FORMATS_ALLOWED = [
        self::FORMAT_TEXT,
        self::FORMAT_JSON,
        self::FORMAT_CSV,
    ];

    private Writer $writer;

    /**
     * Configuration of country, state, year and format.
     */
    public function __construct()
    {
        parent::__construct('show:holidays', 'Displays the public holidays.');

        $this
            ->argument('country', 'The country to be used.')
            ->argument('state', 'The federal state to be used.')
            ->option('--year', 'The year to be displayed.', 'intval', (int) date('Y'))
            ->option('--format', 'The format to be displayed. Options: text, json, csv', $this->filterFormat(...), 'text');
        ;
    }

    /**
     * Executes the CliImageCommand.
     *
     * @return int
     * @throws Exception
     * @SuppressWarnings(PHPMD.LongVariable)
     */
    public function execute(): int
    {
        $this->writer = $this->writer();

        /* Check given format. */
        $format = $this->format;
        if (is_null($format)) {
            /* Error already printed via self::filterFormat. */
            return self::INVALID;
        }

        /* Check given country. */
        $country = $this->country;
        if (is_null($country)) {
            $this->printError('No country given.');
            return self::INVALID;
        }

        /* Check given state. */
        $state = $this->state;
        if (is_null($state)) {
            $this->printError('No state given.');
            return self::INVALID;
        }

        /* Check given year. */
        $year = $this->year;

        /* Print public holidays according to given format. */
        match ($format) {
            self::FORMAT_CSV => $this->printCsv(
                country: $country,
                state: $state,
                year: $year,
            ),
            self::FORMAT_JSON => $this->printJson(
                country: $country,
                state: $state,
                year: $year,
            ),
            self::FORMAT_TEXT => $this->printText(
                country: $country,
                state: $state,
                year: $year,
            ),
            default => throw new LogicException(sprintf('Unknown or unsupported format: %s', $format)),
        };

        return self::SUCCESS;
    }

    /**
     * Return holidays as text.
     *
     * @param string $country
     * @param string $state
     * @param int $year
     * @return void
     * @throws Exception
     */
    private function printCsv(string $country, string $state, int $year): void
    {
        $holiday = new Holiday($year, $country, $state);

        /* Print CSV. */
        print $holiday->getCsv();
    }

    /**
     * Return holidays as text.
     *
     * @param string $country
     * @param string $state
     * @param int $year
     * @return void
     * @throws Exception
     */
    private function printJson(string $country, string $state, int $year): void
    {
        $holiday = new Holiday($year, $country, $state);

        print $holiday->getJson().PHP_EOL;
    }

    /**
     * Return holidays as text.
     *
     * @param string $country
     * @param string $state
     * @param int $year
     * @return void
     * @throws Exception
     */
    private function printText(string $country, string $state, int $year): void
    {
        $holiday = new Holiday($year, $country, $state);

        print PHP_EOL;
        print sprintf('Country: %s', $country).PHP_EOL;
        print sprintf('State:   %s', $state).PHP_EOL;
        print sprintf('Year:    %d', $year).PHP_EOL;
        print PHP_EOL;

        foreach ($holiday->getHolidays() as $holiday) {
            print sprintf('- %s: %s', $holiday->getDate()->format('Y-m-d'), $holiday->getName()).PHP_EOL;
        }

        print PHP_EOL;
    }

    /**
     * Format filter.
     *
     * @param string $format
     * @return string|null
     * @throws Exception
     */
    public function filterFormat(string $format): string|null
    {
        if (!in_array($format, self::FORMATS_ALLOWED, true)) {
            print sprintf('Invalid format given "%s".', $format).PHP_EOL;
            return null;
        }

        return $format;
    }

    /**
     * Prints error message.
     *
     * @param string $message
     * @return void
     * @throws Exception
     */
    private function printError(string $message): void
    {
        $color = new Color();

        $this->writer->write(sprintf('%s%s', $color->error($message), PHP_EOL));
    }
}
