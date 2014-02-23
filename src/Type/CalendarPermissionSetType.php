<?php
/**
 * Definition of the CalendarPermissionSetType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the CalendarPermissionSetType type
 */
class CalendarPermissionSetType extends Type
{
    /**
     * CalendarPermissions property
     *
     * @var ArrayOfCalendarPermissionsType
     */
    public $CalendarPermissions;

    /**
     * UnknownEntries property
     *
     * @var ArrayOfUnknownEntriesType
     */
    public $UnknownEntries;
}
