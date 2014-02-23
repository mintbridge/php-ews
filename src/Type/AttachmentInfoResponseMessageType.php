<?php
/**
 * Definition of the AttachmentInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the AttachmentInfoResponseMessageType type
 */
class AttachmentInfoResponseMessageType extends Type
{
    /**
     * Attachments property
     *
     * @var ArrayOfAttachmentsType
     */
    public $Attachments;
}
