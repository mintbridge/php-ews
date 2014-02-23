<?php
/**
 * Definition of the NonEmptyArrayOfAttachmentsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfAttachmentsType type
 */
class NonEmptyArrayOfAttachmentsType extends Type
{
    /**
     * ItemAttachment property
     *
     * @var ItemAttachmentType
     */
    public $ItemAttachment;

    /**
     * FileAttachment property
     *
     * @var FileAttachmentType
     */
    public $FileAttachment;
}
