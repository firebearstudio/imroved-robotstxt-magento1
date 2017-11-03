<?php
/**
 * Firebear ImprovedRobots Module
 *
 * @category    Firebear
 * @package     Firebear_ImprovedRobots
 * @copyright   Copyright (c) 2014 Firebear
 * @author      biotech (Hlupko Viktor)
 */

/**
 *
 *
 * @category    Firebear
 * @package     Firebear_ImprovedRobots
 */
 
class Firebear_ImprovedRobots_Block_Adminhtml_System_Config_Form_Button extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    /*
     * Set template
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('firebear/improvedrobots/system/config/button.phtml');
    }
 
    /**
     * Return element html
     *
     * @param  Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        return $this->_toHtml();
    }
 
    /**
     * Generate button html
     *
     * @return string
     */
    public function getButtonHtml()
    {
        $button = $this->getLayout()->createBlock('adminhtml/widget_button')
            ->setData(array(
            'id'        => 'improvedrobots_button',
            'label'     => $this->helper('adminhtml')->__('Check & load current settings'),
            'onclick'   => 'javascript:check(); return false;'
        ));
 
        return $button->toHtml();
    }

}