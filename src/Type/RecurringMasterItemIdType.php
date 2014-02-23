<?php
/**
 * Definition of the RecurringMasterItemIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the RecurringMasterItemIdType type
 */
class RecurringMasterItemIdType extends Type
{
    /**
     * OccurrenceId property
     *
     * @var DerivedItemIdType
     */
    public $OccurrenceId;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;
}
