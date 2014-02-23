<?php
/**
 * Definition of the UserIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the UserIdType type
 */
class UserIdType extends Type
{
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

    /**
     * DisplayName property
     *
     * @var string
     */
    public $DisplayName;

    /**
     * DistinguishedUser property
     *
     * @var DistinguishedUserType
     */
    public $DistinguishedUser;
}
