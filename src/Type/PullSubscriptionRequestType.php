<?php
/**
 * Definition of the PullSubscriptionRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the PullSubscriptionRequestType type
 */
class PullSubscriptionRequestType extends Type
{
    /**
     * Timeout property
     *
     * @var SubscriptionTimeoutType
     */
    public $Timeout;
}
