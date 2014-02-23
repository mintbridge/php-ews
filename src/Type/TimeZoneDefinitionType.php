<?php
/**
 * Defines a timezone.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the TimeZoneDefinitionType type.
 */
class TimeZoneDefinitionType extends Type
{
    /**
     * Unique identifier of the time zone definition.
     *
     * @var string
     */
    public $Id;

    /**
     * Descriptive name of the time zone definition.
     *
     * @var string
     */
    public $Name;

    /**
     * Array of Period elements that define the time offset at different stages
     * of the time zone.
     *
     * @var NonEmptyArrayOfPeriodsType
     */
    public $Periods;

    /**
     * Array of TransitionsGroup elements that specify time zone transitions.
     *
     * @var ArrayOfTransitionsGroupsType
     */
    public $TransitionsGroups;

    /**
     * Array of time zone transitions.
     *
     * @var ArrayOfTransitionsType
     */
    public $Transitions;
}
