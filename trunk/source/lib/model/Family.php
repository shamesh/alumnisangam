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
		return $this->getPrivacyenabledvalue($this->domflag, $this->dom);
	}
	
	public function getSpousename(){
		return $this->getPrivacyenabledvalue($this->spousenameflag, $this->spousename);
	}
	
	public function getSpouseemployer(){
		return $this->getPrivacyenabledvalue($this->spouseemployerflag, $this->spouseemployer);
	}
	
	public function getSpousetitle(){
		return $this->getPrivacyenabledvalue($this->spousetitleflag, $this->spousetitle);
	}
	
	public function getChildren(){
		return $this->getPrivacyenabledvalue($this->childrenflag, $this->children);
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
