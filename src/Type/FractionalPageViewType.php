<?php
/**
 * Definition of the FractionalPageViewType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the FractionalPageViewType type
 */
class FractionalPageViewType extends Type
{
    /**
     * Numerator property
     *
     * @var integer
     */
    public $Numerator;

    /**
     * Denominator property
     *
     * @var integer
     */
    public $Denominator;
}
