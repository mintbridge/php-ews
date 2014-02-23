<?php
/**
 * Definition of the PushSubscriptionRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the PushSubscriptionRequestType type
 */
class PushSubscriptionRequestType extends Type
{
    /**
     * StatusFrequency property
     *
     * @var SubscriptionStatusFrequencyType
     */
    public $StatusFrequency;

    /**
     * URL property
     *
     * @var string
     */
    public $URL;
}
