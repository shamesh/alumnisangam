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
		return User::getPrivacyenabledvalue($this->addressflag, $this->address, $this->id);
	}

	public function getCity(){
		return User::getPrivacyenabledvalue($this->cityflag, $this->city, $this->id);
	}
	
	public function getState(){
		return User::getPrivacyenabledvalue($this->stateflag, $this->state, $this->id);
	}
	
	public function getCountry(){
		return User::getPrivacyenabledvalue($this->countryflag, $this->country, $this->id);
	}
	public function getPostalcode(){
		return User::getPrivacyenabledvalue($this->postalcodeflag, $this->postalcode, $this->id);
	}

	public function getPhone1(){
		return User::getPrivacyenabledvalue($this->phone1flag, $this->phone1, $this->id);
	}
	
	public function getPhone2(){
		return User::getPrivacyenabledvalue($this->phone2flag, $this->phone2, $this->id);
	}
	
	public function getCellphone(){
		return User::getPrivacyenabledvalue($this->cellphoneflag, $this->cellphone, $this->id);
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
