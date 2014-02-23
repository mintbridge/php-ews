<?php
/**
 * Definition of the RecurrenceType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the RecurrenceType type
 */
class RecurrenceType extends Type
{
    /**
     * RelativeYearlyRecurrence property
     *
     * @var RelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;

    /**
     * AbsoluteYearlyRecurrence property
     *
     * @var AbsoluteYearlyRecurrencePatternType
     */
    public $AbsoluteYearlyRecurrence;

    /**
     * RelativeMonthlyRecurrence property
     *
     * @var RelativeMonthlyRecurrencePatternType
     */
    public $RelativeMonthlyRecurrence;

    /**
     * AbsoluteMonthlyRecurrence property
     *
     * @var AbsoluteMonthlyRecurrencePatternType
     */
    public $AbsoluteMonthlyRecurrence;

    /**
     * WeeklyRecurrence property
     *
     * @var WeeklyRecurrencePatternType
     */
    public $WeeklyRecurrence;

    /**
     * DailyRecurrence property
     *
     * @var DailyRecurrencePatternType
     */
    public $DailyRecurrence;

    /**
     * NoEndRecurrence property
     *
     * @var NoEndRecurrenceRangeType
     */
    public $NoEndRecurrence;

    /**
     * EndDateRecurrence property
     *
     * @var EndDateRecurrenceRangeType
     */
    public $EndDateRecurrence;

    /**
     * NumberedRecurrence property
     *
     * @var NumberedRecurrenceRangeType
     */
    public $NumberedRecurrence;
}
