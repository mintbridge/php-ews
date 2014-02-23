<?php
/**
 * Definition of the SyncFolderItemsChangesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SyncFolderItemsChangesType type
 */
class SyncFolderItemsChangesType extends Type
{
    /**
     * Create property
     *
     * @var SyncFolderItemsCreateOrUpdateType
     */
    public $Create;

    /**
     * Update property
     *
     * @var SyncFolderItemsCreateOrUpdateType
     */
    public $Update;

    /**
     * Delete property
     *
     * @var SyncFolderItemsDeleteType
     */
    public $Delete;

    /**
     * ReadFlagChange property
     *
     * @var SyncFolderItemsReadFlagType
     */
    public $ReadFlagChange;
}
