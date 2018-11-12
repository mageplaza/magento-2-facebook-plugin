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

namespace Mageplaza\FacebookWidget\Block\Adminhtml\System;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Snippet extends Field
{
    /**
     * @param AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        $html = '<div class="control-value" style="padding-top: 8px">';
        $html .= '<p>Use following code to show facebook widget in any place which you want.</p>';

        $html .= '<strong>CMS Page/Static Block</strong><br />';
        $html .= '<pre style="background-color: #f5f5dc"><code>{{block class="Mageplaza\FacebookWidget\Block\Widget"}}</code></pre>';

        $html .= '<strong>Template .phtml file</strong><br />';
        $html .= '<pre style="background-color: #f5f5dc"><code>' . $this->_escaper->escapeHtml('<?php echo $block->getLayout()->createBlock(\Mageplaza\FacebookWidget\Block\Widget::class)
    ->toHtml();?>') . '</code></pre>';

        $html .= '<strong>Layout file</strong><br />';
        $html .= '<pre style="background-color: #f5f5dc"><code>' . $this->_escaper->escapeHtml('<block class="Mageplaza\FacebookWidget\Block\Widget" name="fbwidget" />') . '</code></pre>';

        $html .= '</div>';

        return $html;
    }
}