<?php
/**
 * Definition of the BaseMoveCopyFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the BaseMoveCopyFolderType type
 */
class BaseMoveCopyFolderType extends Type
{
    /**
     * ToFolderId property
     *
     * @var TargetFolderIdType
     */
    public $ToFolderId;

    /**
     * FolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
