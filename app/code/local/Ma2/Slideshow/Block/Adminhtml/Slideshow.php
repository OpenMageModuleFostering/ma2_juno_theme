<?php

class Ma2_Slideshow_Block_Adminhtml_Slideshow extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_slideshow';
    $this->_blockGroup = 'slideshow';
    $this->_headerText = Mage::helper('slideshow')->__('Items Manager');
    $this->_addButtonLabel = Mage::helper('slideshow')->__('Add Item');
    parent::__construct();
  }
}