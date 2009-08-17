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
		return User::getPrivacyenabledvalue($this->degreeflag, $this->degree, $this->user_id);
	}
	
	public function getYear(){
		return User::getPrivacyenabledvalue($this->yearflag, $this->year, $this->user_id);
	}
	
	public function getDepartment(){
		return User::getPrivacyenabledvalue($this->departmentflag, $this->department, $this->user_id);
	}
	
	public function getMajor(){
		return User::getPrivacyenabledvalue($this->majorflag, $this->major, $this->user_id);
	}
	
	public function getInstitute(){
		return User::getPrivacyenabledvalue($this->instituteflag, $this->institute, $this->user_id);
	}
	
}
