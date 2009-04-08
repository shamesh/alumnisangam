<?php

/**
 * Subclass for representing a row from the 'lorValues' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Lorvalues extends BaseLorvalues
{
	public function getPersonal(){
		$c = new Criteria();
		$c->add(PersonalPeer::USER_ID, $this->getUserId());
		$personal = PersonalPeer::doSelectOne($c);
		return $personal;
		
	}
}
