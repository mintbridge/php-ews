<?php
/**
 * Definition of the ResolveNamesResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the ResolveNamesResponseMessageType type
 */
class ResolveNamesResponseMessageType extends Type
{
    /**
     * ResolutionSet property
     *
     * @var ArrayOfResolutionType
     */
    public $ResolutionSet;
}
