<?php
/**
 * Definition of the NonEmptyArrayOfInternetHeadersType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfInternetHeadersType type
 */
class NonEmptyArrayOfInternetHeadersType extends Type
{
    /**
     * InternetMessageHeader property
     *
     * @var InternetHeaderType
     */
    public $InternetMessageHeader;
}
