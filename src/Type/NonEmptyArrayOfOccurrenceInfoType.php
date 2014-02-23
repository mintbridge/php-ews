<?php
/**
 * Definition of the NonEmptyArrayOfOccurrenceInfoType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfOccurrenceInfoType type
 */
class NonEmptyArrayOfOccurrenceInfoType extends Type
{
    /**
     * Occurrence property
     *
     * @var OccurrenceInfoType
     */
    public $Occurrence;
}
