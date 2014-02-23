<?php
/**
 * Definition of the SerializableTimeZone type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SerializableTimeZone type
 */
class SerializableTimeZone extends Type
{
    /**
     * Bias property
     *
     * @var integer
     */
    public $Bias;

    /**
     * StandardTime property
     *
     * @var SerializableTimeZoneTime
     */
    public $StandardTime;

    /**
     * DaylightTime property
     *
     * @var SerializableTimeZoneTime
     */
    public $DaylightTime;
}
