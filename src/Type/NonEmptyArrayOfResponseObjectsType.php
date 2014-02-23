<?php
/**
 * Definition of the NonEmptyArrayOfResponseObjectsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfResponseObjectsType type
 */
class NonEmptyArrayOfResponseObjectsType extends Type
{
    /**
     * AcceptItem property
     *
     * @var AcceptItemType
     */
    public $AcceptItem;

    /**
     * TentativelyAcceptItem property
     *
     * @var TentativelyAcceptItemType
     */
    public $TentativelyAcceptItem;

    /**
     * DeclineItem property
     *
     * @var DeclineItemType
     */
    public $DeclineItem;

    /**
     * ReplyToItem property
     *
     * @var ReplyToItemType
     */
    public $ReplyToItem;

    /**
     * ForwardItem property
     *
     * @var ForwardItemType
     */
    public $ForwardItem;

    /**
     * ReplyAllToItem property
     *
     * @var ReplyAllToItemType
     */
    public $ReplyAllToItem;

    /**
     * CancelCalendarItem property
     *
     * @var CancelCalendarItemType
     */
    public $CancelCalendarItem;

    /**
     * RemoveItem property
     *
     * @var RemoveItemType
     */
    public $RemoveItem;

    /**
     * SuppressReadReceipt property
     *
     * @var SuppressReadReceiptType
     */
    public $SuppressReadReceipt;

    /**
     * PostReplyItem property
     *
     * @var PostReplyItemType
     */
    public $PostReplyItem;
}
