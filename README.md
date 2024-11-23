# PHP Public Holiday

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
> up-to-date holiday information for all supported areas. Movable public holidays such as Easter Monday are calculated
> automatically using the PHP function `easter_date()`. Static public holidays are permanently stored.

## 1. Usage

```php
use Ixnode\PhpPublicHoliday\PublicHoliday;
```

### 1.1 Get the public holidays of Germany from the state of Saxony

```php
$year = 2024;
$country = 'DE';
$state = 'SN';
$locale = 'de';

$holiday = new Holiday(year: $year, countryCode: $country, stateCode: $state, localeCode: $locale);

print_r($holiday->getHolidays());
// (array) [Ixnode\PhpPublicHoliday\PublicHolidayItem Object, ...]
// - (DateTimeImmutable) ->getDate()
// - (string) ->getName()
```

## 2. Supported countries

| Code | Country     | States                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Support                              |
|------|-------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------|
| `AT` | Austria     | Burgenland (`B`), Carinthia (`K`), Lower Austria (`N`), Upper Austria (`O`), Salzburg (`S`), Styria (`ST`), Tyrol (`T`), Vorarlberg (`V`), Vienna (`W`)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  | _fully supported_ :heavy_check_mark: |
| `CH` | Switzerland | Canton of Zurich (`ZH`), Canton of Bern (`BE`), Canton of Lucerne (`LU`), Canton of Uri (`UR`), Canton of Schwyz (`SZ`), Canton of Obwalden (`OW`), Canton of Nidwalden (`NW`), Canton of Glarus (`GL`), Canton of Zug (`ZG`), Canton of Fribourg (`FR`), Canton of Solothurn (`SO`), Canton of Basel-Stadt (`BS`), Canton of Basel-Landschaft (`BL`), Canton of Schaffhausen (`SH`), Canton of Appenzell Ausserrhoden (`AR`), Canton of Appenzell Innerrhoden (`AI`), Canton of St. Gallen (`SG`), Canton of the Grisons (`GR`), Canton of Aargau (`AG`), Canton of Thurgau (`TG`), Canton of Ticino (`TI`), Canton of Vaud (`VD`), Canton of Valais (`VS`), Canton of Neuchâtel (`NE`), Canton of Geneva (`GE`), Canton of Jura (`JU`) | _planned_ :soon:                     |
| `DE` | Germany     | Brandenburg (`BB`), Berlin (`BE`), Baden Württemberg (`BW`),  Bavaria (`BY`), Bremen (`HB`), Hesse (`HE`), Hamburg (`HH`), Mecklenburg-Western Pomerania (`MV`), Lower Saxony (`NI`), Nordrhein-Westfalen (`NW`), Rhineland-Palatinate (`RP`), Schleswig-Holstein (`SH`), Saarland (`SL`), Saxony (`SN`), Sachsen-Anhalt (`ST`), Thuringia (`TH`)                                                                                                                                                                                                                                                                                                                                                                                        | _fully supported_ :heavy_check_mark: |

## 3. Supported languages

| Code | Language | Support                              |
|------|----------|--------------------------------------|
| `cz` | Czech    | _fully supported_ :heavy_check_mark: |
| `de` | German   | _fully supported_ :heavy_check_mark: |
| `en` | English  | _fully supported_ :heavy_check_mark: |
| `es` | Spanish  | _fully supported_ :heavy_check_mark: |
| `fr` | French   | _fully supported_ :heavy_check_mark: |
| `hr` | Croatian | _fully supported_ :heavy_check_mark: |
| `it` | Italian  | _fully supported_ :heavy_check_mark: |
| `pl` | Polish   | _fully supported_ :heavy_check_mark: |
| `sv` | Swedish  | _fully supported_ :heavy_check_mark: |

## 4. Installation

```bash
composer require ixnode/php-public-holiday
```

```bash
vendor/bin/php-public-holiday -V
```

```bash
php-public-holiday 0.1.14 (2024-11-23 11:20:29) - Björn Hempel <bjoern@hempel.li>
```

## 5. Command line tool

> Used to quickly check the public holidays.

development mode:

```bash
bin/console ph DE SN --year=2024
```

or within your composer project:

```bash
vendor/bin/php-public-holiday ph DE SN --year=2024
```

```bash

Year:    2024
Country: DE (Deutschland)
State:   SN (Sachsen)
Locale:  de (Deutsch)

- 2024-01-01: Neujahr
- 2024-03-29: Karfreitag
- 2024-03-31: Ostersonntag
- 2024-04-01: Ostermontag
- 2024-05-01: Tag der Arbeit
- 2024-05-09: Christi Himmelfahrt
- 2024-05-19: Pfingstsonntag
- 2024-05-20: Pfingstmontag
- 2024-05-30: Fronleichnam
- 2024-10-03: Tag der deutschen Einheit
- 2024-10-31: Reformationstag
- 2024-11-20: Buß- und Bettag
- 2024-12-25: Erster Weihnachtsfeiertag
- 2024-12-26: Zweiter Weihnachtsfeiertag

```

### Output locales (`--locale`)

Available options:

* `cz`
* `de` (default)
* `en`
* `es`
* `fr`
* `hr`
* `it`
* `pl`
* `sv`

```bash
vendor/bin/php-public-holiday ph DE SN --year=2025 --locale=en --format=text
```

```bash

Year:    2025
Country: DE (Germany)
State:   SN (Saxony)
Locale:  en (English)

- 2025-01-01: New Year
- 2025-04-18: Good Friday
- 2025-04-20: Easter Sunday
- 2025-04-21: Easter Monday
- 2025-05-01: Labour Day
- 2025-05-29: Feast of the Ascension
- 2025-06-08: Whit Sunday
- 2025-06-09: Whit Monday
- 2025-06-19: Feast of Corpus Christi
- 2025-10-03: German Unity Day
- 2025-10-31: Reformation Day
- 2025-11-19: Buß- und Bettag
- 2025-12-25: Christmas Day
- 2025-12-26: Boxing Day

```

```bash
vendor/bin/php-public-holiday ph AT K --year=2025 --locale=sv --format=text
```

```bash

Year:    2025
Country: AT (Österrike)
State:   K (Kärnten)
Locale:  sv (Svenska)

- 2025-01-01: Nyår (39 days)
- 2025-01-06: Tre vise männen (44 days)
- 2025-04-20: Påskdagen (147 days)
- 2025-04-21: Annandag påsk (148 days)
- 2025-05-01: Bankdagar (159 days)
- 2025-05-29: Kristi himmelsfärdsdag (186 days)
- 2025-06-08: Pingst (196 days)
- 2025-06-09: Annandag pingst (197 days)
- 2025-06-19: Corpus Christi (207 days)
- 2025-08-15: Jungfru Marie himmelsfärd (265 days)
- 2025-10-26: Nationaldag (337 days)
- 2025-11-01: Alla helgons dag (343 days)
- 2025-12-08: Obefläckade avlelsen (380 days)
- 2025-12-25: Jul (397 days)
- 2025-12-26: Stefani dag (398 days)

```

### Output formats (`--format`)

Available options:

* `text` (default)
* `json`
* `csv`

#### JSON

```bash
vendor/bin/php-public-holiday ph DE SN --year=2025 --format=json
```

```json
{
    "country": "DE",
    "state": "SN",
    "year": 2025,
    "locale": "de",
    "holidays": [
        {
            "date": "2025-01-01",
            "name": "Neujahr"
        },
        ...
    ]
}
```

#### CSV

```bash
vendor/bin/php-public-holiday ph DE SN --year=2025 --format=csv
```

```csv
date;"public holiday"
2025-01-01;Neujahr
2025-04-18;Karfreitag
...
```

## 6. Library development

```bash
git clone git@github.com:ixnode/php-public-holiday.git && cd php-public-holiday
```

```bash
composer install
```

```bash
composer test
```

## 7. License

This library is licensed under the MIT License - see the [LICENSE](/LICENSE.md) file for details.

## 8. Author

* Björn Hempel <bjoern@hempel.li>
* https://www.hempel.li/
