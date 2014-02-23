<?php
/**
 * Definition of the BaseSubscriptionRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the BaseSubscriptionRequestType type
 */
class BaseSubscriptionRequestType extends Type
{
    /**
     * FolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * EventTypes property
     *
     * @var NonEmptyArrayOfNotificationEventTypesType
     */
    public $EventTypes;

    /**
     * Watermark property
     *
     * @var WatermarkType
     */
    public $Watermark;
}
