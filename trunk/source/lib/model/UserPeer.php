<?php

/**
 * Subclass for performing query and update operations on the 'user' table.
 *
 *
 *
 * @package lib.model
 */
class UserPeer extends BaseUserPeer
{
	public function getAdminByCompanyid($companyid){
		$c = new Criteria();
		$c->add(UserPeer::COMPANY_ID,$companyid);
		$users = UserPeer::doSelect($c);
		foreach ($users as $user1) {
			$userrole=$user1->getUserRoles();
			$found=false;
			foreach ($userroles as $userrole) {
				if($userrole.getRole()->getName() == 'admin'){
					$found=true;break;
				}
			}
			if(found==true){
				return $user1;
			}
		}
		return null;
	}
	public function getSysadmin(){
		$c = new Criteria();
		$users = UserPeer::doSelect($c);
		foreach ($users as $user1) {
			$userrole=$user1->getUserRoles();
			$found=false;
			foreach ($userroles as $userrole) {
				if($userrole.getRole()->getName() == 'sysadmin'){
					$found=true;break;
				}
			}
			if(found==true){
				return $user1;
			}
		}
		return null;
	}
}
