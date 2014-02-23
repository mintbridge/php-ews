<?php
/**
 * Definition of the DelegateUserType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the DelegateUserType type
 */
class DelegateUserType extends Type
{
    /**
     * UserId property
     *
     * @var UserIdType
     */
    public $UserId;

    /**
     * DelegatePermissions property
     *
     * @var DelegatePermissionsType
     */
    public $DelegatePermissions;

    /**
     * ReceiveCopiesOfMeetingMessages property
     *
     * @var boolean
     */
    public $ReceiveCopiesOfMeetingMessages;

    /**
     * ViewPrivateItems property
     *
     * @var boolean
     */
    public $ViewPrivateItems;
}
