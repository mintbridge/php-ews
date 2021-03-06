<?php
/**
 * The Period element defines the name, time offset, and unique identifier for a
 * specific stage of the time zone.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfPeriodsType type.
 */
class NonEmptyArrayOfPeriodsType extends Type
{
    /**
     * The name, time offset, and unique identifier for a specific stage of the
     * time zone.
     *
     * @var PeriodType
     */
    public $Period;
}
