<?php
/**
 * Definition of the FolderInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the FolderInfoResponseMessageType type
 */
class FolderInfoResponseMessageType extends Type
{
    /**
     * Folders property
     *
     * @var ArrayOfFoldersType
     */
    public $Folders;
}
