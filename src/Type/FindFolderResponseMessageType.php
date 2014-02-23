<?php
/**
 * Definition of the FindFolderResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the FindFolderResponseMessageType type
 */
class FindFolderResponseMessageType extends Type
{
    /**
     * RootFolder property
     *
     * @var FindFolderParentType
     */
    public $RootFolder;
}
