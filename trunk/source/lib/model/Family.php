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
		return User::getPrivacyenabledvalue($this->domflag, $this->dom, $this->user_id);
	}
	
	public function getSpousename(){
		return User::getPrivacyenabledvalue($this->spousenameflag, $this->spousename, $this->user_id);
	}
	
	public function getSpouseemployer(){
		return User::getPrivacyenabledvalue($this->spouseemployerflag, $this->spouseemployer, $this->user_id);
	}
	
	public function getSpousetitle(){
		return User::getPrivacyenabledvalue($this->spousetitleflag, $this->spousetitle, $this->user_id);
	}
	
	public function getChildren(){
		return User::getPrivacyenabledvalue($this->childrenflag, $this->children, $this->user_id);
	}
	
}
