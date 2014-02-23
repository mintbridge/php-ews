<?php
/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 */
class NonEmptyArrayOfItemChangeDescriptionsType extends Type
{
    /**
     * AppendToItemField property
     *
     * @var AppendToItemFieldType
     */
    public $AppendToItemField;

    /**
     * SetItemField property
     *
     * @var SetItemFieldType
     */
    public $SetItemField;

    /**
     * DeleteItemField property
     *
     * @var DeleteItemFieldType
     */
    public $DeleteItemField;
}
