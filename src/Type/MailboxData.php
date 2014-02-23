<?php
/**
 * Definition of the MailboxData type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the MailboxData type
 */
class MailboxData extends Type
{
    /**
     * Email property
     *
     * @var EmailAddress
     */
    public $Email;

    /**
     * AttendeeType property
     *
     * @var MeetingAttendeeType
     */
    public $AttendeeType;

    /**
     * ExcludeConflicts property
     *
     * @var boolean
     */
    public $ExcludeConflicts;
}
