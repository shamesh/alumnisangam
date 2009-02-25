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
		return $this->getFirstname().' '.$this->getMiddlename().' '.$this->getLastname();
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
