<?php
/**
 * Definition of the AggregateOnType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the AggregateOnType type
 */
class AggregateOnType extends Type
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
     * Aggregate property
     *
     * @var AggregateType
     */
    public $Aggregate;
}
