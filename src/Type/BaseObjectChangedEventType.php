<?php
/**
 * Definition of the BaseObjectChangedEventType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the BaseObjectChangedEventType type
 */
class BaseObjectChangedEventType extends Type
{
    /**
     * TimeStamp property
     *
     * @var dateTime
     */
    public $TimeStamp;

    /**
     * FolderId property
     *
     * @var FolderIdType
     */
    public $FolderId;

    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * ParentFolderId property
     *
     * @var FolderIdType
     */
    public $ParentFolderId;
}
