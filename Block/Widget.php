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

namespace Mageplaza\FacebookPlugin\Block;

use Mageplaza\FacebookPlugin\Model\Config\Source\Options;

/**
 * Class Widget
 * @package Mageplaza\FacebookPlugin\Block
 */
class Widget extends Facebook
{
    /**
     * @var string
     */
    protected $_template = "facebookpage.phtml";

    /**
     * Retrieve all options for Facebook page
     */
    public function getAllOptions()
    {
        $option = $this->getData('options');
        if ($option == Options::CONFIG) {
            $this->setData(array_merge($this->helperData->getFbPageConfig(), $this->getData()));
        }
    }

    /**
     * Retrieve Facebook Url
     *
     * @return mixed|string
     */
    public function getFacebookUrl()
    {
        $url = $this->getData('options') == Options::CUSTOM ? $this->getData('url') : $this->helperData->getUrlConfig();
        if ($url && strpos($url, 'http') === false) {
            $url = 'https://' . $url;
        }

        return $url;
    }
}
