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
use Ixnode\PhpPublicHoliday\Configuration\ConfigurationDefault;
use Ixnode\PhpPublicHoliday\Constant\Country;
use Ixnode\PhpPublicHoliday\Constant\Format;
use Ixnode\PhpPublicHoliday\Constant\Locale;
use Ixnode\PhpPublicHoliday\Constant\State;
use Ixnode\PhpPublicHoliday\Converter\CountryCode;
use Ixnode\PhpPublicHoliday\Converter\FormatCode;
use Ixnode\PhpPublicHoliday\Converter\LocaleCode;
use Ixnode\PhpPublicHoliday\Converter\StateCode;
use Ixnode\PhpPublicHoliday\PublicHoliday;
use Ixnode\PhpTimezone\Constants\Locale as PhpTimezoneLocale;
use LogicException;

/**
 * Class PublicHolidayCommand
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.1 (2024-11-20)
 * @since 0.1.1 (2024-11-20) Add different output formats: text, json, csv.
 * @since 0.1.0 (2024-07-18) First version.
 * @property string $country
 * @property string $state
 * @property int $year
 * @property string|null $locale
 * @property string|null $format
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class PublicHolidayCommand extends Command
{
    private const SUCCESS = 0;

    private const INVALID = 2;

    private Writer $writer;

    /**
     * Holiday of country, state, year and format.
     */
    public function __construct()
    {
        parent::__construct('show:holidays', 'Displays the public holidays.');

        $this
            /* Add arguments. */
            ->argument(
                'country',
                sprintf('The country to be used. Supported options: %s', implode(', ', Country::COUNTRIES_SUPPORTED))
            )
            ->argument('state', 'The federal state to be used.')

            /* Add options. */
            ->option('--year', 'The year to be displayed.', 'intval', (int) date('Y'))
            ->option(
                '--locale',
                sprintf('The locale to be displayed. Supported options: %s', implode(', ', Locale::LOCALES_SUPPORTED)),
                $this->filterLocale(...),
                PhpTimezoneLocale::DE
            )
            ->option(
                '--format',
                sprintf('The format to be displayed. Supported options: %s', implode(', ', Format::FORMATS_SUPPORTED)),
                $this->filterFormat(...),
                Format::FORMAT_TEXT
            )
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

        /* Check given language. */
        $locale = $this->locale;
        if (is_null($locale)) {
            /* Error already printed via self::filterLanguage. */
            return self::INVALID;
        }

        /* Check given format. */
        $format = $this->format;
        if (is_null($format)) {
            /* Error already printed via self::filterFormat. */
            return self::INVALID;
        }

        /* Check given country. */
        $country = $this->filterCountry(country: $this->country, localeCode: $locale);
        if (is_null($country)) {
            /* Error already printed via self::filterCountry. */
            return self::INVALID;
        }

        /* Check given state. */
        $state = $this->filterState(country: $country, state: $this->state, localeCode: $locale);
        if (is_null($state)) {
            /* Error already printed via self::filterState. */
            return self::INVALID;
        }

        /* Check given year. */
        $year = $this->year;

        /* Print public holidays according to given format. */
        match ($format) {
            Format::FORMAT_CSV => $this->printCsv(
                country: $country,
                state: $state,
                year: $year,
                language: $locale,
            ),
            Format::FORMAT_JSON => $this->printJson(
                country: $country,
                state: $state,
                year: $year,
                language: $locale,
            ),
            Format::FORMAT_TEXT => $this->printText(
                country: $country,
                state: $state,
                year: $year,
                localeCode: $locale,
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
     * @param string $language
     * @return void
     * @throws Exception
     */
    private function printCsv(string $country, string $state, int $year, string $language): void
    {
        $holiday = new PublicHoliday(
            year: $year,
            countryCode: $country,
            stateCode: $state,
            localeCode: $language
        );

        /* Print CSV. */
        print $holiday->getCsv();
    }

    /**
     * Return holidays as text.
     *
     * @param string $country
     * @param string $state
     * @param int $year
     * @param string $language
     * @return void
     * @throws Exception
     */
    private function printJson(string $country, string $state, int $year, string $language): void
    {
        $holiday = new PublicHoliday(
            year: $year,
            countryCode: $country,
            stateCode: $state,
            localeCode: $language
        );

        print $holiday->getJson().PHP_EOL;
    }

    /**
     * Return holidays as text.
     *
     * @param string $country
     * @param string $state
     * @param int $year
     * @param string $localeCode
     * @return void
     * @throws Exception
     */
    private function printText(string $country, string $state, int $year, string $localeCode): void
    {
        $holiday = new PublicHoliday(
            year: $year,
            countryCode: $country,
            stateCode: $state,
            localeCode: $localeCode
        );

        $dateFormat = $holiday->getDateFormat();

        print PHP_EOL;
        print sprintf('Year:    %d', $holiday->getYear()).PHP_EOL;
        print sprintf('Country: %s (%s)', $holiday->getCountryCode(), $holiday->getCountry()).PHP_EOL;
        print sprintf('State:   %s (%s)', $holiday->getStateCode(), $holiday->getState()).PHP_EOL;
        print sprintf('Locale:  %s (%s)', $holiday->getLocaleCode(), $holiday->getLanguage()).PHP_EOL;
        print PHP_EOL;

        foreach ($holiday->getHolidays() as $holiday) {
            print sprintf('- %s: %s (%d days)', $holiday->getDate()->format($dateFormat), $holiday->getName(), $holiday->getDays()).PHP_EOL;
        }

        print PHP_EOL;
    }

    /**
     * Country filter.
     */
    public function filterCountry(string $country, string $localeCode = ConfigurationDefault::LOCALE): string|null
    {
        $country = strtoupper($country);

        if (in_array($country, Country::COUNTRIES_SUPPORTED, true)) {
            return $country;
        }

        print PHP_EOL;
        print sprintf('Invalid country given "%s".', $country);
        print PHP_EOL;
        print 'Available options:' .PHP_EOL;

        foreach (Country::COUNTRIES_SUPPORTED as $countrySupported) {
            $countryName = (new CountryCode($countrySupported))->getCountryName($localeCode);
            print sprintf('- %s (%s)', $countrySupported, $countryName).PHP_EOL;
        }

        print PHP_EOL;
        return null;
    }

    /**
     * State filter.
     */
    public function filterState(string $country, string $state, string $localeCode = ConfigurationDefault::LOCALE): string|null
    {
        if (!array_key_exists($country, State::STATES_SUPPORTED)) {
            throw new LogicException(sprintf('Unsupported country given: %s', $country));
        }

        $statesSupported = State::STATES_SUPPORTED[$country];

        $state = strtoupper($state);

        if (in_array($state, $statesSupported, true)) {
            return $state;
        }

        print PHP_EOL;
        print sprintf('Invalid state given "%s".', $state);
        print PHP_EOL;
        print 'Available options:' .PHP_EOL;

        foreach ($statesSupported as $stateSupported) {
            $stateName = (new StateCode($country, $stateSupported))->getStateName($localeCode);
            print sprintf('- %s (%s)', $stateSupported, $stateName).PHP_EOL;
        }

        print PHP_EOL;

        return null;
    }

    /**
     * Locale filter.
     *
     * @param string $locale
     * @return string|null
     * @throws Exception
     */
    public function filterLocale(string $locale): string|null
    {
        $locale = (new LocaleCode($locale))->getLocaleCode();

        if (in_array($locale, Locale::LOCALES_SUPPORTED, true)) {
            return $locale;
        }

        print PHP_EOL;
        print sprintf('Invalid language given "%s".', $locale).PHP_EOL;
        print PHP_EOL;
        print 'Available options:' .PHP_EOL;

        foreach (Locale::LOCALES_SUPPORTED as $localeSupported) {
            $language = (new LocaleCode($localeSupported))->getLanguage();
            print sprintf('- %s (%s)', $localeSupported, $language).PHP_EOL;
        }

        print PHP_EOL;
        return null;
    }

    /**
     * Format filter.
     *
     * @throws Exception
     */
    public function filterFormat(string $format): string|null
    {
        if (in_array($format, Format::FORMATS_SUPPORTED, true)) {
            return $format;
        }

        print PHP_EOL;
        print sprintf('Invalid format given "%s".', $format).PHP_EOL;
        print PHP_EOL;
        print 'Available options:' .PHP_EOL;

        foreach (Format::FORMATS_SUPPORTED as $formatSupported) {
            $formatName = (new FormatCode($formatSupported))->getFormatName($this->locale ?? ConfigurationDefault::LOCALE);
            print sprintf('- %s (%s)', $formatSupported, $formatName).PHP_EOL;
        }

        print PHP_EOL;
        return null;
    }

    /**
     * Prints error message.
     *
     * @param string $message
     * @return void
     * @throws Exception
     */
    public function printError(string $message): void
    {
        $color = new Color();

        $this->writer->write(sprintf('%s%s', $color->error($message), PHP_EOL));
    }
}
