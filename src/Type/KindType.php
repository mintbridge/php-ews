<?php
/**
 * Definition of the KindType type.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the KindType type.
 */
class KindType extends Type
{
    /**
     * Specifies that the time zone transition target is a time zone period.
     *
     * @var string
     */
    const PERIOD = 'Period';

    /**
     * Specifies that the time zone transition target is a group of time zone
     * transitions.
     *
     * @var string
     */
    const GROUP = 'Group';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
