<?php
/**
 * Definition of the NonEmptyArrayOfItemChangesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfItemChangesType type
 */
class NonEmptyArrayOfItemChangesType extends Type
{
    /**
     * ItemChange property
     *
     * @var ItemChangeType
     */
    public $ItemChange;
}
