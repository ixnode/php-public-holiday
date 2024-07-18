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

/**
 * Class PhpPublicHolidayCommand
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-07-18)
 * @since 0.1.0 (2024-07-18) First version.
 * @property string|null $country
 * @property string|null $state
 * @property int|null $year
 */
class PublicHolidayCommand extends Command
{
    private const SUCCESS = 0;

    private const INVALID = 2;

    private Writer $writer;

    /**
     *
     */
    public function __construct()
    {
        parent::__construct('show:holidays', 'Displays the public holidays.');

        $this
            ->argument('country', 'The country to be used.')
            ->argument('state', 'The federal state to be used.')
            ->option('--year', 'The year to be displayed.', null, (int) date('Y'));
        ;
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

        $country = $this->country;

        if (is_null($country)) {
            $this->printError('No country given.');
            return self::INVALID;
        }

        $state = $this->state;

        if (is_null($state)) {
            $this->printError('No state given.');
            return self::INVALID;
        }

        $year = (int) $this->year;

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

        return self::SUCCESS;
    }
}
