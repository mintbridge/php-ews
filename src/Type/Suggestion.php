<?php
/**
 * Definition of the Suggestion type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the Suggestion type
 */
class Suggestion extends Type
{
    /**
     * MeetingTime property
     *
     * @var dateTime
     */
    public $MeetingTime;

    /**
     * IsWorkTime property
     *
     * @var boolean
     */
    public $IsWorkTime;

    /**
     * SuggestionQuality property
     *
     * @var SuggestionQuality
     */
    public $SuggestionQuality;

    /**
     * AttendeeConflictDataArray property
     *
     * @var ArrayOfAttendeeConflictData
     */
    public $AttendeeConflictDataArray;
}
