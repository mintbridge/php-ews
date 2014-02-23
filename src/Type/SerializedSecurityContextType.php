<?php
/**
 * Definition of the SerializedSecurityContextType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the SerializedSecurityContextType type
 */
class SerializedSecurityContextType extends Type
{
    /**
     * UserSid property
     *
     * @var string
     */
    public $UserSid;

    /**
     * GroupSids property
     *
     * @var NonEmptyArrayOfGroupIdentifiersType
     */
    public $GroupSids;

    /**
     * RestrictedGroupSids property
     *
     * @var NonEmptyArrayOfRestrictedGroupIdentifiersType
     */
    public $RestrictedGroupSids;

    /**
     * PrimarySmtpAddress property
     *
     * @var string
     */
    public $PrimarySmtpAddress;
}
