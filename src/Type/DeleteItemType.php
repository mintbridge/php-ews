<?php
/**
 * Definition of the DeleteItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the DeleteItemType type
 */
class DeleteItemType extends Type
{
    /**
     * ItemIds property
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * DeleteType property
     *
     * @var DisposalType
     */
    public $DeleteType;

    /**
     * SendMeetingCancellations property
     *
     * @var CalendarItemCreateOrDeleteOperationType
     */
    public $SendMeetingCancellations;

    /**
     * AffectedTaskOccurrences property
     *
     * @var AffectedTaskOccurrencesType
     */
    public $AffectedTaskOccurrences;
}
