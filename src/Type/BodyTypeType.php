<?php
/**
 * Definition of the BodyTypeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the BodyTypeType type
 */
class BodyTypeType extends Type
{
    /**
     * HTML body type.
     *
     * @var string
     */
    const HTML = 'HTML';

    /**
     * Text body type.
     *
     * @var string
     */
    const TEXT = 'Text';
}
