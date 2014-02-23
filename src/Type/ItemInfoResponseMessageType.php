<?php
/**
 * Definition of the ItemInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the ItemInfoResponseMessageType type
 */
class ItemInfoResponseMessageType extends Type
{
    /**
     * Items property
     *
     * @var ArrayOfRealItemsType
     */
    public $Items;
}
