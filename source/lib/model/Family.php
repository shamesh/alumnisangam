<?php

/**
 * Subclass for representing a row from the 'family' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Family extends BaseFamily
{
	public function getDom(){
		return User::getPrivacyenabledvalue($this->domflag, $this->dom, $this->id);
	}
	
	public function getSpousename(){
		return User::getPrivacyenabledvalue($this->spousenameflag, $this->spousename, $this->id);
	}
	
	public function getSpouseemployer(){
		return User::getPrivacyenabledvalue($this->spouseemployerflag, $this->spouseemployer, $this->id);
	}
	
	public function getSpousetitle(){
		return User::getPrivacyenabledvalue($this->spousetitleflag, $this->spousetitle, $this->id);
	}
	
	public function getChildren(){
		return User::getPrivacyenabledvalue($this->childrenflag, $this->children, $this->id);
	}
	
	/*protected function getPrivacyenabledvalue($flag, $value){
		$visitorid = sfContext::getInstance()->getUser()->getAttribute('userid');
		$visitor = UserPeer::retrieveByPK($visitorid);
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
	}*/
}
