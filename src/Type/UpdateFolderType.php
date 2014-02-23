<?php
/**
 * Definition of the UpdateFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the UpdateFolderType type
 */
class UpdateFolderType extends Type
{
    /**
     * FolderChanges property
     *
     * @var NonEmptyArrayOfFolderChangesType
     */
    public $FolderChanges;
}
