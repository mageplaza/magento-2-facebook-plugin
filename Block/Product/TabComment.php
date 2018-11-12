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

namespace Mageplaza\FacebookWidget\Block\Product;


use Magento\Framework\Locale\Resolver;
use Magento\Framework\View\Element\Template;
use Mageplaza\FacebookWidget\Block\Facebook;
use Mageplaza\FacebookWidget\Helper\Data as helperData;
use Magento\Framework\Registry;

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

    public function __construct(
        Template\Context $context,
        helperData $helperData,
        Resolver $resolver,
        Registry $registry,
        array $data = []
    )
    {
        $this->registry = $registry;
        parent::__construct($context, $helperData, $resolver, $data);
        $this->setTabTitle();
    }

    /**
     * set Tab Name
     */
    public function setTabTitle()
    {
        $options = $this->helperData->getFbCommentsConfig();
        $title    = __(isset($options['title']) ? $options['title'] : self::TITLE);
        $this->setTitle($title);
    }

    public function isEnabled()
    {
        $product = $this->registry->registry('current_product');
        if ($this->helperData->isEnabled() && $this->helperData->isEnabledFbComments() && $product->getMpFacebookComments() == 0) {
            return true;
        }

        return false;
    }

}