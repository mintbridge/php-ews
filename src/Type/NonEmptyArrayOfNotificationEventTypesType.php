<?php
/**
 * Definition of the NonEmptyArrayOfNotificationEventTypesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfNotificationEventTypesType type
 */
class NonEmptyArrayOfNotificationEventTypesType extends Type
{
    /**
     * EventType property
     *
     * @var NotificationEventTypeType
     */
    public $EventType;
}
