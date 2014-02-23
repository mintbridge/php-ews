<?php
/**
 * Definition of the WorkingPeriod type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the WorkingPeriod type
 */
class WorkingPeriod extends Type
{
    /**
     * DayOfWeek property
     *
     * @var DaysOfWeekType
     */
    public $DayOfWeek;

    /**
     * StartTimeInMinutes property
     *
     * @var integer
     */
    public $StartTimeInMinutes;

    /**
     * EndTimeInMinutes property
     *
     * @var integer
     */
    public $EndTimeInMinutes;
}
