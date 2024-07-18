# PHP Coordinate

[![Release](https://img.shields.io/github/v/release/ixnode/php-public-holiday)](https://github.com/ixnode/php-public-holiday/releases)
[![](https://img.shields.io/github/release-date/ixnode/php-public-holiday)](https://github.com/ixnode/php-public-holiday/releases)
![](https://img.shields.io/github/repo-size/ixnode/php-public-holiday.svg)
[![PHP](https://img.shields.io/badge/PHP-^8.2-777bb3.svg?logo=php&logoColor=white&labelColor=555555&style=flat)](https://www.php.net/supported-versions.php)
[![PHPStan](https://img.shields.io/badge/PHPStan-Level%20Max-777bb3.svg?style=flat)](https://phpstan.org/user-guide/rule-levels)
[![PHPUnit](https://img.shields.io/badge/PHPUnit-Unit%20Tests-6b9bd2.svg?style=flat)](https://phpunit.de)
[![PHPCS](https://img.shields.io/badge/PHPCS-PSR12-416d4e.svg?style=flat)](https://www.php-fig.org/psr/psr-12/)
[![PHPMD](https://img.shields.io/badge/PHPMD-ALL-364a83.svg?style=flat)](https://github.com/phpmd/phpmd)
[![Rector - Instant Upgrades and Automated Refactoring](https://img.shields.io/badge/Rector-PHP%208.2-73a165.svg?style=flat)](https://github.com/rectorphp/rector)
[![LICENSE](https://img.shields.io/github/license/ixnode/php-api-version-bundle)](https://github.com/ixnode/php-api-version-bundle/blob/master/LICENSE)

> This PHP package automatically generates holidays for a given year, considering both federal states and the country.
> It provides an easy-to-use interface to retrieve public holidays based on specific regions, ensuring accurate and
> up-to-date holiday information for all supported areas.

## 1. Usage

```php
use Ixnode\PhpPublicHoliday\Holiday;
```

### 1.1 Get the public holidays of Germany from the state of Saxony

```php
$year = 2024;
$country = \Ixnode\PhpPublicHoliday\Configuration\Country::DE;
$state = \Ixnode\PhpPublicHoliday\Configuration\Country\CountryDe::STATE_SN;

$holiday = new Holiday($year, $country, $state);

print_r($holiday->getHolidays());
// (array) [Ixnode\PhpPublicHoliday\HolidayItem Object, ...]
// - (DateTimeImmutable) ->getDate()
// - (string) ->getName()
```

## 2. Installation

```bash
composer require ixnode/php-public-holiday
```

```bash
vendor/bin/php-public-holiday -V
```

```bash
php-public-holiday 0.1.0 (2024-07-18 20:33:58) - Björn Hempel <bjoern@hempel.li>
```

## 3. Command line tool

> Used to quickly check the public holidays.

```bash
bin/console ph DE SN 2024
```

or within your composer project:

```bash
vendor/bin/php-public-holiday ph DE SN 2024
```

```bash

Country: DE
State:   SN
Year:    2024

- 2024-01-01: Neujahr
- 2024-03-29: Karfreitag
- 2024-03-31: Ostersonntag
- 2024-04-01: Ostermontag
- 2024-05-01: Tag der Arbeit
- 2024-05-09: Christi Himmelfahrt
- 2024-05-19: Pfingstsonntag
- 2024-05-20: Pfingstmontag
- 2024-10-03: Tag der deutschen Einheit
- 2024-12-25: Erster Weihnachtsfeiertag
- 2024-12-26: Zweiter Weihnachtsfeiertag

```

## 4. Library development

```bash
git clone git@github.com:ixnode/php-public-holiday.git && cd php-public-holiday
```

```bash
composer install
```

```bash
composer test
```

## 5. License

This library is licensed under the MIT License - see the [LICENSE](/LICENSE.md) file for details.

## 6. Author

* Björn Hempel <bjoern@hempel.li>
* https://www.hempel.li/
