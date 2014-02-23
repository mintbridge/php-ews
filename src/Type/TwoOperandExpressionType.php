<?php
/**
 * Definition of the TwoOperandExpressionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the TwoOperandExpressionType type
 */
class TwoOperandExpressionType extends Type
{
    /**
     * Path property
     *
     * @var BasePathToElementType
     */
    public $Path;

    /**
     * FieldURIOrConstant property
     *
     * @var FieldURIOrConstantType
     */
    public $FieldURIOrConstant;
}
