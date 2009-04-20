<?php

/**
 * Subclass for representing a row from the 'address' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Address extends BaseAddress
{
	public function getAddress(){
		return $this->getPrivacyenabledvalue($this->addressflag, $this->address);
	}

	public function getCity(){
		return $this->getPrivacyenabledvalue($this->cityflag, $this->city);
	}
	
	public function getState(){
		return $this->getPrivacyenabledvalue($this->stateflag, $this->state);
	}
	
	public function getCountry(){
		return $this->getPrivacyenabledvalue($this->countryflag, $this->country);
	}
	public function getPostalcode(){
		return $this->getPrivacyenabledvalue($this->postalcodeflag, $this->postalcode);
	}

	public function getPhone1(){
		return $this->getPrivacyenabledvalue($this->phone1flag, $this->phone1);
	}
	
	public function getPhone2(){
		return $this->getPrivacyenabledvalue($this->phone2flag, $this->phone2);
	}
	
	public function getCellphone(){
		return $this->getPrivacyenabledvalue($this->cellphoneflag, $this->cellphone);
	}
	
	public function getFax(){
		return $this->getPrivacyenabledvalue($this->faxflag, $this->fax);
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
