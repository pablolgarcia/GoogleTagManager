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

namespace Rapicart\GoogleTagManager\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    CONST ENABLE      = 'rapicart_googletagmanager/general/enable';
    CONST ACCOUNT_ID = 'rapicart_googletagmanager/general/account_id';

    /**
     * Data constructor.
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * Get config enable value
     * @return bool
     */
    public function getEnable(){
        return $this->scopeConfig->getValue(self::ENABLE);
    }

    /**
     * Get config account id value
     * @return string
     */
    public function getAccountId(){
        return $this->scopeConfig->getValue(self::ACCOUNT_ID);
    }
}

