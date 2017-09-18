<?php
/**
 *
 * This source file is subject to the Ecommerce Shift Software License, which is available at http://ecommerceshift.ru/common/license-commercial.txt.
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 *
 * NOTICE OF LICENSE
 *
 * You may not sell, sub-license, rent or lease
 * any portion of the Software or Documentation to anyone.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade to newer
 * versions in the future.
 *
 * @category   Eshift
 * @package    Eshift_Oneclickorder
 * @copyright  Copyright (c) 2013 Ecommerce Shift (http://ecommerceshift.ru/)
 * @contacts   support@ecommerceshift.ru
 * @license    http://ecommerceshift.ru/common/license-commercial.txt
 */

class Eshift_Oneclickorder_Helper_Data extends Mage_Core_Helper_Abstract
{

    const XML_PATH_ENABLED   = 'oneclickorder/oneclickorder/enabled';
    const XML_PATH_NAME_ENABLED     = 'oneclickorder/form/name_enabled';
    const XML_PATH_TIME_ENABLED     = 'oneclickorder/form/time_enabled';
    const XML_PATH_COMMENT_ENABLED  = 'oneclickorder/form/comment_enabled';
    const XML_PATH_ADDRESS_ENABLED  = 'oneclickorder/form/address_enabled';
    const XML_PATH_PHONE_BIG  = 'oneclickorder/button/phone_big';
    const XML_PATH_PHONE_SMALL  = 'oneclickorder/button/phone_small';
    const XML_PATH_JQUERY_POPUP_WIDTH  = 'oneclickorder/popup/popup_width';
    const XML_PATH_JQUERY_POPUP_HEIGHT  = 'oneclickorder/popup/popup_height';
    const XML_PATH_BUTTON_BTN_TYPE  = 'oneclickorder/button/btn_type';
    const XML_PATH_BUTTON_BTN_TEXT  = 'oneclickorder/button/btn_text';
    const XML_PATH_BUTTON_FREE_POS  = 'oneclickorder/button/btn_free_position';
    const XML_PATH_BUTTON_CART_POS  = 'oneclickorder/button/btn_cart_position';
    const XML_PATH_BUTTON_LEFT_POS  = 'oneclickorder/button/btn_left_position';
    const XML_PATH_BUTTON_RIGHT_POS  = 'oneclickorder/button/btn_right_position';
    const XML_PATH_BUTTON_CUSTOM_CSS  = 'oneclickorder/button/btn_custom_css';
    const XML_PATH_FORM_TITLE  = 'oneclickorder/form/title';
	const XML_PATH_FORM_ANTISPAM  = 'oneclickorder/form/antispam';

    public function isEnabled()
    {
        return Mage::getStoreConfig( self::XML_PATH_ENABLED );
    }

    public function getUserName()
    {
        if (!Mage::getSingleton('customer/session')->isLoggedIn()) {
            return '';
        }
        $customer = Mage::getSingleton('customer/session')->getCustomer();
        return trim($customer->getName());
    }

    public function getUserEmail()
    {
        if (!Mage::getSingleton('customer/session')->isLoggedIn()) {
            return '';
        }
        $customer = Mage::getSingleton('customer/session')->getCustomer();
        return $customer->getEmail();
    }
    
     public function isNameEnabled()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_NAME_ENABLED);
    }
    
    public function isTimeEnabled()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_TIME_ENABLED);
    }
    
    public function isAddressEnabled()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_ADDRESS_ENABLED);
    }
    
    public function isCommentEnabled()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_COMMENT_ENABLED);
    }

    public function getBtnType()
    {
        return Mage::getStoreConfig(self::XML_PATH_BUTTON_BTN_TYPE);
    }

    public function getBtnText()
    {
        return $this->__(Mage::getStoreConfig(self::XML_PATH_BUTTON_BTN_TEXT));
    }
    
    public function showFormTitle()
    {
        return $this->__(Mage::getStoreConfig(self::XML_PATH_FORM_TITLE));
    }
    
    public function isInsertManually()
    {
        return Mage::getStoreConfig(self::XML_PATH_BUTTON_FREE_POS);
    }
    
    public function isInsertCart()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_BUTTON_CART_POS);
    }
    
    public function isInsertLeft()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_BUTTON_LEFT_POS);
    }
    
    public function isInsertRight()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_BUTTON_RIGHT_POS);
    }
    
    public function getCustomCss()
    {
        return Mage::getStoreConfig(self::XML_PATH_BUTTON_CUSTOM_CSS);
    }
    
    public function getPopupWidth()
    {
            $popup_width = Mage::getStoreConfig(self::XML_PATH_JQUERY_POPUP_WIDTH);

        return $popup_width;
    }
    
    public function getPopupHeight()
    {
            $popup_height = Mage::getStoreConfig(self::XML_PATH_JQUERY_POPUP_HEIGHT);
        
        return $popup_height;
    }

	 public function getFormAntispam()
    {
        return $this->__(Mage::getStoreConfig(self::XML_PATH_FORM_ANTISPAM));
    }
	
}
