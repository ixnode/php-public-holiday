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
use Ixnode\PhpTimezone\Constants\State\Europe\StateAt;
use Ixnode\PhpTimezone\Constants\State\Europe\StateDe;

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
        CountryEurope::COUNTRY_CODE_AT => [
            StateAt::STATE_CODE_ALL,
            StateAt::STATE_CODE_B,
            StateAt::STATE_CODE_K,
            StateAt::STATE_CODE_N,
            StateAt::STATE_CODE_O,
            StateAt::STATE_CODE_S,
            StateAt::STATE_CODE_ST,
            StateAt::STATE_CODE_T,
            StateAt::STATE_CODE_V,
            StateAt::STATE_CODE_W,
        ],
        CountryEurope::COUNTRY_CODE_DE => [
            StateDe::STATE_CODE_ALL,
            StateDe::STATE_CODE_BB,
            StateDe::STATE_CODE_BE,
            StateDe::STATE_CODE_BW,
            StateDe::STATE_CODE_BY,
            StateDe::STATE_CODE_HB,
            StateDe::STATE_CODE_HE,
            StateDe::STATE_CODE_HH,
            StateDe::STATE_CODE_MV,
            StateDe::STATE_CODE_NI,
            StateDe::STATE_CODE_NW,
            StateDe::STATE_CODE_RP,
            StateDe::STATE_CODE_SH,
            StateDe::STATE_CODE_SL,
            StateDe::STATE_CODE_SN,
            StateDe::STATE_CODE_ST,
            StateDe::STATE_CODE_TH,
        ]
    ];
}
