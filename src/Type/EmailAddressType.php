<?php
/**
 * Definition of the EmailAddressType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the EmailAddressType type
 */
class EmailAddressType extends Type
{
    /**
     * Name property
     *
     * @var string
     */
    public $Name;

    /**
     * EmailAddress property
     *
     * @var NonEmptyStringType
     */
    public $EmailAddress;

    /**
     * RoutingType property
     *
     * @var NonEmptyStringType
     */
    public $RoutingType;

    /**
     * MailboxType property
     *
     * @var MailboxTypeType
     */
    public $MailboxType;

    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;
}
