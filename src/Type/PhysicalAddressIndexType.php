<?php
/**
 * Definition of the PhysicalAddressIndexType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the PhysicalAddressIndexType type
 */
class PhysicalAddressIndexType extends Type
{
    /**
     * Address index for business.
     *
     * @var string
     */
    const BUSINESS = 'Business';

    /**
     * Address index for home.
     *
     * @var string
     */
    const HOME = 'Home';

    /**
     * Address index for none.
     *
     * @var string
     */
    const NONE = 'None';

    /**
     * Address index for other.
     *
     * @var string
     */
    const OTHER = 'Other';
}
