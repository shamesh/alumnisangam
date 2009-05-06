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
		return $this->getPrivacyenabledvalue($this->maidennameflag, $this->maidenname);
	}
	
	public function getItbhuname(){
		return $this->getPrivacyenabledvalue($this->itbhunameflag, $this->itbhuname);
	}
	
	public function getGender(){
		return $this->getPrivacyenabledvalue($this->genderflag, $this->gender);
	}
	
	public function getDob(){
		$dob = $this->getPrivacyenabledvalue($this->dobflag, $this->dob);
		if($dob !== sfConfig::get('app_privacy_message')){
			return date('jS F', $dob);
		}else
		return $dob;
	}
	
	public function getMaritalstatus(){
		return $this->getPrivacyenabledvalue($this->maritalstatusflag, $this->maritalstatus);
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
		return $this->getPrivacyenabledvalue($this->websiteflag, $this->website);
	}
	
	public function getLinkedin(){
		return $this->getPrivacyenabledvalue($this->linkedinflag, $this->linkedin);
	}
	
	public function getHobbies(){
		return $this->getPrivacyenabledvalue($this->hobbiesflag, $this->hobbies);
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
