<?php


abstract class BaseUser extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $username;


	
	protected $password;


	
	protected $enrolment;


	
	protected $enrolflag;


	
	protected $roll;


	
	protected $rollflag;


	
	protected $graduationyear;


	
	protected $graduationyearflag;


	
	protected $branch_id;


	
	protected $branchflag;


	
	protected $degree_id;


	
	protected $degreeflag;


	
	protected $usertype;


	
	protected $tempemail;


	
	protected $currentlyat;


	
	protected $currentlyatflag;


	
	protected $islocked;


	
	protected $isinvited;


	
	protected $authcode;


	
	protected $lastlogin;

	
	protected $aBranch;

	
	protected $aDegree;

	
	protected $collUserroles;

	
	protected $lastUserroleCriteria = null;

	
	protected $collPersonals;

	
	protected $lastPersonalCriteria = null;

	
	protected $collAddresss;

	
	protected $lastAddressCriteria = null;

	
	protected $collProfessionals;

	
	protected $lastProfessionalCriteria = null;

	
	protected $collFamilys;

	
	protected $lastFamilyCriteria = null;

	
	protected $collAcademics;

	
	protected $lastAcademicCriteria = null;

	
	protected $collUserchapterregions;

	
	protected $lastUserchapterregionCriteria = null;

	
	protected $collUserbadges;

	
	protected $lastUserbadgeCriteria = null;

	
	protected $collLorvaluess;

	
	protected $lastLorvaluesCriteria = null;

	
	protected $collLorusers;

	
	protected $lastLoruserCriteria = null;

	
	protected $collMags;

	
	protected $lastMagCriteria = null;

	
	protected $collPepusers;

	
	protected $lastPepuserCriteria = null;

	
	protected $collClaiminfos;

	
	protected $lastClaiminfoCriteria = null;

	
	protected $collFriends;

	
	protected $lastFriendCriteria = null;

	
	protected $collUserfriends;

	
	protected $lastUserfriendCriteria = null;

	
	protected $collResumes;

	
	protected $lastResumeCriteria = null;

	
	protected $collNotess;

	
	protected $lastNotesCriteria = null;

	
	protected $collFlagss;

	
	protected $lastFlagsCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getUsername()
	{

		return $this->username;
	}

	
	public function getPassword()
	{

		return $this->password;
	}

	
	public function getEnrolment()
	{

		return $this->enrolment;
	}

	
	public function getEnrolflag()
	{

		return $this->enrolflag;
	}

	
	public function getRoll()
	{

		return $this->roll;
	}

	
	public function getRollflag()
	{

		return $this->rollflag;
	}

	
	public function getGraduationyear()
	{

		return $this->graduationyear;
	}

	
	public function getGraduationyearflag()
	{

		return $this->graduationyearflag;
	}

	
	public function getBranchId()
	{

		return $this->branch_id;
	}

	
	public function getBranchflag()
	{

		return $this->branchflag;
	}

	
	public function getDegreeId()
	{

		return $this->degree_id;
	}

	
	public function getDegreeflag()
	{

		return $this->degreeflag;
	}

	
	public function getUsertype()
	{

		return $this->usertype;
	}

	
	public function getTempemail()
	{

		return $this->tempemail;
	}

	
	public function getCurrentlyat()
	{

		return $this->currentlyat;
	}

	
	public function getCurrentlyatflag()
	{

		return $this->currentlyatflag;
	}

	
	public function getIslocked()
	{

		return $this->islocked;
	}

	
	public function getIsinvited()
	{

		return $this->isinvited;
	}

	
	public function getAuthcode()
	{

		return $this->authcode;
	}

	
	public function getLastlogin($format = 'Y-m-d H:i:s')
	{

		if ($this->lastlogin === null || $this->lastlogin === '') {
			return null;
		} elseif (!is_int($this->lastlogin)) {
						$ts = strtotime($this->lastlogin);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [lastlogin] as date/time value: " . var_export($this->lastlogin, true));
			}
		} else {
			$ts = $this->lastlogin;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = UserPeer::ID;
		}

	} 
	
	public function setUsername($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->username !== $v) {
			$this->username = $v;
			$this->modifiedColumns[] = UserPeer::USERNAME;
		}

	} 
	
	public function setPassword($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->password !== $v) {
			$this->password = $v;
			$this->modifiedColumns[] = UserPeer::PASSWORD;
		}

	} 
	
	public function setEnrolment($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->enrolment !== $v) {
			$this->enrolment = $v;
			$this->modifiedColumns[] = UserPeer::ENROLMENT;
		}

	} 
	
	public function setEnrolflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->enrolflag !== $v) {
			$this->enrolflag = $v;
			$this->modifiedColumns[] = UserPeer::ENROLFLAG;
		}

	} 
	
	public function setRoll($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->roll !== $v) {
			$this->roll = $v;
			$this->modifiedColumns[] = UserPeer::ROLL;
		}

	} 
	
	public function setRollflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rollflag !== $v) {
			$this->rollflag = $v;
			$this->modifiedColumns[] = UserPeer::ROLLFLAG;
		}

	} 
	
	public function setGraduationyear($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->graduationyear !== $v) {
			$this->graduationyear = $v;
			$this->modifiedColumns[] = UserPeer::GRADUATIONYEAR;
		}

	} 
	
	public function setGraduationyearflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->graduationyearflag !== $v) {
			$this->graduationyearflag = $v;
			$this->modifiedColumns[] = UserPeer::GRADUATIONYEARFLAG;
		}

	} 
	
	public function setBranchId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->branch_id !== $v) {
			$this->branch_id = $v;
			$this->modifiedColumns[] = UserPeer::BRANCH_ID;
		}

		if ($this->aBranch !== null && $this->aBranch->getId() !== $v) {
			$this->aBranch = null;
		}

	} 
	
	public function setBranchflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->branchflag !== $v) {
			$this->branchflag = $v;
			$this->modifiedColumns[] = UserPeer::BRANCHFLAG;
		}

	} 
	
	public function setDegreeId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->degree_id !== $v) {
			$this->degree_id = $v;
			$this->modifiedColumns[] = UserPeer::DEGREE_ID;
		}

		if ($this->aDegree !== null && $this->aDegree->getId() !== $v) {
			$this->aDegree = null;
		}

	} 
	
	public function setDegreeflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->degreeflag !== $v) {
			$this->degreeflag = $v;
			$this->modifiedColumns[] = UserPeer::DEGREEFLAG;
		}

	} 
	
	public function setUsertype($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->usertype !== $v) {
			$this->usertype = $v;
			$this->modifiedColumns[] = UserPeer::USERTYPE;
		}

	} 
	
	public function setTempemail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tempemail !== $v) {
			$this->tempemail = $v;
			$this->modifiedColumns[] = UserPeer::TEMPEMAIL;
		}

	} 
	
	public function setCurrentlyat($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->currentlyat !== $v) {
			$this->currentlyat = $v;
			$this->modifiedColumns[] = UserPeer::CURRENTLYAT;
		}

	} 
	
	public function setCurrentlyatflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->currentlyatflag !== $v) {
			$this->currentlyatflag = $v;
			$this->modifiedColumns[] = UserPeer::CURRENTLYATFLAG;
		}

	} 
	
	public function setIslocked($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->islocked !== $v) {
			$this->islocked = $v;
			$this->modifiedColumns[] = UserPeer::ISLOCKED;
		}

	} 
	
	public function setIsinvited($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->isinvited !== $v) {
			$this->isinvited = $v;
			$this->modifiedColumns[] = UserPeer::ISINVITED;
		}

	} 
	
	public function setAuthcode($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->authcode !== $v) {
			$this->authcode = $v;
			$this->modifiedColumns[] = UserPeer::AUTHCODE;
		}

	} 
	
	public function setLastlogin($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [lastlogin] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->lastlogin !== $ts) {
			$this->lastlogin = $ts;
			$this->modifiedColumns[] = UserPeer::LASTLOGIN;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->username = $rs->getString($startcol + 1);

			$this->password = $rs->getString($startcol + 2);

			$this->enrolment = $rs->getInt($startcol + 3);

			$this->enrolflag = $rs->getString($startcol + 4);

			$this->roll = $rs->getInt($startcol + 5);

			$this->rollflag = $rs->getString($startcol + 6);

			$this->graduationyear = $rs->getInt($startcol + 7);

			$this->graduationyearflag = $rs->getString($startcol + 8);

			$this->branch_id = $rs->getInt($startcol + 9);

			$this->branchflag = $rs->getString($startcol + 10);

			$this->degree_id = $rs->getInt($startcol + 11);

			$this->degreeflag = $rs->getString($startcol + 12);

			$this->usertype = $rs->getString($startcol + 13);

			$this->tempemail = $rs->getString($startcol + 14);

			$this->currentlyat = $rs->getString($startcol + 15);

			$this->currentlyatflag = $rs->getString($startcol + 16);

			$this->islocked = $rs->getString($startcol + 17);

			$this->isinvited = $rs->getString($startcol + 18);

			$this->authcode = $rs->getString($startcol + 19);

			$this->lastlogin = $rs->getTimestamp($startcol + 20, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 21; 
		} catch (Exception $e) {
			throw new PropelException("Error populating User object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			UserPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


												
			if ($this->aBranch !== null) {
				if ($this->aBranch->isModified()) {
					$affectedRows += $this->aBranch->save($con);
				}
				$this->setBranch($this->aBranch);
			}

			if ($this->aDegree !== null) {
				if ($this->aDegree->isModified()) {
					$affectedRows += $this->aDegree->save($con);
				}
				$this->setDegree($this->aDegree);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = UserPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += UserPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collUserroles !== null) {
				foreach($this->collUserroles as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPersonals !== null) {
				foreach($this->collPersonals as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collAddresss !== null) {
				foreach($this->collAddresss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collProfessionals !== null) {
				foreach($this->collProfessionals as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collFamilys !== null) {
				foreach($this->collFamilys as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collAcademics !== null) {
				foreach($this->collAcademics as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUserchapterregions !== null) {
				foreach($this->collUserchapterregions as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUserbadges !== null) {
				foreach($this->collUserbadges as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collLorvaluess !== null) {
				foreach($this->collLorvaluess as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collLorusers !== null) {
				foreach($this->collLorusers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collMags !== null) {
				foreach($this->collMags as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPepusers !== null) {
				foreach($this->collPepusers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collClaiminfos !== null) {
				foreach($this->collClaiminfos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collFriends !== null) {
				foreach($this->collFriends as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUserfriends !== null) {
				foreach($this->collUserfriends as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collResumes !== null) {
				foreach($this->collResumes as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNotess !== null) {
				foreach($this->collNotess as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collFlagss !== null) {
				foreach($this->collFlagss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


												
			if ($this->aBranch !== null) {
				if (!$this->aBranch->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aBranch->getValidationFailures());
				}
			}

			if ($this->aDegree !== null) {
				if (!$this->aDegree->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDegree->getValidationFailures());
				}
			}


			if (($retval = UserPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collUserroles !== null) {
					foreach($this->collUserroles as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPersonals !== null) {
					foreach($this->collPersonals as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collAddresss !== null) {
					foreach($this->collAddresss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collProfessionals !== null) {
					foreach($this->collProfessionals as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collFamilys !== null) {
					foreach($this->collFamilys as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collAcademics !== null) {
					foreach($this->collAcademics as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUserchapterregions !== null) {
					foreach($this->collUserchapterregions as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUserbadges !== null) {
					foreach($this->collUserbadges as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collLorvaluess !== null) {
					foreach($this->collLorvaluess as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collLorusers !== null) {
					foreach($this->collLorusers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collMags !== null) {
					foreach($this->collMags as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPepusers !== null) {
					foreach($this->collPepusers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collClaiminfos !== null) {
					foreach($this->collClaiminfos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collFriends !== null) {
					foreach($this->collFriends as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUserfriends !== null) {
					foreach($this->collUserfriends as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collResumes !== null) {
					foreach($this->collResumes as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNotess !== null) {
					foreach($this->collNotess as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collFlagss !== null) {
					foreach($this->collFlagss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getUsername();
				break;
			case 2:
				return $this->getPassword();
				break;
			case 3:
				return $this->getEnrolment();
				break;
			case 4:
				return $this->getEnrolflag();
				break;
			case 5:
				return $this->getRoll();
				break;
			case 6:
				return $this->getRollflag();
				break;
			case 7:
				return $this->getGraduationyear();
				break;
			case 8:
				return $this->getGraduationyearflag();
				break;
			case 9:
				return $this->getBranchId();
				break;
			case 10:
				return $this->getBranchflag();
				break;
			case 11:
				return $this->getDegreeId();
				break;
			case 12:
				return $this->getDegreeflag();
				break;
			case 13:
				return $this->getUsertype();
				break;
			case 14:
				return $this->getTempemail();
				break;
			case 15:
				return $this->getCurrentlyat();
				break;
			case 16:
				return $this->getCurrentlyatflag();
				break;
			case 17:
				return $this->getIslocked();
				break;
			case 18:
				return $this->getIsinvited();
				break;
			case 19:
				return $this->getAuthcode();
				break;
			case 20:
				return $this->getLastlogin();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUsername(),
			$keys[2] => $this->getPassword(),
			$keys[3] => $this->getEnrolment(),
			$keys[4] => $this->getEnrolflag(),
			$keys[5] => $this->getRoll(),
			$keys[6] => $this->getRollflag(),
			$keys[7] => $this->getGraduationyear(),
			$keys[8] => $this->getGraduationyearflag(),
			$keys[9] => $this->getBranchId(),
			$keys[10] => $this->getBranchflag(),
			$keys[11] => $this->getDegreeId(),
			$keys[12] => $this->getDegreeflag(),
			$keys[13] => $this->getUsertype(),
			$keys[14] => $this->getTempemail(),
			$keys[15] => $this->getCurrentlyat(),
			$keys[16] => $this->getCurrentlyatflag(),
			$keys[17] => $this->getIslocked(),
			$keys[18] => $this->getIsinvited(),
			$keys[19] => $this->getAuthcode(),
			$keys[20] => $this->getLastlogin(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setUsername($value);
				break;
			case 2:
				$this->setPassword($value);
				break;
			case 3:
				$this->setEnrolment($value);
				break;
			case 4:
				$this->setEnrolflag($value);
				break;
			case 5:
				$this->setRoll($value);
				break;
			case 6:
				$this->setRollflag($value);
				break;
			case 7:
				$this->setGraduationyear($value);
				break;
			case 8:
				$this->setGraduationyearflag($value);
				break;
			case 9:
				$this->setBranchId($value);
				break;
			case 10:
				$this->setBranchflag($value);
				break;
			case 11:
				$this->setDegreeId($value);
				break;
			case 12:
				$this->setDegreeflag($value);
				break;
			case 13:
				$this->setUsertype($value);
				break;
			case 14:
				$this->setTempemail($value);
				break;
			case 15:
				$this->setCurrentlyat($value);
				break;
			case 16:
				$this->setCurrentlyatflag($value);
				break;
			case 17:
				$this->setIslocked($value);
				break;
			case 18:
				$this->setIsinvited($value);
				break;
			case 19:
				$this->setAuthcode($value);
				break;
			case 20:
				$this->setLastlogin($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUsername($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPassword($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setEnrolment($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEnrolflag($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRoll($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setRollflag($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setGraduationyear($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setGraduationyearflag($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setBranchId($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setBranchflag($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDegreeId($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDegreeflag($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setUsertype($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setTempemail($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCurrentlyat($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCurrentlyatflag($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setIslocked($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setIsinvited($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setAuthcode($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setLastlogin($arr[$keys[20]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(UserPeer::DATABASE_NAME);

		if ($this->isColumnModified(UserPeer::ID)) $criteria->add(UserPeer::ID, $this->id);
		if ($this->isColumnModified(UserPeer::USERNAME)) $criteria->add(UserPeer::USERNAME, $this->username);
		if ($this->isColumnModified(UserPeer::PASSWORD)) $criteria->add(UserPeer::PASSWORD, $this->password);
		if ($this->isColumnModified(UserPeer::ENROLMENT)) $criteria->add(UserPeer::ENROLMENT, $this->enrolment);
		if ($this->isColumnModified(UserPeer::ENROLFLAG)) $criteria->add(UserPeer::ENROLFLAG, $this->enrolflag);
		if ($this->isColumnModified(UserPeer::ROLL)) $criteria->add(UserPeer::ROLL, $this->roll);
		if ($this->isColumnModified(UserPeer::ROLLFLAG)) $criteria->add(UserPeer::ROLLFLAG, $this->rollflag);
		if ($this->isColumnModified(UserPeer::GRADUATIONYEAR)) $criteria->add(UserPeer::GRADUATIONYEAR, $this->graduationyear);
		if ($this->isColumnModified(UserPeer::GRADUATIONYEARFLAG)) $criteria->add(UserPeer::GRADUATIONYEARFLAG, $this->graduationyearflag);
		if ($this->isColumnModified(UserPeer::BRANCH_ID)) $criteria->add(UserPeer::BRANCH_ID, $this->branch_id);
		if ($this->isColumnModified(UserPeer::BRANCHFLAG)) $criteria->add(UserPeer::BRANCHFLAG, $this->branchflag);
		if ($this->isColumnModified(UserPeer::DEGREE_ID)) $criteria->add(UserPeer::DEGREE_ID, $this->degree_id);
		if ($this->isColumnModified(UserPeer::DEGREEFLAG)) $criteria->add(UserPeer::DEGREEFLAG, $this->degreeflag);
		if ($this->isColumnModified(UserPeer::USERTYPE)) $criteria->add(UserPeer::USERTYPE, $this->usertype);
		if ($this->isColumnModified(UserPeer::TEMPEMAIL)) $criteria->add(UserPeer::TEMPEMAIL, $this->tempemail);
		if ($this->isColumnModified(UserPeer::CURRENTLYAT)) $criteria->add(UserPeer::CURRENTLYAT, $this->currentlyat);
		if ($this->isColumnModified(UserPeer::CURRENTLYATFLAG)) $criteria->add(UserPeer::CURRENTLYATFLAG, $this->currentlyatflag);
		if ($this->isColumnModified(UserPeer::ISLOCKED)) $criteria->add(UserPeer::ISLOCKED, $this->islocked);
		if ($this->isColumnModified(UserPeer::ISINVITED)) $criteria->add(UserPeer::ISINVITED, $this->isinvited);
		if ($this->isColumnModified(UserPeer::AUTHCODE)) $criteria->add(UserPeer::AUTHCODE, $this->authcode);
		if ($this->isColumnModified(UserPeer::LASTLOGIN)) $criteria->add(UserPeer::LASTLOGIN, $this->lastlogin);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UserPeer::DATABASE_NAME);

		$criteria->add(UserPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setUsername($this->username);

		$copyObj->setPassword($this->password);

		$copyObj->setEnrolment($this->enrolment);

		$copyObj->setEnrolflag($this->enrolflag);

		$copyObj->setRoll($this->roll);

		$copyObj->setRollflag($this->rollflag);

		$copyObj->setGraduationyear($this->graduationyear);

		$copyObj->setGraduationyearflag($this->graduationyearflag);

		$copyObj->setBranchId($this->branch_id);

		$copyObj->setBranchflag($this->branchflag);

		$copyObj->setDegreeId($this->degree_id);

		$copyObj->setDegreeflag($this->degreeflag);

		$copyObj->setUsertype($this->usertype);

		$copyObj->setTempemail($this->tempemail);

		$copyObj->setCurrentlyat($this->currentlyat);

		$copyObj->setCurrentlyatflag($this->currentlyatflag);

		$copyObj->setIslocked($this->islocked);

		$copyObj->setIsinvited($this->isinvited);

		$copyObj->setAuthcode($this->authcode);

		$copyObj->setLastlogin($this->lastlogin);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getUserroles() as $relObj) {
				$copyObj->addUserrole($relObj->copy($deepCopy));
			}

			foreach($this->getPersonals() as $relObj) {
				$copyObj->addPersonal($relObj->copy($deepCopy));
			}

			foreach($this->getAddresss() as $relObj) {
				$copyObj->addAddress($relObj->copy($deepCopy));
			}

			foreach($this->getProfessionals() as $relObj) {
				$copyObj->addProfessional($relObj->copy($deepCopy));
			}

			foreach($this->getFamilys() as $relObj) {
				$copyObj->addFamily($relObj->copy($deepCopy));
			}

			foreach($this->getAcademics() as $relObj) {
				$copyObj->addAcademic($relObj->copy($deepCopy));
			}

			foreach($this->getUserchapterregions() as $relObj) {
				$copyObj->addUserchapterregion($relObj->copy($deepCopy));
			}

			foreach($this->getUserbadges() as $relObj) {
				$copyObj->addUserbadge($relObj->copy($deepCopy));
			}

			foreach($this->getLorvaluess() as $relObj) {
				$copyObj->addLorvalues($relObj->copy($deepCopy));
			}

			foreach($this->getLorusers() as $relObj) {
				$copyObj->addLoruser($relObj->copy($deepCopy));
			}

			foreach($this->getMags() as $relObj) {
				$copyObj->addMag($relObj->copy($deepCopy));
			}

			foreach($this->getPepusers() as $relObj) {
				$copyObj->addPepuser($relObj->copy($deepCopy));
			}

			foreach($this->getClaiminfos() as $relObj) {
				$copyObj->addClaiminfo($relObj->copy($deepCopy));
			}

			foreach($this->getFriends() as $relObj) {
				$copyObj->addFriend($relObj->copy($deepCopy));
			}

			foreach($this->getUserfriends() as $relObj) {
				$copyObj->addUserfriend($relObj->copy($deepCopy));
			}

			foreach($this->getResumes() as $relObj) {
				$copyObj->addResume($relObj->copy($deepCopy));
			}

			foreach($this->getNotess() as $relObj) {
				$copyObj->addNotes($relObj->copy($deepCopy));
			}

			foreach($this->getFlagss() as $relObj) {
				$copyObj->addFlags($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new UserPeer();
		}
		return self::$peer;
	}

	
	public function setBranch($v)
	{


		if ($v === null) {
			$this->setBranchId(NULL);
		} else {
			$this->setBranchId($v->getId());
		}


		$this->aBranch = $v;
	}


	
	public function getBranch($con = null)
	{
				include_once 'lib/model/om/BaseBranchPeer.php';

		if ($this->aBranch === null && ($this->branch_id !== null)) {

			$this->aBranch = BranchPeer::retrieveByPK($this->branch_id, $con);

			
		}
		return $this->aBranch;
	}

	
	public function setDegree($v)
	{


		if ($v === null) {
			$this->setDegreeId(NULL);
		} else {
			$this->setDegreeId($v->getId());
		}


		$this->aDegree = $v;
	}


	
	public function getDegree($con = null)
	{
				include_once 'lib/model/om/BaseDegreePeer.php';

		if ($this->aDegree === null && ($this->degree_id !== null)) {

			$this->aDegree = DegreePeer::retrieveByPK($this->degree_id, $con);

			
		}
		return $this->aDegree;
	}

	
	public function initUserroles()
	{
		if ($this->collUserroles === null) {
			$this->collUserroles = array();
		}
	}

	
	public function getUserroles($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserrolePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserroles === null) {
			if ($this->isNew()) {
			   $this->collUserroles = array();
			} else {

				$criteria->add(UserrolePeer::USER_ID, $this->getId());

				UserrolePeer::addSelectColumns($criteria);
				$this->collUserroles = UserrolePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UserrolePeer::USER_ID, $this->getId());

				UserrolePeer::addSelectColumns($criteria);
				if (!isset($this->lastUserroleCriteria) || !$this->lastUserroleCriteria->equals($criteria)) {
					$this->collUserroles = UserrolePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastUserroleCriteria = $criteria;
		return $this->collUserroles;
	}

	
	public function countUserroles($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseUserrolePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(UserrolePeer::USER_ID, $this->getId());

		return UserrolePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUserrole(Userrole $l)
	{
		$this->collUserroles[] = $l;
		$l->setUser($this);
	}


	
	public function getUserrolesJoinRole($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserrolePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserroles === null) {
			if ($this->isNew()) {
				$this->collUserroles = array();
			} else {

				$criteria->add(UserrolePeer::USER_ID, $this->getId());

				$this->collUserroles = UserrolePeer::doSelectJoinRole($criteria, $con);
			}
		} else {
									
			$criteria->add(UserrolePeer::USER_ID, $this->getId());

			if (!isset($this->lastUserroleCriteria) || !$this->lastUserroleCriteria->equals($criteria)) {
				$this->collUserroles = UserrolePeer::doSelectJoinRole($criteria, $con);
			}
		}
		$this->lastUserroleCriteria = $criteria;

		return $this->collUserroles;
	}

	
	public function initPersonals()
	{
		if ($this->collPersonals === null) {
			$this->collPersonals = array();
		}
	}

	
	public function getPersonals($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BasePersonalPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPersonals === null) {
			if ($this->isNew()) {
			   $this->collPersonals = array();
			} else {

				$criteria->add(PersonalPeer::USER_ID, $this->getId());

				PersonalPeer::addSelectColumns($criteria);
				$this->collPersonals = PersonalPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(PersonalPeer::USER_ID, $this->getId());

				PersonalPeer::addSelectColumns($criteria);
				if (!isset($this->lastPersonalCriteria) || !$this->lastPersonalCriteria->equals($criteria)) {
					$this->collPersonals = PersonalPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastPersonalCriteria = $criteria;
		return $this->collPersonals;
	}

	
	public function countPersonals($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BasePersonalPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(PersonalPeer::USER_ID, $this->getId());

		return PersonalPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addPersonal(Personal $l)
	{
		$this->collPersonals[] = $l;
		$l->setUser($this);
	}

	
	public function initAddresss()
	{
		if ($this->collAddresss === null) {
			$this->collAddresss = array();
		}
	}

	
	public function getAddresss($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseAddressPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAddresss === null) {
			if ($this->isNew()) {
			   $this->collAddresss = array();
			} else {

				$criteria->add(AddressPeer::USER_ID, $this->getId());

				AddressPeer::addSelectColumns($criteria);
				$this->collAddresss = AddressPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(AddressPeer::USER_ID, $this->getId());

				AddressPeer::addSelectColumns($criteria);
				if (!isset($this->lastAddressCriteria) || !$this->lastAddressCriteria->equals($criteria)) {
					$this->collAddresss = AddressPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastAddressCriteria = $criteria;
		return $this->collAddresss;
	}

	
	public function countAddresss($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseAddressPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(AddressPeer::USER_ID, $this->getId());

		return AddressPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addAddress(Address $l)
	{
		$this->collAddresss[] = $l;
		$l->setUser($this);
	}

	
	public function initProfessionals()
	{
		if ($this->collProfessionals === null) {
			$this->collProfessionals = array();
		}
	}

	
	public function getProfessionals($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseProfessionalPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProfessionals === null) {
			if ($this->isNew()) {
			   $this->collProfessionals = array();
			} else {

				$criteria->add(ProfessionalPeer::USER_ID, $this->getId());

				ProfessionalPeer::addSelectColumns($criteria);
				$this->collProfessionals = ProfessionalPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ProfessionalPeer::USER_ID, $this->getId());

				ProfessionalPeer::addSelectColumns($criteria);
				if (!isset($this->lastProfessionalCriteria) || !$this->lastProfessionalCriteria->equals($criteria)) {
					$this->collProfessionals = ProfessionalPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastProfessionalCriteria = $criteria;
		return $this->collProfessionals;
	}

	
	public function countProfessionals($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseProfessionalPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ProfessionalPeer::USER_ID, $this->getId());

		return ProfessionalPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addProfessional(Professional $l)
	{
		$this->collProfessionals[] = $l;
		$l->setUser($this);
	}

	
	public function initFamilys()
	{
		if ($this->collFamilys === null) {
			$this->collFamilys = array();
		}
	}

	
	public function getFamilys($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFamilyPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFamilys === null) {
			if ($this->isNew()) {
			   $this->collFamilys = array();
			} else {

				$criteria->add(FamilyPeer::USER_ID, $this->getId());

				FamilyPeer::addSelectColumns($criteria);
				$this->collFamilys = FamilyPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(FamilyPeer::USER_ID, $this->getId());

				FamilyPeer::addSelectColumns($criteria);
				if (!isset($this->lastFamilyCriteria) || !$this->lastFamilyCriteria->equals($criteria)) {
					$this->collFamilys = FamilyPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastFamilyCriteria = $criteria;
		return $this->collFamilys;
	}

	
	public function countFamilys($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseFamilyPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(FamilyPeer::USER_ID, $this->getId());

		return FamilyPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addFamily(Family $l)
	{
		$this->collFamilys[] = $l;
		$l->setUser($this);
	}

	
	public function initAcademics()
	{
		if ($this->collAcademics === null) {
			$this->collAcademics = array();
		}
	}

	
	public function getAcademics($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseAcademicPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAcademics === null) {
			if ($this->isNew()) {
			   $this->collAcademics = array();
			} else {

				$criteria->add(AcademicPeer::USER_ID, $this->getId());

				AcademicPeer::addSelectColumns($criteria);
				$this->collAcademics = AcademicPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(AcademicPeer::USER_ID, $this->getId());

				AcademicPeer::addSelectColumns($criteria);
				if (!isset($this->lastAcademicCriteria) || !$this->lastAcademicCriteria->equals($criteria)) {
					$this->collAcademics = AcademicPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastAcademicCriteria = $criteria;
		return $this->collAcademics;
	}

	
	public function countAcademics($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseAcademicPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(AcademicPeer::USER_ID, $this->getId());

		return AcademicPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addAcademic(Academic $l)
	{
		$this->collAcademics[] = $l;
		$l->setUser($this);
	}

	
	public function initUserchapterregions()
	{
		if ($this->collUserchapterregions === null) {
			$this->collUserchapterregions = array();
		}
	}

	
	public function getUserchapterregions($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserchapterregionPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserchapterregions === null) {
			if ($this->isNew()) {
			   $this->collUserchapterregions = array();
			} else {

				$criteria->add(UserchapterregionPeer::USER_ID, $this->getId());

				UserchapterregionPeer::addSelectColumns($criteria);
				$this->collUserchapterregions = UserchapterregionPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UserchapterregionPeer::USER_ID, $this->getId());

				UserchapterregionPeer::addSelectColumns($criteria);
				if (!isset($this->lastUserchapterregionCriteria) || !$this->lastUserchapterregionCriteria->equals($criteria)) {
					$this->collUserchapterregions = UserchapterregionPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastUserchapterregionCriteria = $criteria;
		return $this->collUserchapterregions;
	}

	
	public function countUserchapterregions($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseUserchapterregionPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(UserchapterregionPeer::USER_ID, $this->getId());

		return UserchapterregionPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUserchapterregion(Userchapterregion $l)
	{
		$this->collUserchapterregions[] = $l;
		$l->setUser($this);
	}


	
	public function getUserchapterregionsJoinChapterregion($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserchapterregionPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserchapterregions === null) {
			if ($this->isNew()) {
				$this->collUserchapterregions = array();
			} else {

				$criteria->add(UserchapterregionPeer::USER_ID, $this->getId());

				$this->collUserchapterregions = UserchapterregionPeer::doSelectJoinChapterregion($criteria, $con);
			}
		} else {
									
			$criteria->add(UserchapterregionPeer::USER_ID, $this->getId());

			if (!isset($this->lastUserchapterregionCriteria) || !$this->lastUserchapterregionCriteria->equals($criteria)) {
				$this->collUserchapterregions = UserchapterregionPeer::doSelectJoinChapterregion($criteria, $con);
			}
		}
		$this->lastUserchapterregionCriteria = $criteria;

		return $this->collUserchapterregions;
	}

	
	public function initUserbadges()
	{
		if ($this->collUserbadges === null) {
			$this->collUserbadges = array();
		}
	}

	
	public function getUserbadges($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserbadgePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserbadges === null) {
			if ($this->isNew()) {
			   $this->collUserbadges = array();
			} else {

				$criteria->add(UserbadgePeer::USER_ID, $this->getId());

				UserbadgePeer::addSelectColumns($criteria);
				$this->collUserbadges = UserbadgePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UserbadgePeer::USER_ID, $this->getId());

				UserbadgePeer::addSelectColumns($criteria);
				if (!isset($this->lastUserbadgeCriteria) || !$this->lastUserbadgeCriteria->equals($criteria)) {
					$this->collUserbadges = UserbadgePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastUserbadgeCriteria = $criteria;
		return $this->collUserbadges;
	}

	
	public function countUserbadges($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseUserbadgePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(UserbadgePeer::USER_ID, $this->getId());

		return UserbadgePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUserbadge(Userbadge $l)
	{
		$this->collUserbadges[] = $l;
		$l->setUser($this);
	}


	
	public function getUserbadgesJoinBadge($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserbadgePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserbadges === null) {
			if ($this->isNew()) {
				$this->collUserbadges = array();
			} else {

				$criteria->add(UserbadgePeer::USER_ID, $this->getId());

				$this->collUserbadges = UserbadgePeer::doSelectJoinBadge($criteria, $con);
			}
		} else {
									
			$criteria->add(UserbadgePeer::USER_ID, $this->getId());

			if (!isset($this->lastUserbadgeCriteria) || !$this->lastUserbadgeCriteria->equals($criteria)) {
				$this->collUserbadges = UserbadgePeer::doSelectJoinBadge($criteria, $con);
			}
		}
		$this->lastUserbadgeCriteria = $criteria;

		return $this->collUserbadges;
	}

	
	public function initLorvaluess()
	{
		if ($this->collLorvaluess === null) {
			$this->collLorvaluess = array();
		}
	}

	
	public function getLorvaluess($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseLorvaluesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collLorvaluess === null) {
			if ($this->isNew()) {
			   $this->collLorvaluess = array();
			} else {

				$criteria->add(LorvaluesPeer::USER_ID, $this->getId());

				LorvaluesPeer::addSelectColumns($criteria);
				$this->collLorvaluess = LorvaluesPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(LorvaluesPeer::USER_ID, $this->getId());

				LorvaluesPeer::addSelectColumns($criteria);
				if (!isset($this->lastLorvaluesCriteria) || !$this->lastLorvaluesCriteria->equals($criteria)) {
					$this->collLorvaluess = LorvaluesPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastLorvaluesCriteria = $criteria;
		return $this->collLorvaluess;
	}

	
	public function countLorvaluess($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseLorvaluesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(LorvaluesPeer::USER_ID, $this->getId());

		return LorvaluesPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addLorvalues(Lorvalues $l)
	{
		$this->collLorvaluess[] = $l;
		$l->setUser($this);
	}


	
	public function getLorvaluessJoinLorfields($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseLorvaluesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collLorvaluess === null) {
			if ($this->isNew()) {
				$this->collLorvaluess = array();
			} else {

				$criteria->add(LorvaluesPeer::USER_ID, $this->getId());

				$this->collLorvaluess = LorvaluesPeer::doSelectJoinLorfields($criteria, $con);
			}
		} else {
									
			$criteria->add(LorvaluesPeer::USER_ID, $this->getId());

			if (!isset($this->lastLorvaluesCriteria) || !$this->lastLorvaluesCriteria->equals($criteria)) {
				$this->collLorvaluess = LorvaluesPeer::doSelectJoinLorfields($criteria, $con);
			}
		}
		$this->lastLorvaluesCriteria = $criteria;

		return $this->collLorvaluess;
	}

	
	public function initLorusers()
	{
		if ($this->collLorusers === null) {
			$this->collLorusers = array();
		}
	}

	
	public function getLorusers($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseLoruserPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collLorusers === null) {
			if ($this->isNew()) {
			   $this->collLorusers = array();
			} else {

				$criteria->add(LoruserPeer::USER_ID, $this->getId());

				LoruserPeer::addSelectColumns($criteria);
				$this->collLorusers = LoruserPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(LoruserPeer::USER_ID, $this->getId());

				LoruserPeer::addSelectColumns($criteria);
				if (!isset($this->lastLoruserCriteria) || !$this->lastLoruserCriteria->equals($criteria)) {
					$this->collLorusers = LoruserPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastLoruserCriteria = $criteria;
		return $this->collLorusers;
	}

	
	public function countLorusers($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseLoruserPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(LoruserPeer::USER_ID, $this->getId());

		return LoruserPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addLoruser(Loruser $l)
	{
		$this->collLorusers[] = $l;
		$l->setUser($this);
	}


	
	public function getLorusersJoinLorvalues($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseLoruserPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collLorusers === null) {
			if ($this->isNew()) {
				$this->collLorusers = array();
			} else {

				$criteria->add(LoruserPeer::USER_ID, $this->getId());

				$this->collLorusers = LoruserPeer::doSelectJoinLorvalues($criteria, $con);
			}
		} else {
									
			$criteria->add(LoruserPeer::USER_ID, $this->getId());

			if (!isset($this->lastLoruserCriteria) || !$this->lastLoruserCriteria->equals($criteria)) {
				$this->collLorusers = LoruserPeer::doSelectJoinLorvalues($criteria, $con);
			}
		}
		$this->lastLoruserCriteria = $criteria;

		return $this->collLorusers;
	}

	
	public function initMags()
	{
		if ($this->collMags === null) {
			$this->collMags = array();
		}
	}

	
	public function getMags($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseMagPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collMags === null) {
			if ($this->isNew()) {
			   $this->collMags = array();
			} else {

				$criteria->add(MagPeer::USER_ID, $this->getId());

				MagPeer::addSelectColumns($criteria);
				$this->collMags = MagPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(MagPeer::USER_ID, $this->getId());

				MagPeer::addSelectColumns($criteria);
				if (!isset($this->lastMagCriteria) || !$this->lastMagCriteria->equals($criteria)) {
					$this->collMags = MagPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastMagCriteria = $criteria;
		return $this->collMags;
	}

	
	public function countMags($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseMagPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(MagPeer::USER_ID, $this->getId());

		return MagPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addMag(Mag $l)
	{
		$this->collMags[] = $l;
		$l->setUser($this);
	}

	
	public function initPepusers()
	{
		if ($this->collPepusers === null) {
			$this->collPepusers = array();
		}
	}

	
	public function getPepusers($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BasePepuserPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPepusers === null) {
			if ($this->isNew()) {
			   $this->collPepusers = array();
			} else {

				$criteria->add(PepuserPeer::USER_ID, $this->getId());

				PepuserPeer::addSelectColumns($criteria);
				$this->collPepusers = PepuserPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(PepuserPeer::USER_ID, $this->getId());

				PepuserPeer::addSelectColumns($criteria);
				if (!isset($this->lastPepuserCriteria) || !$this->lastPepuserCriteria->equals($criteria)) {
					$this->collPepusers = PepuserPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastPepuserCriteria = $criteria;
		return $this->collPepusers;
	}

	
	public function countPepusers($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BasePepuserPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(PepuserPeer::USER_ID, $this->getId());

		return PepuserPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addPepuser(Pepuser $l)
	{
		$this->collPepusers[] = $l;
		$l->setUser($this);
	}


	
	public function getPepusersJoinPeppage($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BasePepuserPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPepusers === null) {
			if ($this->isNew()) {
				$this->collPepusers = array();
			} else {

				$criteria->add(PepuserPeer::USER_ID, $this->getId());

				$this->collPepusers = PepuserPeer::doSelectJoinPeppage($criteria, $con);
			}
		} else {
									
			$criteria->add(PepuserPeer::USER_ID, $this->getId());

			if (!isset($this->lastPepuserCriteria) || !$this->lastPepuserCriteria->equals($criteria)) {
				$this->collPepusers = PepuserPeer::doSelectJoinPeppage($criteria, $con);
			}
		}
		$this->lastPepuserCriteria = $criteria;

		return $this->collPepusers;
	}

	
	public function initClaiminfos()
	{
		if ($this->collClaiminfos === null) {
			$this->collClaiminfos = array();
		}
	}

	
	public function getClaiminfos($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseClaiminfoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collClaiminfos === null) {
			if ($this->isNew()) {
			   $this->collClaiminfos = array();
			} else {

				$criteria->add(ClaiminfoPeer::USER_ID, $this->getId());

				ClaiminfoPeer::addSelectColumns($criteria);
				$this->collClaiminfos = ClaiminfoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ClaiminfoPeer::USER_ID, $this->getId());

				ClaiminfoPeer::addSelectColumns($criteria);
				if (!isset($this->lastClaiminfoCriteria) || !$this->lastClaiminfoCriteria->equals($criteria)) {
					$this->collClaiminfos = ClaiminfoPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastClaiminfoCriteria = $criteria;
		return $this->collClaiminfos;
	}

	
	public function countClaiminfos($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseClaiminfoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ClaiminfoPeer::USER_ID, $this->getId());

		return ClaiminfoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addClaiminfo(Claiminfo $l)
	{
		$this->collClaiminfos[] = $l;
		$l->setUser($this);
	}

	
	public function initFriends()
	{
		if ($this->collFriends === null) {
			$this->collFriends = array();
		}
	}

	
	public function getFriends($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFriendPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFriends === null) {
			if ($this->isNew()) {
			   $this->collFriends = array();
			} else {

				$criteria->add(FriendPeer::USER_ID, $this->getId());

				FriendPeer::addSelectColumns($criteria);
				$this->collFriends = FriendPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(FriendPeer::USER_ID, $this->getId());

				FriendPeer::addSelectColumns($criteria);
				if (!isset($this->lastFriendCriteria) || !$this->lastFriendCriteria->equals($criteria)) {
					$this->collFriends = FriendPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastFriendCriteria = $criteria;
		return $this->collFriends;
	}

	
	public function countFriends($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseFriendPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(FriendPeer::USER_ID, $this->getId());

		return FriendPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addFriend(Friend $l)
	{
		$this->collFriends[] = $l;
		$l->setUser($this);
	}

	
	public function initUserfriends()
	{
		if ($this->collUserfriends === null) {
			$this->collUserfriends = array();
		}
	}

	
	public function getUserfriends($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserfriendPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserfriends === null) {
			if ($this->isNew()) {
			   $this->collUserfriends = array();
			} else {

				$criteria->add(UserfriendPeer::USER_ID, $this->getId());

				UserfriendPeer::addSelectColumns($criteria);
				$this->collUserfriends = UserfriendPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UserfriendPeer::USER_ID, $this->getId());

				UserfriendPeer::addSelectColumns($criteria);
				if (!isset($this->lastUserfriendCriteria) || !$this->lastUserfriendCriteria->equals($criteria)) {
					$this->collUserfriends = UserfriendPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastUserfriendCriteria = $criteria;
		return $this->collUserfriends;
	}

	
	public function countUserfriends($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseUserfriendPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(UserfriendPeer::USER_ID, $this->getId());

		return UserfriendPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUserfriend(Userfriend $l)
	{
		$this->collUserfriends[] = $l;
		$l->setUser($this);
	}


	
	public function getUserfriendsJoinFriend($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserfriendPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserfriends === null) {
			if ($this->isNew()) {
				$this->collUserfriends = array();
			} else {

				$criteria->add(UserfriendPeer::USER_ID, $this->getId());

				$this->collUserfriends = UserfriendPeer::doSelectJoinFriend($criteria, $con);
			}
		} else {
									
			$criteria->add(UserfriendPeer::USER_ID, $this->getId());

			if (!isset($this->lastUserfriendCriteria) || !$this->lastUserfriendCriteria->equals($criteria)) {
				$this->collUserfriends = UserfriendPeer::doSelectJoinFriend($criteria, $con);
			}
		}
		$this->lastUserfriendCriteria = $criteria;

		return $this->collUserfriends;
	}

	
	public function initResumes()
	{
		if ($this->collResumes === null) {
			$this->collResumes = array();
		}
	}

	
	public function getResumes($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseResumePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collResumes === null) {
			if ($this->isNew()) {
			   $this->collResumes = array();
			} else {

				$criteria->add(ResumePeer::USER_ID, $this->getId());

				ResumePeer::addSelectColumns($criteria);
				$this->collResumes = ResumePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ResumePeer::USER_ID, $this->getId());

				ResumePeer::addSelectColumns($criteria);
				if (!isset($this->lastResumeCriteria) || !$this->lastResumeCriteria->equals($criteria)) {
					$this->collResumes = ResumePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastResumeCriteria = $criteria;
		return $this->collResumes;
	}

	
	public function countResumes($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseResumePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ResumePeer::USER_ID, $this->getId());

		return ResumePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addResume(Resume $l)
	{
		$this->collResumes[] = $l;
		$l->setUser($this);
	}

	
	public function initNotess()
	{
		if ($this->collNotess === null) {
			$this->collNotess = array();
		}
	}

	
	public function getNotess($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseNotesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNotess === null) {
			if ($this->isNew()) {
			   $this->collNotess = array();
			} else {

				$criteria->add(NotesPeer::USER_ID, $this->getId());

				NotesPeer::addSelectColumns($criteria);
				$this->collNotess = NotesPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(NotesPeer::USER_ID, $this->getId());

				NotesPeer::addSelectColumns($criteria);
				if (!isset($this->lastNotesCriteria) || !$this->lastNotesCriteria->equals($criteria)) {
					$this->collNotess = NotesPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNotesCriteria = $criteria;
		return $this->collNotess;
	}

	
	public function countNotess($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseNotesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(NotesPeer::USER_ID, $this->getId());

		return NotesPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addNotes(Notes $l)
	{
		$this->collNotess[] = $l;
		$l->setUser($this);
	}

	
	public function initFlagss()
	{
		if ($this->collFlagss === null) {
			$this->collFlagss = array();
		}
	}

	
	public function getFlagss($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFlagsPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFlagss === null) {
			if ($this->isNew()) {
			   $this->collFlagss = array();
			} else {

				$criteria->add(FlagsPeer::USER_ID, $this->getId());

				FlagsPeer::addSelectColumns($criteria);
				$this->collFlagss = FlagsPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(FlagsPeer::USER_ID, $this->getId());

				FlagsPeer::addSelectColumns($criteria);
				if (!isset($this->lastFlagsCriteria) || !$this->lastFlagsCriteria->equals($criteria)) {
					$this->collFlagss = FlagsPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastFlagsCriteria = $criteria;
		return $this->collFlagss;
	}

	
	public function countFlagss($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseFlagsPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(FlagsPeer::USER_ID, $this->getId());

		return FlagsPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addFlags(Flags $l)
	{
		$this->collFlagss[] = $l;
		$l->setUser($this);
	}

} 