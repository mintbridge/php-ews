<?php
/**
 * Definition of the GetUserOofSettingsRequest type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the GetUserOofSettingsRequest type
 */
class GetUserOofSettingsRequest extends Type
{
    /**
     * Mailbox property
     *
     * @var EmailAddress
     */
    public $Mailbox;
}
