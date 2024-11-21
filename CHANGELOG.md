# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## Releases

### [0.1.10] - 2024-11-21

* Fix national holiday (AT)
* Add difference days
* Add date format to given locale
* Add README.md updates

### [0.1.9] - 2024-11-21

* Add README.md updates

### [0.1.8] - 2024-11-20

* Add README.md updates

### [0.1.7] - 2024-11-20

* Add ixnode/php-timezone version 0.1.23
* Add AT public holidays

### [0.1.6] - 2024-11-20

* Add ixnode/php-naming-conventions library for states, countries and locales
* Translate states, countries and locales

### [0.1.5] - 2024-11-20

* Add language selector and options
* Translate public holidays into english

### [0.1.4] - 2024-11-20

* Add phpcs fixer; Fixes to phpcs
* Add versions to test output

### [0.1.3] - 2024-11-20

* Update composer libraries
* Fix composer audits

### [0.1.2] - 2024-11-20

* Add output formats: csv, json
* Add ArrayToCsv converter

### [0.1.1] - 2024-07-18

* Change title of README.md

### [0.1.0] - 2024-07-18

* Initial release with first public holiday builder
* Add src
* Add tests
  * PHP Coding Standards Fixer
  * PHPMND - PHP Magic Number Detector
  * PHPStan - PHP Static Analysis Tool
  * PHPUnit - The PHP Testing Framework
  * Rector - Instant Upgrades and Automated Refactoring
* Add README.md
* Add LICENSE.md

## Add new version

```bash
# Checkout master branch
$ git checkout main && git pull

# Check current version
$ vendor/bin/version-manager --current

# Increase patch version
$ vendor/bin/version-manager --patch

# Change changelog
$ vi CHANGELOG.md

# Push new version
$ git add CHANGELOG.md VERSION && git commit -m "Add version $(cat VERSION)" && git push

# Tag and push new version
$ git tag -a "$(cat VERSION)" -m "Version $(cat VERSION)" && git push origin "$(cat VERSION)"
```
