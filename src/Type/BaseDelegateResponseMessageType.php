<?php
/**
 * Definition of the BaseDelegateResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the BaseDelegateResponseMessageType type
 */
class BaseDelegateResponseMessageType extends Type
{
    /**
     * ResponseMessages property
     *
     * @var ArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;
}
