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
	
	public function getAcademic(){
		$c = new Criteria();
		$c->add(AcademicPeer::USER_ID, $this->getId());
		return AcademicPeer::doSelect($c);
	}
	
	public function getProfessional(){
		$c = new Criteria();
		$c->add(ProfessionalPeer::USER_ID, $this->getId());
		return ProfessionalPeer::doSelect($c);
	}
	
	public function getFamily(){
		$c = new Criteria();
		$c->add(FamilyPeer::USER_ID, $this->getId());
		return FamilyPeer::doSelectOne($c);
	}

	public function getAddress(){
		$c = new Criteria();
		$c->add(AddressPeer::USER_ID, $this->id);
		$c->addAscendingOrderByColumn('type');
		return AddressPeer::doSelect($c);
	}

	public function getChapter(){
		$c = new Criteria();
		$c->addJoin(UserchapterregionPeer::CHAPTERREGION_ID, ChapterregionPeer::ID);
		$c->addJoin(ChapterregionPeer::CHAPTER_ID, ChapterPeer::ID);
		$c->add(UserchapterregionPeer::USER_ID, $this->id);
		return ChapterPeer::doSelect($c);
	}
	
	public function getClaiminfo(){
		$c = new Criteria();
		$c->add(ClaiminfoPeer::USER_ID, $this->id);
		return ClaiminfoPeer::doSelectOne($c);
	}
	
	/* function to handle privacy */
	
	public function getEnrolment(){
		return $this->getPrivacyenabledvalue($this->enrolflag, $this->enrolment);
	}
	
	public function getRoll(){
		return $this->getPrivacyenabledvalue($this->rollflag, $this->roll);
	}
	
	public function getGraduationyear(){
		return $this->getPrivacyenabledvalue($this->graduationyearflag, $this->graduationyear);
	}
	
	public function getBranchId(){
		return $this->getPrivacyenabledvalue($this->branchflag, $this->branch_id);
	}
	
	public function getDegreeId(){
		return $this->getPrivacyenabledvalue($this->degreeflag, $this->degree_id);
	}
	
	public function getCurrentlyat(){
		return $this->getPrivacyenabledvalue($this->currentlyatflag, $this->currentlyat);
	}

	protected function getPrivacyenabledvalue($flag, $value){
		$visitorid = sfContext::getInstance()->getUser()->getAttribute('userid');
		if($visitorid == $this->id){
			return $value;
		}else{
			switch ($flag){
				case 1 : return sfConfig::get('app_privacy_message'); break;
				case 2 : $c = new Criteria();
						 $c->add(UserPeer::ID, $this->id);
						 $c->addJoin(UserPeer::ID, UserfriendPeer::USER_ID);
						 $c->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
						 $c->add(FriendPeer::USER_ID, $visitorid);
						 $frienduser = UserPeer::doSelectOne($c); 
						 if($frienduser){
						 	return $value;
						 }else{
						 	return sfConfig::get('app_privacy_message');
						 }
						break;
				case 3 : if($visitorid){
							return $value;
						}else{
							return sfConfig::get('app_privacy_message');
						}
						break;
				case 4 : return $value; break;
				default: return $value;
			}
		}
	}

}
