<?php
/**
 * Definition of the CreateAttachmentType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the CreateAttachmentType type
 */
class CreateAttachmentType extends Type
{
    /**
     * ParentItemId property
     *
     * @var ItemIdType
     */
    public $ParentItemId;

    /**
     * Attachments property
     *
     * @var NonEmptyArrayOfAttachmentsType
     */
    public $Attachments;
}
