<?php
/**
 * Definition of the SyncFolderHierarchyResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SyncFolderHierarchyResponseMessageType type
 */
class SyncFolderHierarchyResponseMessageType extends Type
{
    /**
     * SyncState property
     *
     * @var string
     */
    public $SyncState;

    /**
     * IncludesLastFolderInRange property
     *
     * @var boolean
     */
    public $IncludesLastFolderInRange;

    /**
     * Changes property
     *
     * @var SyncFolderHierarchyChangesType
     */
    public $Changes;
}
