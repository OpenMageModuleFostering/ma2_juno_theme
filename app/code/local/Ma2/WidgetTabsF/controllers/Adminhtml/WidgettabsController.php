<?php
/**
 * MagenMarket.com
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Edit or modify this file with yourown risk.
 *
 * @category    Extensions
 * @package     Ma2_WidgetTabsF
 * @copyright   Copyright (c) 2013 MagenMarket. (http://www.magenmarket.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
**/
/* $Id: WidgettabsController.php 8 2013-11-05 07:29:49Z linhnt $ */

class Ma2_WidgetTabsF_Adminhtml_WidgettabsController extends Mage_Adminhtml_Controller_Action
{
    public function saveAction()
    {
       $tabs = $this->getRequest()->getPost('tabs');		
       $newTabs = array();       
       foreach($tabs as $tab)
       {
            if(trim($tab["title"]) != "" && trim($tab["text"]) != "")
            {
                $newTabs[] = $tab;   
            } 
       }
       echo json_encode($newTabs);
    }    
}
?>