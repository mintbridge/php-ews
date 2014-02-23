<?php
/**
 * Definition of the GroupedItemsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the GroupedItemsType type
 */
class GroupedItemsType extends Type
{
    /**
     * GroupIndex property
     *
     * @var string
     */
    public $GroupIndex;

    /**
     * Items property
     *
     * @var ArrayOfRealItemsType
     */
    public $Items;
}
