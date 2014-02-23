<?php
/**
 * Definition of the SerializableTimeZoneTime type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SerializableTimeZoneTime type
 */
class SerializableTimeZoneTime extends Type
{
    /**
     * Bias property
     *
     * @var integer
     */
    public $Bias;

    /**
     * Time property
     *
     * @var string
     */
    public $Time;

    /**
     * DayOrder property
     *
     * @var integer
     */
    public $DayOrder;

    /**
     * Month property
     *
     * @var integer
     */
    public $Month;

    /**
     * DayOfWeek property
     *
     * @var DayOfWeekType
     */
    public $DayOfWeek;

    /**
     * Year property
     *
     * @var string
     */
    public $Year;
}
