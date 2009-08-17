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
		return User::getPrivacyenabledvalue($this->maidennameflag, $this->maidenname, $this->user_id);
	}
	
	public function getItbhuname(){
		return User::getPrivacyenabledvalue($this->itbhunameflag, $this->itbhuname, $this->user_id);
	}
	
	public function getGender(){
		return User::getPrivacyenabledvalue($this->genderflag, $this->gender, $this->user_id);
	}
	
	public function getDob(){
		$dob = User::getPrivacyenabledvalue($this->dobflag, $this->dob, $this->user_id);
		if($dob !== sfConfig::get('app_privacy_message')){
			return date('jS F', $dob);
		}else
		return $dob;
	}
	
	public function getMaritalstatus(){
		return User::getPrivacyenabledvalue($this->maritalstatusflag, $this->maritalstatus, $this->user_id);
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
		return User::getPrivacyenabledvalue($this->websiteflag, $this->website, $this->u);
	}
	
	public function getLinkedin(){
		return User::getPrivacyenabledvalue($this->linkedinflag, $this->linkedin, $this->user_id);
	}
	
	public function getHobbies(){
		return User::getPrivacyenabledvalue($this->hobbiesflag, $this->hobbies, $this->user_id);
	}
	
}
