<?php
/**
 * The IsEqualTo element represents a search expression that compares a property
 * with either a constant value or another property and evaluates to true if
 * they are equal.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the IsEqualToType type.
 */
class IsEqualToType extends Type
{
    /**
     * Identifies frequently referenced properties by URI.
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Identifies MAPI properties.
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Represents either a property or a constant value to be used when
     * comparing with another property.
     *
     * @var FieldURIOrConstantType
     */
    public $FieldURIOrConstant;
}
