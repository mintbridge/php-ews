<?php
/**
 * Definition of the UpdateItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the UpdateItemType type
 */
class UpdateItemType extends Type
{
    /**
     * SavedItemFolderId property
     *
     * @var TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * ItemChanges property
     *
     * @var NonEmptyArrayOfItemChangesType
     */
    public $ItemChanges;

    /**
     * ConflictResolution property
     *
     * @var ConflictResolutionType
     */
    public $ConflictResolution;

    /**
     * MessageDisposition property
     *
     * @var MessageDispositionType
     */
    public $MessageDisposition;

    /**
     * SendMeetingInvitationsOrCancellations property
     *
     * @var CalendarItemUpdateOperationType
     */
    public $SendMeetingInvitationsOrCancellations;
}
