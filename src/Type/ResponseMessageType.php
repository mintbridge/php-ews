<?php
/**
 * Definition of the ResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the ResponseMessageType type
 */
class ResponseMessageType extends Type
{
    /**
     * MessageText property
     *
     * @var string
     */
    public $MessageText;

    /**
     * ResponseCode property
     *
     * @var ResponseCodeType
     */
    public $ResponseCode;

    /**
     * DescriptiveLinkKey property
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * MessageXml property
     *
     * @var MessageXml
     */
    public $MessageXml;

    /**
     * ResponseClass property
     *
     * @var ResponseClassType
     */
    public $ResponseClass;
}
