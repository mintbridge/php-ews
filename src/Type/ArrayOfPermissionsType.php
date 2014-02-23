<?php
/**
 * Definition of the ArrayOfPermissionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the ArrayOfPermissionsType type
 */
class ArrayOfPermissionsType extends Type
{
    /**
     * Permission property
     *
     * @var PermissionType
     */
    public $Permission;
}
