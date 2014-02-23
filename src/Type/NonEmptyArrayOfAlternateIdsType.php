<?php
/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 */
class NonEmptyArrayOfAlternateIdsType extends Type
{
    /**
     * AlternateId property
     *
     * @var AlternateIdType
     */
    public $AlternateId;

    /**
     * AlternatePublicFolderId property
     *
     * @var AlternatePublicFolderIdType
     */
    public $AlternatePublicFolderId;

    /**
     * AlternatePublicFolderItemId property
     *
     * @var AlternatePublicFolderItemIdType
     */
    public $AlternatePublicFolderItemId;
}
