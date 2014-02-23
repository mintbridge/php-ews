<?php
/**
 * Definition of the DelegatePermissionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the DelegatePermissionsType type
 */
class DelegatePermissionsType extends Type
{
    /**
     * CalendarFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $CalendarFolderPermissionLevel;

    /**
     * TasksFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $TasksFolderPermissionLevel;

    /**
     * InboxFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $InboxFolderPermissionLevel;

    /**
     * ContactsFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $ContactsFolderPermissionLevel;

    /**
     * NotesFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $NotesFolderPermissionLevel;

    /**
     * JournalFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $JournalFolderPermissionLevel;
}
