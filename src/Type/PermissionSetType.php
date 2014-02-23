<?php
/**
 * Definition of the PermissionSetType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the PermissionSetType type
 */
class PermissionSetType extends Type
{
    /**
     * Permissions property
     *
     * @var ArrayOfPermissionsType
     */
    public $Permissions;

    /**
     * UnknownEntries property
     *
     * @var ArrayOfUnknownEntriesType
     */
    public $UnknownEntries;
}
