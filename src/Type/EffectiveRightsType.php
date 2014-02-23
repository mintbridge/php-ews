<?php
/**
 * Definition of the EffectiveRightsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace JamesIArmes\ExchangeWebServices\Type;

use JamesIArmes\ExchangeWebServices\Type;

/**
 * Definition of the EffectiveRightsType type
 */
class EffectiveRightsType extends Type
{
    /**
     * CreateAssociated property
     *
     * @var boolean
     */
    public $CreateAssociated;

    /**
     * CreateContents property
     *
     * @var boolean
     */
    public $CreateContents;

    /**
     * CreateHierarchy property
     *
     * @var boolean
     */
    public $CreateHierarchy;

    /**
     * Delete property
     *
     * @var boolean
     */
    public $Delete;

    /**
     * Modify property
     *
     * @var boolean
     */
    public $Modify;

    /**
     * Read property
     *
     * @var boolean
     */
    public $Read;
}
