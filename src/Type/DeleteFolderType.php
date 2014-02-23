<?php
/**
 * Definition of the DeleteFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the DeleteFolderType type
 */
class DeleteFolderType extends Type
{
    /**
     * FolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * DeleteType property
     *
     * @var DisposalType
     */
    public $DeleteType;
}
