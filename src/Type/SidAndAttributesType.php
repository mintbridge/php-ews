<?php
/**
 * Definition of the SidAndAttributesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SidAndAttributesType type
 */
class SidAndAttributesType extends Type
{
    /**
     * SecurityIdentifier property
     *
     * @var string
     */
    public $SecurityIdentifier;

    /**
     * Attributes property
     *
     * @var unsignedInt
     */
    public $Attributes;
}
