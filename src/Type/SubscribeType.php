<?php
/**
 * Definition of the SubscribeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SubscribeType type
 */
class SubscribeType extends Type
{
    /**
     * PullSubscriptionRequest property
     *
     * @var PullSubscriptionRequestType
     */
    public $PullSubscriptionRequest;

    /**
     * PushSubscriptionRequest property
     *
     * @var PushSubscriptionRequestType
     */
    public $PushSubscriptionRequest;
}
