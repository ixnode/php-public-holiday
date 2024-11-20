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

namespace Ixnode\PhpPublicHoliday\Configuration;

use Ixnode\PhpTimezone\Constants\CountryEurope;
use Ixnode\PhpTimezone\Constants\State\Europe\StateGermany;

/**
 * Class Format
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-11-20)
 * @since 0.1.0 (2024-11-20) First version.
 */
readonly class State
{
    final public const STATES_SUPPORTED = [
        CountryEurope::COUNTRY_CODE_DE => [
            StateGermany::STATE_CODE_ALL,
            StateGermany::STATE_CODE_BB,
            StateGermany::STATE_CODE_BE,
            StateGermany::STATE_CODE_BW,
            StateGermany::STATE_CODE_BY,
            StateGermany::STATE_CODE_HB,
            StateGermany::STATE_CODE_HE,
            StateGermany::STATE_CODE_HH,
            StateGermany::STATE_CODE_MV,
            StateGermany::STATE_CODE_NI,
            StateGermany::STATE_CODE_NW,
            StateGermany::STATE_CODE_RP,
            StateGermany::STATE_CODE_SH,
            StateGermany::STATE_CODE_SL,
            StateGermany::STATE_CODE_SN,
            StateGermany::STATE_CODE_ST,
            StateGermany::STATE_CODE_TH,
        ]
    ];
}
