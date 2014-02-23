<?php
/**
 * Definition of the CalendarEvent type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the CalendarEvent type
 */
class CalendarEvent extends Type
{
    /**
     * Start date and time of the event in ISO 8601 format.
     *
     * @var string
     */
    public $Start;

    /**
     * End date and time of the event in ISO 8601 format.
     *
     * @var string
     */
    public $End;

    /**
     * BusyType property
     *
     * @var LegacyFreeBusyType
     */
    public $BusyType;

    /**
     * CalendarEventDetails property
     *
     * @var CalendarEventDetails
     */
    public $CalendarEventDetails;
}
