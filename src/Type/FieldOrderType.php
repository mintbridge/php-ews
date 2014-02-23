<?php
/**
 * Definition of the FieldOrderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the FieldOrderType type
 */
class FieldOrderType extends Type
{
    /**
     * Path property
     *
     * @var BasePathToElementType
     */
    public $Path;

    /**
     * Order property
     *
     * @var SortDirectionType
     */
    public $Order;
}
