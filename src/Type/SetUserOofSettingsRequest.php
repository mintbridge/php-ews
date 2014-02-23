<?php
/**
 * Definition of the SetUserOofSettingsRequest type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SetUserOofSettingsRequest type
 */
class SetUserOofSettingsRequest extends Type
{
    /**
     * Mailbox property
     *
     * @var EmailAddress
     */
    public $Mailbox;

    /**
     * UserOofSettings property
     *
     * @var UserOofSettings
     */
    public $UserOofSettings;
}
