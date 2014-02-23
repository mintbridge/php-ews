<?php
/**
 * Definition of the CalendarFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the CalendarFolderType type
 */
class CalendarFolderType extends Type
{
    /**
     * PermissionSet property
     *
     * @var CalendarPermissionSetType
     */
    public $PermissionSet;
}
