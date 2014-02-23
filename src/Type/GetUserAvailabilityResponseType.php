<?php
/**
 * Definition of the GetUserAvailabilityResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the GetUserAvailabilityResponseType type
 */
class GetUserAvailabilityResponseType extends Type
{
    /**
     * FreeBusyResponseArray property
     *
     * @var ArrayOfFreeBusyResponse
     */
    public $FreeBusyResponseArray;

    /**
     * SuggestionsResponse property
     *
     * @var SuggestionsResponseType
     */
    public $SuggestionsResponse;
}
