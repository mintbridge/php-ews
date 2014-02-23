<?php
/**
 * Definition of the AttendeeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the AttendeeType type
 */
class AttendeeType extends Type
{
    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * ResponseType property
     *
     * @var ResponseTypeType
     */
    public $ResponseType;

    /**
     * LastResponseTime property
     *
     * @var dateTime
     */
    public $LastResponseTime;
}
