<?php
/**
 * Definition of the NonEmptyArrayOfDeletedOccurrencesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfDeletedOccurrencesType type
 */
class NonEmptyArrayOfDeletedOccurrencesType extends Type
{
    /**
     * DeletedOccurrence property
     *
     * @var DeletedOccurrenceInfoType
     */
    public $DeletedOccurrence;
}
