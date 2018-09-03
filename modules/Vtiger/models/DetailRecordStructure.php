<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

/**
 * Vtiger Detail View Record Structure Model
 */
class Vtiger_DetailRecordStructure_Model extends Vtiger_RecordStructure_Model {

	private $picklistValueMap = array();
	private $picklistRoleMap = array();

	/**
	 * Function to get the values in stuctured format
	 * @return <array> - values in structure array('block'=>array(fieldinfo));
	 */
	public function getStructure() {
		$currentUsersModel = Users_Record_Model::getCurrentUserModel();
		if(!empty($this->structuredValues)) {
			return $this->structuredValues;
		}
        #filter group 
		#$log = LoggerManager::getLogger('SECURITY');
		global $adb;

		$currentUser = Users_Record_Model::getCurrentUserModel();
        $current_user_role_id = $currentUser->getRole();
        $is_admin = $currentUser->isAdminUser();
        #filter group end

		$values = array();
		$recordModel = $this->getRecord();
		$recordExists = !empty($recordModel);
		$moduleModel = $this->getModule();
		$blockModelList = $moduleModel->getBlocks();
		foreach($blockModelList as $blockLabel=>$blockModel) {
			$fieldModelList = $blockModel->getFields();
			if (!empty ($fieldModelList)) {
				$values[$blockLabel] = array();
				foreach($fieldModelList as $fieldName=>$fieldModel) {
					#filter by groupid start
                   $groupid = $fieldModel->get('groupid');
		           if($groupid > 0){
		           	   $query = "select * from vtiger_groups where groupid=?";
		               $result = $adb->pquery($query, array($groupid));
		               $num_rows = $adb->num_rows($result);
		              if($num_rows > 0 && !$is_admin){   // not admin & group exists,limit effective
                        //Retreiving from the vtiger_group2rs
		                $allow_display = false;
		                $query = "select * from vtiger_group2rs where groupid=?";
		                $result = $adb->pquery($query, array($groupid));
		                $num_rows = $adb->num_rows($result);
		                for ($i = 0; $i < $num_rows; $i++) {
			               $now_rs_id = $adb->query_result($result, $i, 'roleandsubid');
			               if($now_rs_id == $current_user_role_id){
			          	     $allow_display = true;
			          	     break;
			               }
		                }
		                if(!$allow_display){
		            	   #$log->debug('not allow display');
		            	   continue;
		                }
		              }
		          }
				   #filter by groupid end
					if($fieldModel->isViewableInDetailView()) {
						if($recordExists) {
							$value = $recordModel->get($fieldName);
							if(!$currentUsersModel->isAdminUser() && ($fieldModel->getFieldDataType() == 'picklist' || $fieldModel->getFieldDataType() == 'multipicklist')) {
								$value = decode_html($value);
								$this->setupAccessiblePicklistValueList($fieldName);
								if($fieldModel->getFieldDataType() == 'picklist') {
									if ($value != '' && $this->picklistRoleMap[$fieldName] && !in_array($value, $this->picklistValueMap[$fieldName]) && strtolower($value) != '--none--' && strtolower($value) != 'none' ) {
										$value = "<font color='red'>". vtranslate('LBL_NOT_ACCESSIBLE',
										$moduleModel->getName())."</font>";
									}
								}
								if($fieldModel->getFieldDataType() == 'multipicklist') {
									if (!$currentUsersModel->isAdminUser() && $value != '') {
										$valueArray = ($value != "") ? explode(' |##| ', $value) : array();
										$notaccess = '<font color="red">'.vtranslate('LBL_NOT_ACCESSIBLE', $moduleModel->getName())."</font>";
										$tmp = '';
										$tmpArray = array();
										foreach ($valueArray as $val) {
											if (!$currentUsersModel->isAdminUser() && $this->picklistRoleMap[$fieldName] && !in_array(trim($val), $this->picklistValueMap[$fieldName])) {
													$tmpArray[] = $notaccess;
													$tmp .= ', '.$notaccess;
												} else {
													$tmpArray[] = $val;
													$tmp .= ', '.$val;
												}
										}
										$value = implode(' |##| ', $tmpArray);
									}
								}
							} 
							$fieldModel->set('fieldvalue', $value);
						}
						$values[$blockLabel][$fieldName] = $fieldModel;
					}
				}
			}
		}
		$this->structuredValues = $values;
		return $values;
	}

	public function setupAccessiblePicklistValueList($name) {
		$db = PearDatabase::getInstance();
		$currentUsersModel = Users_Record_Model::getCurrentUserModel();
		$roleId = $currentUsersModel->getRole();
		$isRoleBased = vtws_isRoleBasedPicklist($name);
		$this->picklistRoleMap[$name] = $isRoleBased;
		if ($this->picklistRoleMap[$name]) {
			$this->picklistValueMap[$name] = getAssignedPicklistValues($name, $roleId, $db);
		}
	}

}