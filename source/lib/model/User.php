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
		
	public function getBranch(){
		$c = new Criteria();
		$c->addJoin(BranchPeer::ID, UserPeer::BRANCH_ID);
		$c->add(UserPeer::ID, $this->getId());
		return $branch = BranchPeer::doSelectOne($c);
	}

	public function getDegree(){
		$c = new Criteria();
		$c->addJoin(UserPeer::DEGREE_ID, DegreePeer::ID);
		$c->add(UserPeer::ID, $this->getId());
		return DegreePeer::doSelectOne($c);
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
	
	public function getYear(){
		return $this->graduationyear;
	}
	
	public function getBrid(){
		return $this->branch_id;
	}
	
	public function getRemarks($param){
		$c = new Criteria();
		$c->addJoin(LoruserPeer::LORVALUES_ID, LorvaluesPeer::ID);
		$c->add(LoruserPeer::USER_ID, $this->id);
		$c->add(LorvaluesPeer::LORFIELDS_ID, $param);
		return LorvaluesPeer::doSelect($c);
	}
	
	/* function to handle privacy */
	
	public function getEnrolment(){
		return User::getPrivacyenabledvalue($this->enrolflag, $this->enrolment, $this->id);
	}
	
	public function getRoll(){
		return User::getPrivacyenabledvalue($this->rollflag, $this->roll, $this->id);
	}
	
	public function getGraduationyear(){
		return User::getPrivacyenabledvalue($this->graduationyearflag, $this->graduationyear, $this->id);
	}
	
	public function getBranchId(){
		return User::getPrivacyenabledvalue($this->branchflag, $this->branch_id, $this->id);
	}
	
	public function getBranchname(){
		return User::getPrivacyenabledvalue($this->branchflag, $this->getBranch()->getName(), $this->id);
	}
	
	public function getBranchcode(){
		return User::getPrivacyenabledvalue($this->branchflag, $this->getBranch()->getCode(), $this->id);
	}
	
	public function getDegreeId(){
		return User::getPrivacyenabledvalue($this->degreeflag, $this->degree_id, $this->id);
	}

	public function getCurrentlyat(){
		return User::getPrivacyenabledvalue($this->currentlyatflag, $this->currentlyat, $this->id);
	}

	public function getPrivacyenabledvalue($flag, $value, $thisid){
		$visitorid = sfContext::getInstance()->getUser()->getAttribute('userid');
		$visitor = UserPeer::retrieveByPK($visitorid);
		$c = new Criteria();
		$c->add(UserrolePeer::USER_ID, $visitorid);
		$c->add(UserrolePeer::ROLE_ID, sfConfig::get('app_role_admin'));
		$isadmin = UserrolePeer::doSelectOne($c);
		if( ($visitorid == $thisid) || $isadmin ) {
			return $value;
		}else{
			switch ($flag){
				case 1 : return sfConfig::get('app_privacy_message'); break;
				case 2 : $c = new Criteria();
						 $c->add(UserPeer::ID, $thisid);
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
