<?php
/**
 * Definition of the OccurrenceInfoType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the OccurrenceInfoType type
 */
class OccurrenceInfoType extends Type
{
    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * Start property
     *
     * @var dateTime
     */
    public $Start;

    /**
     * End property
     *
     * @var dateTime
     */
    public $End;

    /**
     * OriginalStart property
     *
     * @var dateTime
     */
    public $OriginalStart;
}
