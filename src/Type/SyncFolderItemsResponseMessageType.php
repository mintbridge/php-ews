<?php
/**
 * Definition of the SyncFolderItemsResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SyncFolderItemsResponseMessageType type
 */
class SyncFolderItemsResponseMessageType extends Type
{
    /**
     * SyncState property
     *
     * @var string
     */
    public $SyncState;

    /**
     * IncludesLastItemInRange property
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * Changes property
     *
     * @var SyncFolderItemsChangesType
     */
    public $Changes;
}
