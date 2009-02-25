<?php


abstract class BasePersonal extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $image;


	
	protected $imageflag;


	
	protected $salutation;


	
	protected $firstname;


	
	protected $firstnameflag;


	
	protected $middlename;


	
	protected $middlenameflag;


	
	protected $lastname;


	
	protected $lastnameflag;


	
	protected $maidenname;


	
	protected $maidennameflag;


	
	protected $itbhuname;


	
	protected $itbhunameflag;


	
	protected $gender;


	
	protected $genderflag;


	
	protected $dob;


	
	protected $dobflag;


	
	protected $maritalstatus;


	
	protected $maritalstatusflag;


	
	protected $email;


	
	protected $emailflag;


	
	protected $website;


	
	protected $websiteflag;


	
	protected $linkedin;


	
	protected $linkedinflag;

	
	protected $aUser;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getUserId()
	{

		return $this->user_id;
	}

	
	public function getImage()
	{

		return $this->image;
	}

	
	public function getImageflag()
	{

		return $this->imageflag;
	}

	
	public function getSalutation()
	{

		return $this->salutation;
	}

	
	public function getFirstname()
	{

		return $this->firstname;
	}

	
	public function getFirstnameflag()
	{

		return $this->firstnameflag;
	}

	
	public function getMiddlename()
	{

		return $this->middlename;
	}

	
	public function getMiddlenameflag()
	{

		return $this->middlenameflag;
	}

	
	public function getLastname()
	{

		return $this->lastname;
	}

	
	public function getLastnameflag()
	{

		return $this->lastnameflag;
	}

	
	public function getMaidenname()
	{

		return $this->maidenname;
	}

	
	public function getMaidennameflag()
	{

		return $this->maidennameflag;
	}

	
	public function getItbhuname()
	{

		return $this->itbhuname;
	}

	
	public function getItbhunameflag()
	{

		return $this->itbhunameflag;
	}

	
	public function getGender()
	{

		return $this->gender;
	}

	
	public function getGenderflag()
	{

		return $this->genderflag;
	}

	
	public function getDob($format = 'Y-m-d')
	{

		if ($this->dob === null || $this->dob === '') {
			return null;
		} elseif (!is_int($this->dob)) {
						$ts = strtotime($this->dob);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [dob] as date/time value: " . var_export($this->dob, true));
			}
		} else {
			$ts = $this->dob;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDobflag()
	{

		return $this->dobflag;
	}

	
	public function getMaritalstatus()
	{

		return $this->maritalstatus;
	}

	
	public function getMaritalstatusflag()
	{

		return $this->maritalstatusflag;
	}

	
	public function getEmail()
	{

		return $this->email;
	}

	
	public function getEmailflag()
	{

		return $this->emailflag;
	}

	
	public function getWebsite()
	{

		return $this->website;
	}

	
	public function getWebsiteflag()
	{

		return $this->websiteflag;
	}

	
	public function getLinkedin()
	{

		return $this->linkedin;
	}

	
	public function getLinkedinflag()
	{

		return $this->linkedinflag;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PersonalPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = PersonalPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setImage($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->image !== $v) {
			$this->image = $v;
			$this->modifiedColumns[] = PersonalPeer::IMAGE;
		}

	} 
	
	public function setImageflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->imageflag !== $v) {
			$this->imageflag = $v;
			$this->modifiedColumns[] = PersonalPeer::IMAGEFLAG;
		}

	} 
	
	public function setSalutation($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->salutation !== $v) {
			$this->salutation = $v;
			$this->modifiedColumns[] = PersonalPeer::SALUTATION;
		}

	} 
	
	public function setFirstname($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->firstname !== $v) {
			$this->firstname = $v;
			$this->modifiedColumns[] = PersonalPeer::FIRSTNAME;
		}

	} 
	
	public function setFirstnameflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->firstnameflag !== $v) {
			$this->firstnameflag = $v;
			$this->modifiedColumns[] = PersonalPeer::FIRSTNAMEFLAG;
		}

	} 
	
	public function setMiddlename($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->middlename !== $v) {
			$this->middlename = $v;
			$this->modifiedColumns[] = PersonalPeer::MIDDLENAME;
		}

	} 
	
	public function setMiddlenameflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->middlenameflag !== $v) {
			$this->middlenameflag = $v;
			$this->modifiedColumns[] = PersonalPeer::MIDDLENAMEFLAG;
		}

	} 
	
	public function setLastname($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lastname !== $v) {
			$this->lastname = $v;
			$this->modifiedColumns[] = PersonalPeer::LASTNAME;
		}

	} 
	
	public function setLastnameflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lastnameflag !== $v) {
			$this->lastnameflag = $v;
			$this->modifiedColumns[] = PersonalPeer::LASTNAMEFLAG;
		}

	} 
	
	public function setMaidenname($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->maidenname !== $v) {
			$this->maidenname = $v;
			$this->modifiedColumns[] = PersonalPeer::MAIDENNAME;
		}

	} 
	
	public function setMaidennameflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->maidennameflag !== $v) {
			$this->maidennameflag = $v;
			$this->modifiedColumns[] = PersonalPeer::MAIDENNAMEFLAG;
		}

	} 
	
	public function setItbhuname($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->itbhuname !== $v) {
			$this->itbhuname = $v;
			$this->modifiedColumns[] = PersonalPeer::ITBHUNAME;
		}

	} 
	
	public function setItbhunameflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->itbhunameflag !== $v) {
			$this->itbhunameflag = $v;
			$this->modifiedColumns[] = PersonalPeer::ITBHUNAMEFLAG;
		}

	} 
	
	public function setGender($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->gender !== $v) {
			$this->gender = $v;
			$this->modifiedColumns[] = PersonalPeer::GENDER;
		}

	} 
	
	public function setGenderflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->genderflag !== $v) {
			$this->genderflag = $v;
			$this->modifiedColumns[] = PersonalPeer::GENDERFLAG;
		}

	} 
	
	public function setDob($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [dob] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->dob !== $ts) {
			$this->dob = $ts;
			$this->modifiedColumns[] = PersonalPeer::DOB;
		}

	} 
	
	public function setDobflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dobflag !== $v) {
			$this->dobflag = $v;
			$this->modifiedColumns[] = PersonalPeer::DOBFLAG;
		}

	} 
	
	public function setMaritalstatus($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->maritalstatus !== $v) {
			$this->maritalstatus = $v;
			$this->modifiedColumns[] = PersonalPeer::MARITALSTATUS;
		}

	} 
	
	public function setMaritalstatusflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->maritalstatusflag !== $v) {
			$this->maritalstatusflag = $v;
			$this->modifiedColumns[] = PersonalPeer::MARITALSTATUSFLAG;
		}

	} 
	
	public function setEmail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = PersonalPeer::EMAIL;
		}

	} 
	
	public function setEmailflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->emailflag !== $v) {
			$this->emailflag = $v;
			$this->modifiedColumns[] = PersonalPeer::EMAILFLAG;
		}

	} 
	
	public function setWebsite($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->website !== $v) {
			$this->website = $v;
			$this->modifiedColumns[] = PersonalPeer::WEBSITE;
		}

	} 
	
	public function setWebsiteflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->websiteflag !== $v) {
			$this->websiteflag = $v;
			$this->modifiedColumns[] = PersonalPeer::WEBSITEFLAG;
		}

	} 
	
	public function setLinkedin($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->linkedin !== $v) {
			$this->linkedin = $v;
			$this->modifiedColumns[] = PersonalPeer::LINKEDIN;
		}

	} 
	
	public function setLinkedinflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->linkedinflag !== $v) {
			$this->linkedinflag = $v;
			$this->modifiedColumns[] = PersonalPeer::LINKEDINFLAG;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->image = $rs->getString($startcol + 2);

			$this->imageflag = $rs->getString($startcol + 3);

			$this->salutation = $rs->getString($startcol + 4);

			$this->firstname = $rs->getString($startcol + 5);

			$this->firstnameflag = $rs->getString($startcol + 6);

			$this->middlename = $rs->getString($startcol + 7);

			$this->middlenameflag = $rs->getString($startcol + 8);

			$this->lastname = $rs->getString($startcol + 9);

			$this->lastnameflag = $rs->getString($startcol + 10);

			$this->maidenname = $rs->getString($startcol + 11);

			$this->maidennameflag = $rs->getString($startcol + 12);

			$this->itbhuname = $rs->getString($startcol + 13);

			$this->itbhunameflag = $rs->getString($startcol + 14);

			$this->gender = $rs->getString($startcol + 15);

			$this->genderflag = $rs->getString($startcol + 16);

			$this->dob = $rs->getDate($startcol + 17, null);

			$this->dobflag = $rs->getString($startcol + 18);

			$this->maritalstatus = $rs->getString($startcol + 19);

			$this->maritalstatusflag = $rs->getString($startcol + 20);

			$this->email = $rs->getString($startcol + 21);

			$this->emailflag = $rs->getString($startcol + 22);

			$this->website = $rs->getString($startcol + 23);

			$this->websiteflag = $rs->getString($startcol + 24);

			$this->linkedin = $rs->getString($startcol + 25);

			$this->linkedinflag = $rs->getString($startcol + 26);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 27; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Personal object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PersonalPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			PersonalPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(PersonalPeer::DATABASE_NAME);
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


												
			if ($this->aUser !== null) {
				if ($this->aUser->isModified()) {
					$affectedRows += $this->aUser->save($con);
				}
				$this->setUser($this->aUser);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = PersonalPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PersonalPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

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


												
			if ($this->aUser !== null) {
				if (!$this->aUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
				}
			}


			if (($retval = PersonalPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PersonalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getUserId();
				break;
			case 2:
				return $this->getImage();
				break;
			case 3:
				return $this->getImageflag();
				break;
			case 4:
				return $this->getSalutation();
				break;
			case 5:
				return $this->getFirstname();
				break;
			case 6:
				return $this->getFirstnameflag();
				break;
			case 7:
				return $this->getMiddlename();
				break;
			case 8:
				return $this->getMiddlenameflag();
				break;
			case 9:
				return $this->getLastname();
				break;
			case 10:
				return $this->getLastnameflag();
				break;
			case 11:
				return $this->getMaidenname();
				break;
			case 12:
				return $this->getMaidennameflag();
				break;
			case 13:
				return $this->getItbhuname();
				break;
			case 14:
				return $this->getItbhunameflag();
				break;
			case 15:
				return $this->getGender();
				break;
			case 16:
				return $this->getGenderflag();
				break;
			case 17:
				return $this->getDob();
				break;
			case 18:
				return $this->getDobflag();
				break;
			case 19:
				return $this->getMaritalstatus();
				break;
			case 20:
				return $this->getMaritalstatusflag();
				break;
			case 21:
				return $this->getEmail();
				break;
			case 22:
				return $this->getEmailflag();
				break;
			case 23:
				return $this->getWebsite();
				break;
			case 24:
				return $this->getWebsiteflag();
				break;
			case 25:
				return $this->getLinkedin();
				break;
			case 26:
				return $this->getLinkedinflag();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PersonalPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getImage(),
			$keys[3] => $this->getImageflag(),
			$keys[4] => $this->getSalutation(),
			$keys[5] => $this->getFirstname(),
			$keys[6] => $this->getFirstnameflag(),
			$keys[7] => $this->getMiddlename(),
			$keys[8] => $this->getMiddlenameflag(),
			$keys[9] => $this->getLastname(),
			$keys[10] => $this->getLastnameflag(),
			$keys[11] => $this->getMaidenname(),
			$keys[12] => $this->getMaidennameflag(),
			$keys[13] => $this->getItbhuname(),
			$keys[14] => $this->getItbhunameflag(),
			$keys[15] => $this->getGender(),
			$keys[16] => $this->getGenderflag(),
			$keys[17] => $this->getDob(),
			$keys[18] => $this->getDobflag(),
			$keys[19] => $this->getMaritalstatus(),
			$keys[20] => $this->getMaritalstatusflag(),
			$keys[21] => $this->getEmail(),
			$keys[22] => $this->getEmailflag(),
			$keys[23] => $this->getWebsite(),
			$keys[24] => $this->getWebsiteflag(),
			$keys[25] => $this->getLinkedin(),
			$keys[26] => $this->getLinkedinflag(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PersonalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setUserId($value);
				break;
			case 2:
				$this->setImage($value);
				break;
			case 3:
				$this->setImageflag($value);
				break;
			case 4:
				$this->setSalutation($value);
				break;
			case 5:
				$this->setFirstname($value);
				break;
			case 6:
				$this->setFirstnameflag($value);
				break;
			case 7:
				$this->setMiddlename($value);
				break;
			case 8:
				$this->setMiddlenameflag($value);
				break;
			case 9:
				$this->setLastname($value);
				break;
			case 10:
				$this->setLastnameflag($value);
				break;
			case 11:
				$this->setMaidenname($value);
				break;
			case 12:
				$this->setMaidennameflag($value);
				break;
			case 13:
				$this->setItbhuname($value);
				break;
			case 14:
				$this->setItbhunameflag($value);
				break;
			case 15:
				$this->setGender($value);
				break;
			case 16:
				$this->setGenderflag($value);
				break;
			case 17:
				$this->setDob($value);
				break;
			case 18:
				$this->setDobflag($value);
				break;
			case 19:
				$this->setMaritalstatus($value);
				break;
			case 20:
				$this->setMaritalstatusflag($value);
				break;
			case 21:
				$this->setEmail($value);
				break;
			case 22:
				$this->setEmailflag($value);
				break;
			case 23:
				$this->setWebsite($value);
				break;
			case 24:
				$this->setWebsiteflag($value);
				break;
			case 25:
				$this->setLinkedin($value);
				break;
			case 26:
				$this->setLinkedinflag($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PersonalPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setImage($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setImageflag($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSalutation($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFirstname($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFirstnameflag($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setMiddlename($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setMiddlenameflag($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setLastname($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setLastnameflag($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setMaidenname($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setMaidennameflag($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setItbhuname($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setItbhunameflag($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setGender($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setGenderflag($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setDob($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDobflag($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setMaritalstatus($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setMaritalstatusflag($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setEmail($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setEmailflag($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setWebsite($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setWebsiteflag($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setLinkedin($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setLinkedinflag($arr[$keys[26]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PersonalPeer::DATABASE_NAME);

		if ($this->isColumnModified(PersonalPeer::ID)) $criteria->add(PersonalPeer::ID, $this->id);
		if ($this->isColumnModified(PersonalPeer::USER_ID)) $criteria->add(PersonalPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(PersonalPeer::IMAGE)) $criteria->add(PersonalPeer::IMAGE, $this->image);
		if ($this->isColumnModified(PersonalPeer::IMAGEFLAG)) $criteria->add(PersonalPeer::IMAGEFLAG, $this->imageflag);
		if ($this->isColumnModified(PersonalPeer::SALUTATION)) $criteria->add(PersonalPeer::SALUTATION, $this->salutation);
		if ($this->isColumnModified(PersonalPeer::FIRSTNAME)) $criteria->add(PersonalPeer::FIRSTNAME, $this->firstname);
		if ($this->isColumnModified(PersonalPeer::FIRSTNAMEFLAG)) $criteria->add(PersonalPeer::FIRSTNAMEFLAG, $this->firstnameflag);
		if ($this->isColumnModified(PersonalPeer::MIDDLENAME)) $criteria->add(PersonalPeer::MIDDLENAME, $this->middlename);
		if ($this->isColumnModified(PersonalPeer::MIDDLENAMEFLAG)) $criteria->add(PersonalPeer::MIDDLENAMEFLAG, $this->middlenameflag);
		if ($this->isColumnModified(PersonalPeer::LASTNAME)) $criteria->add(PersonalPeer::LASTNAME, $this->lastname);
		if ($this->isColumnModified(PersonalPeer::LASTNAMEFLAG)) $criteria->add(PersonalPeer::LASTNAMEFLAG, $this->lastnameflag);
		if ($this->isColumnModified(PersonalPeer::MAIDENNAME)) $criteria->add(PersonalPeer::MAIDENNAME, $this->maidenname);
		if ($this->isColumnModified(PersonalPeer::MAIDENNAMEFLAG)) $criteria->add(PersonalPeer::MAIDENNAMEFLAG, $this->maidennameflag);
		if ($this->isColumnModified(PersonalPeer::ITBHUNAME)) $criteria->add(PersonalPeer::ITBHUNAME, $this->itbhuname);
		if ($this->isColumnModified(PersonalPeer::ITBHUNAMEFLAG)) $criteria->add(PersonalPeer::ITBHUNAMEFLAG, $this->itbhunameflag);
		if ($this->isColumnModified(PersonalPeer::GENDER)) $criteria->add(PersonalPeer::GENDER, $this->gender);
		if ($this->isColumnModified(PersonalPeer::GENDERFLAG)) $criteria->add(PersonalPeer::GENDERFLAG, $this->genderflag);
		if ($this->isColumnModified(PersonalPeer::DOB)) $criteria->add(PersonalPeer::DOB, $this->dob);
		if ($this->isColumnModified(PersonalPeer::DOBFLAG)) $criteria->add(PersonalPeer::DOBFLAG, $this->dobflag);
		if ($this->isColumnModified(PersonalPeer::MARITALSTATUS)) $criteria->add(PersonalPeer::MARITALSTATUS, $this->maritalstatus);
		if ($this->isColumnModified(PersonalPeer::MARITALSTATUSFLAG)) $criteria->add(PersonalPeer::MARITALSTATUSFLAG, $this->maritalstatusflag);
		if ($this->isColumnModified(PersonalPeer::EMAIL)) $criteria->add(PersonalPeer::EMAIL, $this->email);
		if ($this->isColumnModified(PersonalPeer::EMAILFLAG)) $criteria->add(PersonalPeer::EMAILFLAG, $this->emailflag);
		if ($this->isColumnModified(PersonalPeer::WEBSITE)) $criteria->add(PersonalPeer::WEBSITE, $this->website);
		if ($this->isColumnModified(PersonalPeer::WEBSITEFLAG)) $criteria->add(PersonalPeer::WEBSITEFLAG, $this->websiteflag);
		if ($this->isColumnModified(PersonalPeer::LINKEDIN)) $criteria->add(PersonalPeer::LINKEDIN, $this->linkedin);
		if ($this->isColumnModified(PersonalPeer::LINKEDINFLAG)) $criteria->add(PersonalPeer::LINKEDINFLAG, $this->linkedinflag);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PersonalPeer::DATABASE_NAME);

		$criteria->add(PersonalPeer::ID, $this->id);

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

		$copyObj->setUserId($this->user_id);

		$copyObj->setImage($this->image);

		$copyObj->setImageflag($this->imageflag);

		$copyObj->setSalutation($this->salutation);

		$copyObj->setFirstname($this->firstname);

		$copyObj->setFirstnameflag($this->firstnameflag);

		$copyObj->setMiddlename($this->middlename);

		$copyObj->setMiddlenameflag($this->middlenameflag);

		$copyObj->setLastname($this->lastname);

		$copyObj->setLastnameflag($this->lastnameflag);

		$copyObj->setMaidenname($this->maidenname);

		$copyObj->setMaidennameflag($this->maidennameflag);

		$copyObj->setItbhuname($this->itbhuname);

		$copyObj->setItbhunameflag($this->itbhunameflag);

		$copyObj->setGender($this->gender);

		$copyObj->setGenderflag($this->genderflag);

		$copyObj->setDob($this->dob);

		$copyObj->setDobflag($this->dobflag);

		$copyObj->setMaritalstatus($this->maritalstatus);

		$copyObj->setMaritalstatusflag($this->maritalstatusflag);

		$copyObj->setEmail($this->email);

		$copyObj->setEmailflag($this->emailflag);

		$copyObj->setWebsite($this->website);

		$copyObj->setWebsiteflag($this->websiteflag);

		$copyObj->setLinkedin($this->linkedin);

		$copyObj->setLinkedinflag($this->linkedinflag);


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
			self::$peer = new PersonalPeer();
		}
		return self::$peer;
	}

	
	public function setUser($v)
	{


		if ($v === null) {
			$this->setUserId(NULL);
		} else {
			$this->setUserId($v->getId());
		}


		$this->aUser = $v;
	}


	
	public function getUser($con = null)
	{
				include_once 'lib/model/om/BaseUserPeer.php';

		if ($this->aUser === null && ($this->user_id !== null)) {

			$this->aUser = UserPeer::retrieveByPK($this->user_id, $con);

			
		}
		return $this->aUser;
	}

} 