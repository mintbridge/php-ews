<?php
/**
 * Definition of the GetItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the GetItemType type
 */
class GetItemType extends Type
{
    /**
     * ItemShape property
     *
     * @var ItemResponseShapeType
     */
    public $ItemShape;

    /**
     * ItemIds property
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
}
