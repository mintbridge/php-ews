<?php
/**
 * Definition of the CalendarEventDetails type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the CalendarEventDetails type
 */
class CalendarEventDetails extends Type
{
    /**
     * ID property
     *
     * @var string
     */
    public $ID;

    /**
     * Subject property
     *
     * @var string
     */
    public $Subject;

    /**
     * Location property
     *
     * @var string
     */
    public $Location;

    /**
     * IsMeeting property
     *
     * @var boolean
     */
    public $IsMeeting;

    /**
     * IsRecurring property
     *
     * @var boolean
     */
    public $IsRecurring;

    /**
     * IsException property
     *
     * @var boolean
     */
    public $IsException;

    /**
     * IsReminderSet property
     *
     * @var boolean
     */
    public $IsReminderSet;

    /**
     * IsPrivate property
     *
     * @var boolean
     */
    public $IsPrivate;
}
