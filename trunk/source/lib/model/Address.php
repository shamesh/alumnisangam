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
		return User::getPrivacyenabledvalue($this->addressflag, $this->address, $this->user_id);
	}

	public function getCity(){
		return User::getPrivacyenabledvalue($this->cityflag, $this->city, $this->user_id);
	}
	
	public function getState(){
		return User::getPrivacyenabledvalue($this->stateflag, $this->state, $this->user_id);
	}
	
	public function getCountry(){
		return User::getPrivacyenabledvalue($this->countryflag, $this->country, $this->user_id);
	}
	public function getPostalcode(){
		return User::getPrivacyenabledvalue($this->postalcodeflag, $this->postalcode, $this->user_id);
	}

	public function getPhone1(){
		return User::getPrivacyenabledvalue($this->phone1flag, $this->phone1, $this->user_id);
	}
	
	public function getPhone2(){
		return User::getPrivacyenabledvalue($this->phone2flag, $this->phone2, $this->user_id);
	}
	
	public function getCellphone(){
		return User::getPrivacyenabledvalue($this->cellphoneflag, $this->cellphone, $this->user_id);
	}
	
	public function getFax(){
		return User::getPrivacyenabledvalue($this->faxflag, $this->fax, $this->id);
	}
		
	public function getCountryname($cid){
		if($cid){
			return CountryPeer::retrieveByPK($cid)->getName();
		}else{
			return "NA";
		}
	}
}
