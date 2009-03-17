<?php

/**
 * Subclass for representing a row from the 'user' table.
 *
 * 
 *
 * @package lib.model
 */ 
class User extends BaseUser
{
	public function getFullname()
	{
		//return $this->getFirstname().' '.$this->getMiddlename().' '.$this->getLastname();
		$c = new Criteria();
		$c->add(PersonalPeer::USER_ID, $this->getId());
		$personal = PersonalPeer::doSelectOne($c);
		return $personal->getFirstname().' '.$personal->getMiddlename().' '.$personal->getLastname();
	}
	
	public function getEmail()
	{
		$c = new Criteria();
		$c->add(PersonalPeer::USER_ID, $this->getId());
		$personal = PersonalPeer::doSelectOne($c);
		return $personal->getEmail();
	}
	
	public function setPassword($password)
	{
		if ($password !== null && !is_string($password)) {
			$password = (string) $password;
		}
		if ($this->password !== $password) {
			$salt = md5("I am Indian.");
			$this->password=sha1($salt.$password);
			$this->modifiedColumns[] = UserPeer::PASSWORD;
		}
	}
}
