<?php
/**
 * Definition of the ConnectingSIDType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the ConnectingSIDType type
 */
class ConnectingSIDType extends Type
{
    /**
     * PrincipalName property
     *
     * @var string
     */
    public $PrincipalName;

    /**
     * SID property
     *
     * @var string
     */
    public $SID;

    /**
     * PrimarySmtpAddress property
     *
     * @var string
     */
    public $PrimarySmtpAddress;
}
