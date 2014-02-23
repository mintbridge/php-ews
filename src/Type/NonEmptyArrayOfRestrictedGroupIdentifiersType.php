<?php
/**
 * Definition of the NonEmptyArrayOfRestrictedGroupIdentifiersType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfRestrictedGroupIdentifiersType type
 */
class NonEmptyArrayOfRestrictedGroupIdentifiersType extends Type
{
    /**
     * RestrictedGroupIdentifier property
     *
     * @var SidAndAttributesType
     */
    public $RestrictedGroupIdentifier;
}
