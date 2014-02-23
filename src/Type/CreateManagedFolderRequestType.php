<?php
/**
 * Definition of the CreateManagedFolderRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the CreateManagedFolderRequestType type
 */
class CreateManagedFolderRequestType extends Type
{
    /**
     * FolderNames property
     *
     * @var NonEmptyArrayOfFolderNamesType
     */
    public $FolderNames;

    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
