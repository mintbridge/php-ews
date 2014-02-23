<?php
/**
 * The AbsoluteDateTransition element represents a time zone transition that
 * occurs on a specific date and at a specific time.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the AbsoluteDateTransitionType type.
 */
class AbsoluteDateTransitionType extends Type
{
    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @var TransitionTargetType
     */
    public $To;

    /**
     * Represents the date and time at which the time zone transition occurs.
     *
     * @var string
     */
    public $DateTime;
}
