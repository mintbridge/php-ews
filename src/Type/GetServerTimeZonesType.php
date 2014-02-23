<?php
/**
 * Definition of the GetServerTimeZonesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the GetServerTimeZonesType type
 */
class GetServerTimeZonesType extends Type
{
    /**
     * Collection of timezone identifiers to get the definition for. Omit to get
     * the definition of all timezones supported by the server.
     *
     * @var NonEmptyArrayOfTimeZoneIdType
     */
    public $Ids;
}
