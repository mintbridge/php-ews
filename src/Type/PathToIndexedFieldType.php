<?php
/**
 * Definition of the PathToIndexedFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the PathToIndexedFieldType type
 */
class PathToIndexedFieldType extends Type
{
    /**
     * FieldURI property
     *
     * @var DictionaryURIType
     */
    public $FieldURI;

    /**
     * FieldIndex property
     *
     * @var string
     */
    public $FieldIndex;
}
