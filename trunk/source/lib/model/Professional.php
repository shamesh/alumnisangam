<?php

/**
 * Subclass for representing a row from the 'professional' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Professional extends BaseProfessional
{
	public function getEmployer(){
		return $this->getPrivacyenabledvalue($this->employerflag, $this->employer);
	}
	
	public function getPosotion(){
		return $this->getPrivacyenabledvalue($this->positionflag, $this->position);
	}
	
	protected function getPrivacyenabledvalue($flag, $value){
		$visitorid = sfContext::getInstance()->getUser()->getAttribute('userid');
		if($visitorid == $this->user_id){
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
