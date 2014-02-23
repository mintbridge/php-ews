<?php
/**
 * Definition of the NonEmptyArrayOfFolderChangesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfFolderChangesType type
 */
class NonEmptyArrayOfFolderChangesType extends Type
{
    /**
     * FolderChange property
     *
     * @var FolderChangeType
     */
    public $FolderChange;
}
