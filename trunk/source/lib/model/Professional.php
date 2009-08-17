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
		return User::getPrivacyenabledvalue($this->employerflag, $this->employer, $this->user_id);
	}
	
	public function getPosotion(){
		return User::getPrivacyenabledvalue($this->positionflag, $this->position, $this->user_id);
	}
	
}
