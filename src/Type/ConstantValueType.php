<?php
/**
 * The Constant element identifies a constant value in a restriction.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Specifies the value to compare in the restriction.
 */
class ConstantValueType extends Type
{
    /**
     * Specifies the value to compare in the restriction.
     *
     * @var string
     */
    public $Value;
}
