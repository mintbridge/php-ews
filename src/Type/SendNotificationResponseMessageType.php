<?php
/**
 * Definition of the SendNotificationResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SendNotificationResponseMessageType type
 */
class SendNotificationResponseMessageType extends Type
{
    /**
     * Notification property
     *
     * @var NotificationType
     */
    public $Notification;
}
