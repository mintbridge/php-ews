<?php
/**
 * Definition of the NonEmptyArrayOfGroupIdentifiersType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfGroupIdentifiersType type
 */
class NonEmptyArrayOfGroupIdentifiersType extends Type
{
    /**
     * GroupIdentifier property
     *
     * @var SidAndAttributesType
     */
    public $GroupIdentifier;
}
