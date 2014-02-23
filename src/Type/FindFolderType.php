<?php
/**
 * Definition of the FindFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the FindFolderType type
 */
class FindFolderType extends Type
{
    /**
     * FolderShape property
     *
     * @var FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * IndexedPageFolderView property
     *
     * @var IndexedPageViewType
     */
    public $IndexedPageFolderView;

    /**
     * FractionalPageFolderView property
     *
     * @var FractionalPageViewType
     */
    public $FractionalPageFolderView;

    /**
     * Restriction property
     *
     * @var RestrictionType
     */
    public $Restriction;

    /**
     * ParentFolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;

    /**
     * Traversal property
     *
     * @var FolderQueryTraversalType
     */
    public $Traversal;
}
