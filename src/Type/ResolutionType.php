<?php
/**
 * Definition of the ResolutionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the ResolutionType type
 */
class ResolutionType extends Type
{
    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * Contact property
     *
     * @var ContactItemType
     */
    public $Contact;
}
