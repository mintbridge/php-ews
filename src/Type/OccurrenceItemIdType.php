<?php
/**
 * Definition of the OccurrenceItemIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the OccurrenceItemIdType type
 */
class OccurrenceItemIdType extends Type
{
    /**
     * RecurringMasterId property
     *
     * @var DerivedItemIdType
     */
    public $RecurringMasterId;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;

    /**
     * InstanceIndex property
     *
     * @var integer
     */
    public $InstanceIndex;
}
