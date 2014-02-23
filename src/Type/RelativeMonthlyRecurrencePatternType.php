<?php
/**
 * Definition of the RelativeMonthlyRecurrencePatternType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the RelativeMonthlyRecurrencePatternType type
 */
class RelativeMonthlyRecurrencePatternType extends Type
{
    /**
     * DaysOfWeek property
     *
     * @var DayOfWeekType
     */
    public $DaysOfWeek;

    /**
     * DayOfWeekIndex property
     *
     * @var DayOfWeekIndexType
     */
    public $DayOfWeekIndex;
}
