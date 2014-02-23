<?php
/**
 * Definition of the NotificationType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NotificationType type
 */
class NotificationType extends Type
{
    /**
     * SubscriptionId property
     *
     * @var SubscriptionIdType
     */
    public $SubscriptionId;

    /**
     * PreviousWatermark property
     *
     * @var WatermarkType
     */
    public $PreviousWatermark;

    /**
     * MoreEvents property
     *
     * @var boolean
     */
    public $MoreEvents;

    /**
     * CopiedEvent property
     *
     * @var MovedCopiedEventType
     */
    public $CopiedEvent;

    /**
     * CreatedEvent property
     *
     * @var BaseObjectChangedEventType
     */
    public $CreatedEvent;

    /**
     * DeletedEvent property
     *
     * @var BaseObjectChangedEventType
     */
    public $DeletedEvent;

    /**
     * ModifiedEvent property
     *
     * @var ModifiedEventType
     */
    public $ModifiedEvent;

    /**
     * MovedEvent property
     *
     * @var MovedCopiedEventType
     */
    public $MovedEvent;

    /**
     * NewMailEvent property
     *
     * @var BaseObjectChangedEventType
     */
    public $NewMailEvent;

    /**
     * StatusEvent property
     *
     * @var BaseNotificationEventType
     */
    public $StatusEvent;
}
