<?php
/**
 * Definition of the FindItemResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the FindItemResponseMessageType type
 */
class FindItemResponseMessageType extends Type
{
    /**
     * RootFolder property
     *
     * @var FindItemParentType
     */
    public $RootFolder;
}
