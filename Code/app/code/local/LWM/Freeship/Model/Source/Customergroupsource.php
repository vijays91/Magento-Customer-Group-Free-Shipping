<?php
/**
 * @author VIJAYAKUMAR S
 * @copyright Copyright (c) 2018
 * @package LWM_Freeship
 */
 
class LWM_Freeship_Model_Source_Customergroupsource
{
    public function toOptionArray()
    {
		$customer_group = new Mage_Customer_Model_Group();
		$allGroups  = $customer_group->getCollection()->toOptionHash();
		foreach($allGroups as $key => $allGroup){
			$customerGroup[$key]=array('value' => $key, 'label' => $allGroup);
		}
        return $customerGroup;
    }
}
