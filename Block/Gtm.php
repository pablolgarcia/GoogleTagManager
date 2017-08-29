<?php
/**
 * Created by PhpStorm.
 * Company: Rapicart
 * Web: https://www.rapicart.com
 * User: Pablo Garcia
 * Email: pablo.garcia@rapicart.com
 * Date: 29/08/17
 * Time: 14:27
 */

namespace Rapicart\GoogleTagManager\Block;

class Gtm extends \Magento\Framework\View\Element\Template
{
    /** @var \Rapicart\GoogleTagManager\Helper\Data  */
    private $_helper;

    /**
     * Gtm constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Rapicart\GoogleTagManager\Helper\Data $helper
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Rapicart\GoogleTagManager\Helper\Data $helper
    )
    {
        $this->_helper = $helper;

        parent::__construct($context);
    }

    /**
     * Get Account Id
     * @return string
     */
    public function getAccountId(){
        return $this->_helper->getAccountId();
    }

    /**
     * Validate if extension is enabled
     * @return string
     */
    protected function _toHtml()
    {
        if ($this->_helper->getEnable() && $this->_helper->getAccountId()){
            return parent::_toHtml();
        }
        else {
            return '';
        }
    }
}