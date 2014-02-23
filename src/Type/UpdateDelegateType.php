<?php
/**
 * Definition of the UpdateDelegateType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the UpdateDelegateType type
 */
class UpdateDelegateType extends Type
{
    /**
     * DelegateUsers property
     *
     * @var ArrayOfDelegateUserType
     */
    public $DelegateUsers;

    /**
     * DeliverMeetingRequests property
     *
     * @var DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;
}
