<?php
/**
 * Definition of the ArrayOfRecipientsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the ArrayOfRecipientsType type
 */
class ArrayOfRecipientsType extends Type
{
    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
