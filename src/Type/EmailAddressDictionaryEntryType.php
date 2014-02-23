<?php
/**
 * Definition of the EmailAddressDictionaryEntryType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the EmailAddressDictionaryEntryType type
 */
class EmailAddressDictionaryEntryType extends Type
{
    /**
     * _ property
     *
     * @var string
     */
    public $_;

    /**
     * Key property
     *
     * @var EmailAddressKeyType
     */
    public $Key;
}
