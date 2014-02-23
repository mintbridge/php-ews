<?php
/**
 * Definition of the ExtendedPropertyType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the ExtendedPropertyType type
 */
class ExtendedPropertyType extends Type
{
    /**
     * ExtendedFieldURI property
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Value property
     *
     * @var string
     */
    public $Value;

    /**
     * Values property
     *
     * @var NonEmptyArrayOfPropertyValuesType
     */
    public $Values;
}
