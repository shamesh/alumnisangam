<?php


abstract class BaseUserhobbies extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $hobbies_id;


	
	protected $other;


	
	protected $hobbiesflag;

	
	protected $aUser;

	
	protected $aHobbies;

	
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

	
	public function getHobbiesId()
	{

		return $this->hobbies_id;
	}

	
	public function getOther()
	{

		return $this->other;
	}

	
	public function getHobbiesflag()
	{

		return $this->hobbiesflag;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = UserhobbiesPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = UserhobbiesPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setHobbiesId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->hobbies_id !== $v) {
			$this->hobbies_id = $v;
			$this->modifiedColumns[] = UserhobbiesPeer::HOBBIES_ID;
		}

		if ($this->aHobbies !== null && $this->aHobbies->getId() !== $v) {
			$this->aHobbies = null;
		}

	} 
	
	public function setOther($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->other !== $v) {
			$this->other = $v;
			$this->modifiedColumns[] = UserhobbiesPeer::OTHER;
		}

	} 
	
	public function setHobbiesflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hobbiesflag !== $v) {
			$this->hobbiesflag = $v;
			$this->modifiedColumns[] = UserhobbiesPeer::HOBBIESFLAG;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->hobbies_id = $rs->getInt($startcol + 2);

			$this->other = $rs->getString($startcol + 3);

			$this->hobbiesflag = $rs->getString($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Userhobbies object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserhobbiesPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			UserhobbiesPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(UserhobbiesPeer::DATABASE_NAME);
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

			if ($this->aHobbies !== null) {
				if ($this->aHobbies->isModified()) {
					$affectedRows += $this->aHobbies->save($con);
				}
				$this->setHobbies($this->aHobbies);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = UserhobbiesPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += UserhobbiesPeer::doUpdate($this, $con);
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

			if ($this->aHobbies !== null) {
				if (!$this->aHobbies->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aHobbies->getValidationFailures());
				}
			}


			if (($retval = UserhobbiesPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserhobbiesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getHobbiesId();
				break;
			case 3:
				return $this->getOther();
				break;
			case 4:
				return $this->getHobbiesflag();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserhobbiesPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getHobbiesId(),
			$keys[3] => $this->getOther(),
			$keys[4] => $this->getHobbiesflag(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserhobbiesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setHobbiesId($value);
				break;
			case 3:
				$this->setOther($value);
				break;
			case 4:
				$this->setHobbiesflag($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserhobbiesPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setHobbiesId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setOther($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setHobbiesflag($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(UserhobbiesPeer::DATABASE_NAME);

		if ($this->isColumnModified(UserhobbiesPeer::ID)) $criteria->add(UserhobbiesPeer::ID, $this->id);
		if ($this->isColumnModified(UserhobbiesPeer::USER_ID)) $criteria->add(UserhobbiesPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(UserhobbiesPeer::HOBBIES_ID)) $criteria->add(UserhobbiesPeer::HOBBIES_ID, $this->hobbies_id);
		if ($this->isColumnModified(UserhobbiesPeer::OTHER)) $criteria->add(UserhobbiesPeer::OTHER, $this->other);
		if ($this->isColumnModified(UserhobbiesPeer::HOBBIESFLAG)) $criteria->add(UserhobbiesPeer::HOBBIESFLAG, $this->hobbiesflag);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UserhobbiesPeer::DATABASE_NAME);

		$criteria->add(UserhobbiesPeer::ID, $this->id);

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

		$copyObj->setHobbiesId($this->hobbies_id);

		$copyObj->setOther($this->other);

		$copyObj->setHobbiesflag($this->hobbiesflag);


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
			self::$peer = new UserhobbiesPeer();
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

	
	public function setHobbies($v)
	{


		if ($v === null) {
			$this->setHobbiesId(NULL);
		} else {
			$this->setHobbiesId($v->getId());
		}


		$this->aHobbies = $v;
	}


	
	public function getHobbies($con = null)
	{
				include_once 'lib/model/om/BaseHobbiesPeer.php';

		if ($this->aHobbies === null && ($this->hobbies_id !== null)) {

			$this->aHobbies = HobbiesPeer::retrieveByPK($this->hobbies_id, $con);

			
		}
		return $this->aHobbies;
	}

} 