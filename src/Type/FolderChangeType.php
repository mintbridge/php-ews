<?php
/**
 * Definition of the FolderChangeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the FolderChangeType type
 */
class FolderChangeType extends Type
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

    /**
     * Updates property
     *
     * @var NonEmptyArrayOfFolderChangeDescriptionsType
     */
    public $Updates;
}
