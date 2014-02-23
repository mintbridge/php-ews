<?php
/**
 * Definition of the GetEventsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the GetEventsType type
 */
class GetEventsType extends Type
{
    /**
     * SubscriptionId property
     *
     * @var SubscriptionIdType
     */
    public $SubscriptionId;

    /**
     * Watermark property
     *
     * @var WatermarkType
     */
    public $Watermark;
}
