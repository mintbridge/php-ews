<?php
/**
 * Definition of the PostReplyItemBaseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the PostReplyItemBaseType type
 */
class PostReplyItemBaseType extends Type
{
    /**
     * Subject property
     *
     * @var string
     */
    public $Subject;

    /**
     * Body property
     *
     * @var BodyType
     */
    public $Body;

    /**
     * ReferenceItemId property
     *
     * @var ItemIdType
     */
    public $ReferenceItemId;

    /**
     * ObjectName property
     *
     * @var string
     */
    public $ObjectName;
}
