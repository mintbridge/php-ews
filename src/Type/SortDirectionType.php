<?php
/**
 * Definition of the SortDirectionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Sort order specification
 */
class SortDirectionType extends Type
{
    /**
     * Items are sorted in ascending order
     *
     * @var string
     */
    const ASCENDING = 'Ascending';

    /**
     * Items are sorted in descending order
     *
     * @var string
     */
    const DESCENDING = 'Descending';
}
