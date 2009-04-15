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

	public function getBranch(){
		$c = new Criteria();
		$c->addJoin(BranchPeer::ID, UserPeer::BRANCH_ID);
		$c->add(UserPeer::ID, $this->getId());
		return BranchPeer::doSelectOne($c);
	}

	public function getDegree(){
		$c = new Criteria();
		$c->addJoin(UserPeer::DEGREE_ID, DegreePeer::ID);
		$c->add(UserPeer::ID, $this->getId());
		return DegreePeer::doSelectOne($c);
	}
	
	public function getPersonal(){
		$c = new Criteria();
		$c->add(PersonalPeer::USER_ID, $this->getId());
		return PersonalPeer::doSelectOne($c);
	}
}
