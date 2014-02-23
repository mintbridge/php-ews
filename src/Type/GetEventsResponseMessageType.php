<?php
/**
 * Definition of the GetEventsResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the GetEventsResponseMessageType type
 */
class GetEventsResponseMessageType extends Type
{
    /**
     * Notification property
     *
     * @var NotificationType
     */
    public $Notification;
}
