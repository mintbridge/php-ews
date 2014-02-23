<?php
/**
 * Definition of the PathToExtendedFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the PathToExtendedFieldType type
 */
class PathToExtendedFieldType extends Type
{
    /**
     * DistinguishedPropertySetId property
     *
     * @var DistinguishedPropertySetType
     */
    public $DistinguishedPropertySetId;

    /**
     * PropertySetId property
     *
     * @var GuidType
     */
    public $PropertySetId;

    /**
     * PropertyTag property
     *
     * @var PropertyTagType
     */
    public $PropertyTag;

    /**
     * PropertyName property
     *
     * @var string
     */
    public $PropertyName;

    /**
     * PropertyId property
     *
     * @var integer
     */
    public $PropertyId;

    /**
     * PropertyType property
     *
     * @var MapiPropertyTypeType
     */
    public $PropertyType;
}
