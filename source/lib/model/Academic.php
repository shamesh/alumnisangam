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
		return $this->getPrivacyenabledvalue($this->degreeflag, $this->degree);
	}
	
	public function getYear(){
		return $this->getPrivacyenabledvalue($this->yearflag, $this->year);
	}
	
	public function getDepartment(){
		return $this->getPrivacyenabledvalue($this->departmentflag, $this->department);
	}
	
	public function getMajor(){
		return $this->getPrivacyenabledvalue($this->majorflag, $this->major);
	}
	
	public function getInstitute(){
		return $this->getPrivacyenabledvalue($this->instituteflag, $this->institute);
	}
	
	protected function getPrivacyenabledvalue($flag, $value){
		$visitorid = sfContext::getInstance()->getUser()->getAttribute('userid');
		if($visitorid == $this->id){
			return $value;
		}else{
			switch ($flag){
				case 1 : return sfConfig::get('app_privacy_message'); break;
				case 2 : $c = new Criteria();
						 $c->add(UserPeer::ID, $this->id);
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
	}
}
