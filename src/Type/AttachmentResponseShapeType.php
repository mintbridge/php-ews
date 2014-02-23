<?php
/**
 * Definition of the AttachmentResponseShapeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the AttachmentResponseShapeType type
 */
class AttachmentResponseShapeType extends Type
{
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
