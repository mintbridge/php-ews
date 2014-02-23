<?php
/**
 * Definition of the DistributionListType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the DistributionListType type
 */
class DistributionListType extends Type
{
    /**
     * DisplayName property
     *
     * @var string
     */
    public $DisplayName;

    /**
     * FileAs property
     *
     * @var string
     */
    public $FileAs;

    /**
     * ContactSource property
     *
     * @var ContactSourceType
     */
    public $ContactSource;
}
