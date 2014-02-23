<?php
/**
 * Definition of the CreateItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the CreateItemType type
 */
class CreateItemType extends Type
{
    /**
     * SavedItemFolderId property
     *
     * @var TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * Items property
     *
     * @var NonEmptyArrayOfAllItemsType
     */
    public $Items;

    /**
     * MessageDisposition property
     *
     * @var MessageDispositionType
     */
    public $MessageDisposition;

    /**
     * SendMeetingInvitations property
     *
     * @var CalendarItemCreateOrDeleteOperationType
     */
    public $SendMeetingInvitations;
}
