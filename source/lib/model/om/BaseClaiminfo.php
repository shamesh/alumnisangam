<?php


abstract class BaseClaiminfo extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $roll;


	
	protected $hawa;


	
	protected $city;


	
	protected $hod;


	
	protected $director;


	
	protected $teacher;


	
	protected $lankashop;


	
	protected $other;


	
	protected $dusername;

	
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

	
	public function getRoll()
	{

		return $this->roll;
	}

	
	public function getHawa()
	{

		return $this->hawa;
	}

	
	public function getCity()
	{

		return $this->city;
	}

	
	public function getHod()
	{

		return $this->hod;
	}

	
	public function getDirector()
	{

		return $this->director;
	}

	
	public function getTeacher()
	{

		return $this->teacher;
	}

	
	public function getLankashop()
	{

		return $this->lankashop;
	}

	
	public function getOther()
	{

		return $this->other;
	}

	
	public function getDusername()
	{

		return $this->dusername;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ClaiminfoPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = ClaiminfoPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setRoll($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->roll !== $v) {
			$this->roll = $v;
			$this->modifiedColumns[] = ClaiminfoPeer::ROLL;
		}

	} 
	
	public function setHawa($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hawa !== $v) {
			$this->hawa = $v;
			$this->modifiedColumns[] = ClaiminfoPeer::HAWA;
		}

	} 
	
	public function setCity($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->city !== $v) {
			$this->city = $v;
			$this->modifiedColumns[] = ClaiminfoPeer::CITY;
		}

	} 
	
	public function setHod($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hod !== $v) {
			$this->hod = $v;
			$this->modifiedColumns[] = ClaiminfoPeer::HOD;
		}

	} 
	
	public function setDirector($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->director !== $v) {
			$this->director = $v;
			$this->modifiedColumns[] = ClaiminfoPeer::DIRECTOR;
		}

	} 
	
	public function setTeacher($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->teacher !== $v) {
			$this->teacher = $v;
			$this->modifiedColumns[] = ClaiminfoPeer::TEACHER;
		}

	} 
	
	public function setLankashop($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lankashop !== $v) {
			$this->lankashop = $v;
			$this->modifiedColumns[] = ClaiminfoPeer::LANKASHOP;
		}

	} 
	
	public function setOther($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->other !== $v) {
			$this->other = $v;
			$this->modifiedColumns[] = ClaiminfoPeer::OTHER;
		}

	} 
	
	public function setDusername($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dusername !== $v) {
			$this->dusername = $v;
			$this->modifiedColumns[] = ClaiminfoPeer::DUSERNAME;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->roll = $rs->getString($startcol + 2);

			$this->hawa = $rs->getString($startcol + 3);

			$this->city = $rs->getString($startcol + 4);

			$this->hod = $rs->getString($startcol + 5);

			$this->director = $rs->getString($startcol + 6);

			$this->teacher = $rs->getString($startcol + 7);

			$this->lankashop = $rs->getString($startcol + 8);

			$this->other = $rs->getString($startcol + 9);

			$this->dusername = $rs->getString($startcol + 10);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 11; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Claiminfo object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ClaiminfoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ClaiminfoPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ClaiminfoPeer::DATABASE_NAME);
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
					$pk = ClaiminfoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ClaiminfoPeer::doUpdate($this, $con);
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


			if (($retval = ClaiminfoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ClaiminfoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getRoll();
				break;
			case 3:
				return $this->getHawa();
				break;
			case 4:
				return $this->getCity();
				break;
			case 5:
				return $this->getHod();
				break;
			case 6:
				return $this->getDirector();
				break;
			case 7:
				return $this->getTeacher();
				break;
			case 8:
				return $this->getLankashop();
				break;
			case 9:
				return $this->getOther();
				break;
			case 10:
				return $this->getDusername();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ClaiminfoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getRoll(),
			$keys[3] => $this->getHawa(),
			$keys[4] => $this->getCity(),
			$keys[5] => $this->getHod(),
			$keys[6] => $this->getDirector(),
			$keys[7] => $this->getTeacher(),
			$keys[8] => $this->getLankashop(),
			$keys[9] => $this->getOther(),
			$keys[10] => $this->getDusername(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ClaiminfoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setRoll($value);
				break;
			case 3:
				$this->setHawa($value);
				break;
			case 4:
				$this->setCity($value);
				break;
			case 5:
				$this->setHod($value);
				break;
			case 6:
				$this->setDirector($value);
				break;
			case 7:
				$this->setTeacher($value);
				break;
			case 8:
				$this->setLankashop($value);
				break;
			case 9:
				$this->setOther($value);
				break;
			case 10:
				$this->setDusername($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ClaiminfoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setRoll($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setHawa($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCity($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setHod($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDirector($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTeacher($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setLankashop($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setOther($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDusername($arr[$keys[10]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ClaiminfoPeer::DATABASE_NAME);

		if ($this->isColumnModified(ClaiminfoPeer::ID)) $criteria->add(ClaiminfoPeer::ID, $this->id);
		if ($this->isColumnModified(ClaiminfoPeer::USER_ID)) $criteria->add(ClaiminfoPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(ClaiminfoPeer::ROLL)) $criteria->add(ClaiminfoPeer::ROLL, $this->roll);
		if ($this->isColumnModified(ClaiminfoPeer::HAWA)) $criteria->add(ClaiminfoPeer::HAWA, $this->hawa);
		if ($this->isColumnModified(ClaiminfoPeer::CITY)) $criteria->add(ClaiminfoPeer::CITY, $this->city);
		if ($this->isColumnModified(ClaiminfoPeer::HOD)) $criteria->add(ClaiminfoPeer::HOD, $this->hod);
		if ($this->isColumnModified(ClaiminfoPeer::DIRECTOR)) $criteria->add(ClaiminfoPeer::DIRECTOR, $this->director);
		if ($this->isColumnModified(ClaiminfoPeer::TEACHER)) $criteria->add(ClaiminfoPeer::TEACHER, $this->teacher);
		if ($this->isColumnModified(ClaiminfoPeer::LANKASHOP)) $criteria->add(ClaiminfoPeer::LANKASHOP, $this->lankashop);
		if ($this->isColumnModified(ClaiminfoPeer::OTHER)) $criteria->add(ClaiminfoPeer::OTHER, $this->other);
		if ($this->isColumnModified(ClaiminfoPeer::DUSERNAME)) $criteria->add(ClaiminfoPeer::DUSERNAME, $this->dusername);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ClaiminfoPeer::DATABASE_NAME);

		$criteria->add(ClaiminfoPeer::ID, $this->id);

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

		$copyObj->setRoll($this->roll);

		$copyObj->setHawa($this->hawa);

		$copyObj->setCity($this->city);

		$copyObj->setHod($this->hod);

		$copyObj->setDirector($this->director);

		$copyObj->setTeacher($this->teacher);

		$copyObj->setLankashop($this->lankashop);

		$copyObj->setOther($this->other);

		$copyObj->setDusername($this->dusername);


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
			self::$peer = new ClaiminfoPeer();
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