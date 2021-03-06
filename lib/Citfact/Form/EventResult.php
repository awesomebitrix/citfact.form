<?php

/*
 * This file is part of the Studio Fact package.
 *
 * (c) Kulichkin Denis (onEXHovia) <onexhovia@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Citfact\Form;

use Bitrix\Main\EventResult as BaseEventResult;

class EventResult extends BaseEventResult
{
    /**
     * @var array
     */
    protected $modified = array();

    /**
     * @var array
     */
    protected $unset = array();

    /**
     * Construct object.
     */
    public function __construct()
    {
        parent::__construct(parent::SUCCESS, $parameters = null, $moduleId = null, $handler = null);
    }

    /**
     * Sets the array of fields to modify data in the Bitrix\Main\Entity\Event.
     *
     * @param array $fields
     */
    public function modifyFields(array $fields)
    {
        $this->modified = $fields;
    }

    /**
     * @return array
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Sets the array of fields names to unset data in the Bitrix\Main\Entity\Event.
     *
     * @param array $fields
     */
    public function unsetFields(array $fields)
    {
        $this->unset = $fields;
    }

    /**
     * @param string $fieldName
     */
    public function unsetField($fieldName)
    {
        $this->unset[] = $fieldName;
    }

    /**
     * @return array
     */
    public function getUnset()
    {
        return $this->unset;
    }
}
