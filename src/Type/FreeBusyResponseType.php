<?php
/**
 * Definition of the FreeBusyResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the FreeBusyResponseType type
 */
class FreeBusyResponseType extends Type
{
    /**
     * ResponseMessage property
     *
     * @var ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * FreeBusyView property
     *
     * @var FreeBusyView
     */
    public $FreeBusyView;
}
