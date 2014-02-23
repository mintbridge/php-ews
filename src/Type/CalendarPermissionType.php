<?php
/**
 * Definition of the CalendarPermissionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the CalendarPermissionType type
 */
class CalendarPermissionType extends Type
{
    /**
     * ReadItems property
     *
     * @var CalendarPermissionReadAccessType
     */
    public $ReadItems;

    /**
     * CalendarPermissionLevel property
     *
     * @var CalendarPermissionLevelType
     */
    public $CalendarPermissionLevel;
}
