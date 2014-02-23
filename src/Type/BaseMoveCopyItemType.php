<?php
/**
 * Definition of the BaseMoveCopyItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the BaseMoveCopyItemType type
 */
class BaseMoveCopyItemType extends Type
{
    /**
     * ToFolderId property
     *
     * @var TargetFolderIdType
     */
    public $ToFolderId;

    /**
     * ItemIds property
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
}
