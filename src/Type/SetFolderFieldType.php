<?php
/**
 * Definition of the SetFolderFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SetFolderFieldType type
 */
class SetFolderFieldType extends Type
{
    /**
     * Folder property
     *
     * @var FolderType
     */
    public $Folder;

    /**
     * CalendarFolder property
     *
     * @var CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * ContactsFolder property
     *
     * @var ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * SearchFolder property
     *
     * @var SearchFolderType
     */
    public $SearchFolder;

    /**
     * TasksFolder property
     *
     * @var TasksFolderType
     */
    public $TasksFolder;
}
