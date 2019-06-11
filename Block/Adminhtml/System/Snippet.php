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

namespace Mageplaza\FacebookPlugin\Block\Adminhtml\System;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

/**
 * Class Snippet
 * @package Mageplaza\FacebookPlugin\Block\Adminhtml\System
 */
class Snippet extends Field
{
    /**
     * @param AbstractElement $element
     *
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        $html = '<div class="control-value" style="padding-top: 8px; font-size: 11px"><p>';
        $html .= __('Use the following code to show facebook plugin in any places which you want.');
        $html .= '</p><strong>';

        $html .= __('CMS Page/Static Block');
        $html .= '</strong><br /><pre style="background-color: #f5f5dc"><code>{{block class="Mageplaza\FacebookPlugin\Block\Widget"}}</code></pre><strong>';

        $html .= __('Template .phtml file');
        $html .= '</strong><br /><pre style="background-color: #f5f5dc"><code>' . $this->_escaper->escapeHtml('<?php echo $block->getLayout()->createBlock("\Mageplaza\FacebookPlugin\Block\Widget::class")->toHtml();?>') . '</code></pre><strong>';

        $html .= __('Layout file');
        $html .= '</strong><br /><pre style="background-color: #f5f5dc"><code>' . $this->_escaper->escapeHtml('<block class="Mageplaza\FacebookPlugin\Block\Widget" name="fbwidget" />') . '</code></pre>';

        $html .= '</div>';

        return $html;
    }
}
