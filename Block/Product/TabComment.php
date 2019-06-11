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

namespace Mageplaza\FacebookPlugin\Block\Product;

use Magento\Framework\Locale\Resolver;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;
use Mageplaza\FacebookPlugin\Block\Facebook;
use Mageplaza\FacebookPlugin\Helper\Data as helperData;

/**
 * Class TabComment
 * @package Mageplaza\FacebookPlugin\Block\Product
 */
class TabComment extends Facebook
{
    /**
     * Default title
     */
    const TITLE = 'Facebook comments';

    /**
     * @var \Magento\Framework\Registry
     */
    protected $registry;

    /**
     * TabComment constructor.
     *
     * @param Template\Context $context
     * @param helperData $helperData
     * @param Resolver $resolver
     * @param Registry $registry
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        helperData $helperData,
        Resolver $resolver,
        Registry $registry,
        array $data = []
    ) {
        $this->registry = $registry;

        parent::__construct($context, $helperData, $resolver, $data);

        $this->setTabTitle();
    }

    /**
     * Set Tab title
     */
    public function setTabTitle()
    {
        $options = $this->helperData->getFbCommentsConfig();
        $title = __(isset($options['title']) ? $options['title'] : self::TITLE);
        $this->setTitle($title);
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        $product = $this->registry->registry('current_product');

        return $this->helperData->isEnabled() &&
               $this->helperData->isEnabledFbComments() &&
               $product->getMpFacebookComments() == 0;
    }
}
