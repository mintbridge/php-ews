<?php
/**
 * Definition of the GetDelegateType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the GetDelegateType type
 */
class GetDelegateType extends Type
{
    /**
     * UserIds property
     *
     * @var ArrayOfUserIdType
     */
    public $UserIds;

    /**
     * IncludePermissions property
     *
     * @var boolean
     */
    public $IncludePermissions;
}
