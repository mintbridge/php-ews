<?php
/**
 * The TransitionsGroups element represents an array of time zone transition
 * groups.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the ArrayOfTransitionsGroupsType type.
 */
class ArrayOfTransitionsGroupsType extends Type
{
    /**
     * Represents an array of time zone transitions.
     *
     * @var ArrayOfTransitionsType
     */
    public $TransitionsGroup;
}
