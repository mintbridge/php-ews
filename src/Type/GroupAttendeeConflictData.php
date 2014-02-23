<?php
/**
 * Definition of the GroupAttendeeConflictData type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the GroupAttendeeConflictData type
 */
class GroupAttendeeConflictData extends Type
{
    /**
     * NumberOfMembers property
     *
     * @var integer
     */
    public $NumberOfMembers;

    /**
     * NumberOfMembersAvailable property
     *
     * @var integer
     */
    public $NumberOfMembersAvailable;

    /**
     * NumberOfMembersWithConflict property
     *
     * @var integer
     */
    public $NumberOfMembersWithConflict;

    /**
     * NumberOfMembersWithNoData property
     *
     * @var integer
     */
    public $NumberOfMembersWithNoData;
}
