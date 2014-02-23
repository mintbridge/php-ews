<?php
/**
 * Definition of the CalendarViewType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the CalendarViewType type
 */
class CalendarViewType extends Type
{
    /**
     * StartDate property
     *
     * @var dateTime
     */
    public $StartDate;

    /**
     * EndDate property
     *
     * @var dateTime
     */
    public $EndDate;
}
