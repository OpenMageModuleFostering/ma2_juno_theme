<?php

class Ma2_ThemeOptions_Controller_Observer
{
	//Event: adminhtml_controller_action_predispatch_start
	public function overrideTheme()
	{
		Mage::getDesign()->setArea('adminhtml')
			->setTheme('ma2');
	}
}
