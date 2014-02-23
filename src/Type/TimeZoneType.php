<?php
/**
 * Definition of the TimeZoneType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the TimeZoneType type
 */
class TimeZoneType extends Type
{
    /**
     * BaseOffset property
     *
     * @var duration
     */
    public $BaseOffset;

    /**
     * Standard property
     *
     * @var TimeChangeType
     */
    public $Standard;

    /**
     * Daylight property
     *
     * @var TimeChangeType
     */
    public $Daylight;

    /**
     * TimeZoneName property
     *
     * @var string
     */
    public $TimeZoneName;
}
