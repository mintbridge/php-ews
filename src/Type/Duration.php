<?php
/**
 * Definition of the Duration type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the Duration type
 */
class Duration extends Type
{
    /**
     * StartTime property
     *
     * @var dateTime
     */
    public $StartTime;

    /**
     * EndTime property
     *
     * @var dateTime
     */
    public $EndTime;
}
