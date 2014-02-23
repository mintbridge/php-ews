<?php
/**
 * Definition of the SendItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SendItemType type
 */
class SendItemType extends Type
{
    /**
     * ItemIds property
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * SavedItemFolderId property
     *
     * @var TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * SaveItemToFolder property
     *
     * @var boolean
     */
    public $SaveItemToFolder;
}
