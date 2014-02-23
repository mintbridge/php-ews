<?php
/**
 * Definition of the GroupByType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the GroupByType type
 */
class GroupByType extends Type
{
    /**
     * FieldURI property
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * IndexedFieldURI property
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * ExtendedFieldURI property
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * AggregateOn property
     *
     * @var AggregateOnType
     */
    public $AggregateOn;

    /**
     * Order property
     *
     * @var SortDirectionType
     */
    public $Order;
}
