<?php
/**
 * Definition of the EmailAddress type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the EmailAddress type
 */
class EmailAddress extends Type
{
    /**
     * Name property
     *
     * @var string
     */
    public $Name;

    /**
     * Address property
     *
     * @var string
     */
    public $Address;

    /**
     * RoutingType property
     *
     * @var string
     */
    public $RoutingType;
}
