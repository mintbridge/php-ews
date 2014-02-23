<?php
/**
 * Definition of the ContactSourceType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the ContactSourceType type
 */
class ContactSourceType extends Type
{
    /**
     * Contact is stored in Active Directory.
     *
     * @var string
     */
    const ACTIVE_DIRECTORY = 'ActiveDirectory';

    /**
     * Contact is stored in the Exchange Store.
     *
     * @var string
     */
    const EXCHANGE_STORE = 'Store';
}
