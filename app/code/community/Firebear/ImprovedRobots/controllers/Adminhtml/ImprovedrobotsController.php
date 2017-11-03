<?php
/**
 * Firebear ImprovedRobots Module
 *
 * @category    Firebear
 * @package     Firebear_ImprovedRobots
 * @copyright   Copyright (c) 2013 Firebear
 * @author      biotech (Hlupko Viktor)
 */

/**
 *
 *
 * @category    Firebear
 * @package     Firebear_ImprovedRobots
 */

class Firebear_ImprovedRobots_Adminhtml_ImprovedrobotsController extends Mage_Adminhtml_Controller_Action
{
	public function saveAction()
	{
		
		$path = BP . DS;
		$filepath= $path.'/robots.txt';
		$folderwrite=is_writable($path); 
		$write=is_writable($filepath);

		if (file_exists($filepath)):
			if($folderwrite):
				if($write):
					$content=$this->getRequest()->getParam('improvedrobotscontent');
					$filename='robots.txt';
					$create = fopen($filename, "w");
					file_put_contents($filename, $content);
					$close = fclose($create); 
					Mage::app()->getResponse()->setBody(1);
				else:
					Mage::app()->getResponse()->setBody(2);
				endif;
			else:
				Mage::app()->getResponse()->setBody(3);
			endif; 
		else:
		    if($folderwrite):
				
					$content=$this->getRequest()->getParam('improvedrobotscontent');
					$filename='robots.txt';
					$create = fopen($filename, "w");
					file_put_contents($filename, $content);
					$close = fclose($create); 
					Mage::app()->getResponse()->setBody(1);
				
			else:
				Mage::app()->getResponse()->setBody(3);
			endif; 
		endif;
		
		
	}
	
	public function loadAction()
	{
		
		$path = BP . DS;
		$filepath= $path.'/robots.txt';
		$folderwrite=is_writable($path); 
		$write=is_writable($filepath);

		if (file_exists($filepath)):
			if($folderwrite):
				if($write):
					$content=Mage::helper('improvedrobots')->getRobots();
					$filename='robots.txt';
					$create = fopen($filename, "w");
					file_put_contents($filename, $content);
					$close = fclose($create); 
					Mage::app()->getResponse()->setBody(1);
				else:
					Mage::app()->getResponse()->setBody(2);
				endif;
			else:
				Mage::app()->getResponse()->setBody(3);
			endif; 
		else:
		    if($folderwrite):
				
					$content=Mage::helper('improvedrobots')->getRobots();
					$filename='robots.txt';
					$create = fopen($filename, "w");
					file_put_contents($filename, $content);
					$close = fclose($create); 
					Mage::app()->getResponse()->setBody(1);
				
			else:
				Mage::app()->getResponse()->setBody(3);
			endif; 
		endif;
		
		
	}
}
