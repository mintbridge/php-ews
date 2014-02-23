<?php
/**
 * Definition of the SyncFolderItemsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SyncFolderItemsType type
 */
class SyncFolderItemsType extends Type
{
    /**
     * ItemShape property
     *
     * @var ItemResponseShapeType
     */
    public $ItemShape;

    /**
     * SyncFolderId property
     *
     * @var TargetFolderIdType
     */
    public $SyncFolderId;

    /**
     * SyncState property
     *
     * @var string
     */
    public $SyncState;

    /**
     * Ignore property
     *
     * @var ArrayOfBaseItemIdsType
     */
    public $Ignore;

    /**
     * MaxChangesReturned property
     *
     * @var MaxSyncChangesReturnedType
     */
    public $MaxChangesReturned;
}
