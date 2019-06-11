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

namespace Mageplaza\FacebookPlugin\Helper;

use Mageplaza\Core\Helper\AbstractData;

/**
 * Class Data
 * @package Mageplaza\FacebookPlugin\Helper
 */
class Data extends AbstractData
{
    const CONFIG_MODULE_PATH = 'mpfbplugin';

    /**
     * Retrieve all the values in the configuration of the fb widget
     *
     * @param null $storeId
     *
     * @return mixed
     */
    public function getFbPageConfig($storeId = null)
    {
        return $this->getModuleConfig('fbpage', $storeId);
    }

    /**
     * @param null $storeId
     *
     * @return mixed
     */
    public function getUrlConfig($storeId = null)
    {
        return $this->getModuleConfig('fbpage/url', $storeId);
    }

    /**
     * @param null $storeId
     *
     * @return mixed
     */
    public function isEnabledFbPage($storeId = null)
    {
        return $this->getModuleConfig('fbpage/enabled', $storeId);
    }

    /**
     * Retrieve all the values in the configuration of the fb comments
     *
     * @param null $storeId
     *
     * @return mixed
     */
    public function getFbCommentsConfig($storeId = null)
    {
        return $this->getModuleConfig('fbcomments', $storeId);
    }

    /**
     * @param null $storeId
     *
     * @return mixed
     */
    public function isEnabledFbComments($storeId = null)
    {
        return $this->getModuleConfig('fbcomments/enabled', $storeId);
    }
}
