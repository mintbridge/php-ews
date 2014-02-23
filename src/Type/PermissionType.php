<?php
/**
 * Definition of the PermissionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the PermissionType type
 */
class PermissionType extends Type
{
    /**
     * ReadItems property
     *
     * @var PermissionReadAccessType
     */
    public $ReadItems;

    /**
     * PermissionLevel property
     *
     * @var PermissionLevelType
     */
    public $PermissionLevel;
}
