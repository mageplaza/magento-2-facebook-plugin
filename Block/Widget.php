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
 * @package     Mageplaza_FacebookWidget
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */
namespace Mageplaza\FacebookWidget\Block;

class Widget extends Facebook
{
    protected $_template = "facebookwidget.phtml";

    public function getAllOptions() {
        $option = $this->getData('options');
        if ($option == 0) {
            $this->setData(array_merge($this->helperData->getFbWidgetConfig(),$this->getData()));
        }
    }

    /**
     * Retrieve Facebook Url
     *
     * @return mixed|string
     */
    public function getFacebookUrl() {
        $url = $this->getData('options') == 1 ? $this->getData('url') : $this->helperData->getUrlConfig();
        if ($url && strpos($url,'http') === false) {
            $url = 'https://'.$url;
        }

        return $url;
    }
}