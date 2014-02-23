<?php
/**
 * Definition of the SuggestionDayResult type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SuggestionDayResult type
 */
class SuggestionDayResult extends Type
{
    /**
     * Date property
     *
     * @var dateTime
     */
    public $Date;

    /**
     * DayQuality property
     *
     * @var SuggestionQuality
     */
    public $DayQuality;

    /**
     * SuggestionArray property
     *
     * @var ArrayOfSuggestion
     */
    public $SuggestionArray;
}
