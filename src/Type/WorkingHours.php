<?php
/**
 * Definition of the WorkingHours type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the WorkingHours type
 */
class WorkingHours extends Type
{
    /**
     * TimeZone property
     *
     * @var SerializableTimeZone
     */
    public $TimeZone;

    /**
     * WorkingPeriodArray property
     *
     * @var ArrayOfWorkingPeriod
     */
    public $WorkingPeriodArray;
}
