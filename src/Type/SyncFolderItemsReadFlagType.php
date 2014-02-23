<?php
/**
 * Definition of the SyncFolderItemsReadFlagType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SyncFolderItemsReadFlagType type
 */
class SyncFolderItemsReadFlagType extends Type
{
    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * IsRead property
     *
     * @var boolean
     */
    public $IsRead;
}
