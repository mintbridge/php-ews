<?php
/**
 * Definition of the FreeBusyViewOptionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the FreeBusyViewOptionsType type
 */
class FreeBusyViewOptionsType extends Type
{
    /**
     * TimeWindow property
     *
     * @var Duration
     */
    public $TimeWindow;

    /**
     * MergedFreeBusyIntervalInMinutes property
     *
     * @var integer
     */
    public $MergedFreeBusyIntervalInMinutes;

    /**
     * RequestedView property
     *
     * @var FreeBusyViewType
     */
    public $RequestedView;
}
