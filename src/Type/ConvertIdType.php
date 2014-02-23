<?php
/**
 * Definition of the ConvertIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the ConvertIdType type
 */
class ConvertIdType extends Type
{
    /**
     * SourceIds property
     *
     * @var NonEmptyArrayOfAlternateIdsType
     */
    public $SourceIds;

    /**
     * DestinationFormat property
     *
     * @var IdFormatType
     */
    public $DestinationFormat;
}
