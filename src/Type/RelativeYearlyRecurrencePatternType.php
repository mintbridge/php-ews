<?php
/**
 * Definition of the RelativeYearlyRecurrencePatternType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the RelativeYearlyRecurrencePatternType type
 */
class RelativeYearlyRecurrencePatternType extends Type
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

    /**
     * Month property
     *
     * @var MonthNamesType
     */
    public $Month;
}
