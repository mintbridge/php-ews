<?php
/**
 * Definition of the FolderResponseShapeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the FolderResponseShapeType type
 */
class FolderResponseShapeType extends Type
{
    /**
     * BaseShape property
     *
     * @var DefaultShapeNamesType
     */
    public $BaseShape;

    /**
     * AdditionalProperties property
     *
     * @var NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
}
