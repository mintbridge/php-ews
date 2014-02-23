<?php
/**
 * Definition of the UpdateItemResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the UpdateItemResponseMessageType type
 */
class UpdateItemResponseMessageType extends Type
{
    /**
     * ConflictResults property
     *
     * @var ConflictResultsType
     */
    public $ConflictResults;
}
