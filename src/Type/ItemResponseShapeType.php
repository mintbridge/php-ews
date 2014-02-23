<?php
/**
 * Definition of the ItemResponseShapeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the ItemResponseShapeType type
 */
class ItemResponseShapeType extends Type
{
    /**
     * BaseShape property
     *
     * @var DefaultShapeNamesType
     */
    public $BaseShape;

    /**
     * IncludeMimeContent property
     *
     * @var boolean
     */
    public $IncludeMimeContent;

    /**
     * BodyType property
     *
     * @var BodyTypeResponseType
     */
    public $BodyType;

    /**
     * AdditionalProperties property
     *
     * @var NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
}
