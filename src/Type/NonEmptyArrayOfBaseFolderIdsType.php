<?php
/**
 * Definition of the NonEmptyArrayOfBaseFolderIdsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfBaseFolderIdsType type
 */
class NonEmptyArrayOfBaseFolderIdsType extends Type
{
    /**
     * FolderId property
     *
     * @var FolderIdType
     */
    public $FolderId;

    /**
     * DistinguishedFolderId property
     *
     * @var DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;
}
