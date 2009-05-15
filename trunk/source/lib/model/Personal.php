<?php

/**
 * Subclass for representing a row from the 'personal' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Personal extends BasePersonal
{
	public function getImage(){
		if($this->image){
			return $this->image;
		}else{
			return sfConfig::get('app_profile_dummyimage');
		}
	}
	
	public function getMaidenname(){
		return User::getPrivacyenabledvalue($this->maidennameflag, $this->maidenname, $this->id);
	}
	
	public function getItbhuname(){
		return User::getPrivacyenabledvalue($this->itbhunameflag, $this->itbhuname, $this->id);
	}
	
	public function getGender(){
		return User::getPrivacyenabledvalue($this->genderflag, $this->gender, $this->id);
	}
	
	public function getDob(){
		$dob = User::getPrivacyenabledvalue($this->dobflag, $this->dob, $this->id);
		if($dob !== sfConfig::get('app_privacy_message')){
			return date('jS F', $dob);
		}else
		return $dob;
	}
	
	public function getMaritalstatus(){
		return User::getPrivacyenabledvalue($this->maritalstatusflag, $this->maritalstatus, $this->id);
	}
	
	public function getEmail(){
		/*$visitorid = sfContext::getInstance()->getUser()->getAttribute('userid');
		if($visitorid == $this->id){*/
			return $this->email;
		/*}elseif(sfContext::getInstance()->getUser()->hasCredential('admin')){
			return $this->email;
		}else{
			return sfConfig::get('app_privacy_message');
		}*/
	}
	
	public function getWebsite(){
		return User::getPrivacyenabledvalue($this->websiteflag, $this->website, $this->id);
	}
	
	public function getLinkedin(){
		return User::getPrivacyenabledvalue($this->linkedinflag, $this->linkedin, $this->id);
	}
	
	public function getHobbies(){
		return User::getPrivacyenabledvalue($this->hobbiesflag, $this->hobbies, $this->id);
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
