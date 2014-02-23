<?php
/**
 * Definition of the NonEmptyArrayOfAttendeesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfAttendeesType type
 */
class NonEmptyArrayOfAttendeesType extends Type
{
    /**
     * Attendee property
     *
     * @var AttendeeType
     */
    public $Attendee;
}
