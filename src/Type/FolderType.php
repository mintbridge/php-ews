<?php
/**
 * Definition of the FolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the FolderType type
 */
class FolderType extends Type
{
    /**
     * PermissionSet property
     *
     * @var PermissionSetType
     */
    public $PermissionSet;

    /**
     * UnreadCount property
     *
     * @var integer
     */
    public $UnreadCount;
}
