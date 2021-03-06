<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_FacebookPlugin
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\FacebookPlugin\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class TrueFalse
 * @package Mageplaza\FacebookPlugin\Model\Config\Source
 */
class TrueFalse implements ArrayInterface
{
    /**
     * to option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [
            [
                'value' => 'false',
                'label' => __('No')
            ],
            [
                'value' => 'true',
                'label' => __('Yes')
            ]
        ];

        return $options;
    }
}
