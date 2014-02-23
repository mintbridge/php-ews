<?php
/**
 * Definition of the GetFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the GetFolderType type
 */
class GetFolderType extends Type
{
    /**
     * FolderShape property
     *
     * @var FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * FolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
