<?php
/**
 * Definition of the NonEmptyArrayOfTimeZoneIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfTimeZoneIdType type
 */
class NonEmptyArrayOfTimeZoneIdType extends Type
{
    /**
     * Array of string timezone identifiers (ex. "Eastern Standard Time").
     *
     * @var array
     */
    public $Id;
}
