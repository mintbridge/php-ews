<?php
/**
 * Definition of the PostItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the PostItemType type
 */
class PostItemType extends Type
{
    /**
     * ConversationIndex property
     *
     * @var base64Binary
     */
    public $ConversationIndex;

    /**
     * ConversationTopic property
     *
     * @var string
     */
    public $ConversationTopic;

    /**
     * From property
     *
     * @var SingleRecipientType
     */
    public $From;

    /**
     * InternetMessageId property
     *
     * @var string
     */
    public $InternetMessageId;

    /**
     * IsRead property
     *
     * @var boolean
     */
    public $IsRead;

    /**
     * PostedTime property
     *
     * @var dateTime
     */
    public $PostedTime;

    /**
     * References property
     *
     * @var string
     */
    public $References;

    /**
     * Sender property
     *
     * @var SingleRecipientType
     */
    public $Sender;
}
