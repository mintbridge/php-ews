<?php
/**
 * Definition of the FreeBusyView type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the FreeBusyView type
 */
class FreeBusyView extends Type
{
    /**
     * FreeBusyViewType property
     *
     * @var FreeBusyViewType
     */
    public $FreeBusyViewType;

    /**
     * MergedFreeBusy property
     *
     * @var string
     */
    public $MergedFreeBusy;

    /**
     * CalendarEventArray property
     *
     * @var ArrayOfCalendarEvent
     */
    public $CalendarEventArray;

    /**
     * WorkingHours property
     *
     * @var WorkingHours
     */
    public $WorkingHours;
}
