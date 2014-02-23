<?php
/**
 * Definition of the DeleteAttachmentType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the DeleteAttachmentType type
 */
class DeleteAttachmentType extends Type
{
    /**
     * AttachmentIds property
     *
     * @var NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
}
