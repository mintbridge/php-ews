<?php
/**
 * Represents a time zone transition.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the TransitionType type.
 */
class TransitionType extends Type
{
    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @var TransitionTargetType
     */
    public $To;
}
