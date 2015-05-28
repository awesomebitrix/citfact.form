<?php

/*
 * This file is part of the Studio Fact package.
 *
 * (c) Kulichkin Denis (onEXHovia) <onexhovia@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Citfact\Form\View\Type\IBlock;

class CheckboxType extends BaseIBlockType
{
    /**
     * @inheritdoc
     */
    public function detected()
    {
        // For default fields
        if (isset($this->field['FIELD_TYPE']) && $this->field['FIELD_TYPE'] == 'checkbox') {
            return true;
        }

        if ($this->field['PROPERTY_TYPE'] == 'L' && $this->field['LIST_TYPE'] == 'C' && $this->field['MULTIPLE'] == 'Y') {
            return true;
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'checkbox';
    }
}
