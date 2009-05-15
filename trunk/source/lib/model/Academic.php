<?php

/**
 * Subclass for representing a row from the 'academic' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Academic extends BaseAcademic
{
	public function getDegree(){
		return User::getPrivacyenabledvalue($this->degreeflag, $this->degree, $this->id);
	}
	
	public function getYear(){
		return User::getPrivacyenabledvalue($this->yearflag, $this->year, $this->id);
	}
	
	public function getDepartment(){
		return User::getPrivacyenabledvalue($this->departmentflag, $this->department, $this->id);
	}
	
	public function getMajor(){
		return User::getPrivacyenabledvalue($this->majorflag, $this->major, $this->id);
	}
	
	public function getInstitute(){
		return User::getPrivacyenabledvalue($this->instituteflag, $this->institute, $this->id);
	}
	
	/*public function getPrivacyenabledvalue($flag, $value, $thisid){
		$visitorid = sfContext::getInstance()->getUser()->getAttribute('userid');
		$visitor = UserPeer::retrieveByPK($visitorid);
		$c = new Criteria();
		$c->add(UserrolePeer::USER_ID, $visitorid);
		$c->add(UserrolePeer::ROLE_ID, sfConfig::get('app_role_admin'));
		$isadmin = UserrolePeer::doSelectOne($c);
		if( ($visitorid == $thisid) || $isadmin ) {
			return $value;
		}else{
			switch ($flag){
				case 1 : return sfConfig::get('app_privacy_message'); break;
				case 2 : $c = new Criteria();
						 $c->add(UserPeer::ID, $thisid);
						 $c->addJoin(UserPeer::ID, UserfriendPeer::USER_ID);
						 $c->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
						 $c->add(FriendPeer::USER_ID, $visitorid);
						 $frienduser = UserPeer::doSelectOne($c); 
						 if($frienduser){
						 	return $value;
						 }else{
						 	return sfConfig::get('app_privacy_message');
						 }
						break;
				case 3 : if($visitorid){
							return $value;
						}else{
							return sfConfig::get('app_privacy_message');
						}
						break;
				case 4 : return $value; break;
				default: return $value;
			}
		}
	}*/
}
