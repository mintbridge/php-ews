<?php
/**
 * Definition of the IndexedPageViewType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the IndexedPageViewType type
 */
class IndexedPageViewType extends Type
{
    /**
     * Offset property
     *
     * @var integer
     */
    public $Offset;

    /**
     * BasePoint property
     *
     * @var IndexBasePointType
     */
    public $BasePoint;
}
