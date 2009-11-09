<?php


abstract class BasePersonalWorktype extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $personal_id;


	
	protected $worktype_id;

	
	protected $aPersonal;

	
	protected $aWorktype;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getPersonalId()
	{

		return $this->personal_id;
	}

	
	public function getWorktypeId()
	{

		return $this->worktype_id;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PersonalWorktypePeer::ID;
		}

	} 
	
	public function setPersonalId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->personal_id !== $v) {
			$this->personal_id = $v;
			$this->modifiedColumns[] = PersonalWorktypePeer::PERSONAL_ID;
		}

		if ($this->aPersonal !== null && $this->aPersonal->getId() !== $v) {
			$this->aPersonal = null;
		}

	} 
	
	public function setWorktypeId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->worktype_id !== $v) {
			$this->worktype_id = $v;
			$this->modifiedColumns[] = PersonalWorktypePeer::WORKTYPE_ID;
		}

		if ($this->aWorktype !== null && $this->aWorktype->getId() !== $v) {
			$this->aWorktype = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->personal_id = $rs->getInt($startcol + 1);

			$this->worktype_id = $rs->getInt($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating PersonalWorktype object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PersonalWorktypePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			PersonalWorktypePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(PersonalWorktypePeer::DATABASE_NAME);
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


												
			if ($this->aPersonal !== null) {
				if ($this->aPersonal->isModified()) {
					$affectedRows += $this->aPersonal->save($con);
				}
				$this->setPersonal($this->aPersonal);
			}

			if ($this->aWorktype !== null) {
				if ($this->aWorktype->isModified()) {
					$affectedRows += $this->aWorktype->save($con);
				}
				$this->setWorktype($this->aWorktype);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = PersonalWorktypePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PersonalWorktypePeer::doUpdate($this, $con);
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


												
			if ($this->aPersonal !== null) {
				if (!$this->aPersonal->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPersonal->getValidationFailures());
				}
			}

			if ($this->aWorktype !== null) {
				if (!$this->aWorktype->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aWorktype->getValidationFailures());
				}
			}


			if (($retval = PersonalWorktypePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PersonalWorktypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getPersonalId();
				break;
			case 2:
				return $this->getWorktypeId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PersonalWorktypePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getPersonalId(),
			$keys[2] => $this->getWorktypeId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PersonalWorktypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setPersonalId($value);
				break;
			case 2:
				$this->setWorktypeId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PersonalWorktypePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPersonalId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setWorktypeId($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PersonalWorktypePeer::DATABASE_NAME);

		if ($this->isColumnModified(PersonalWorktypePeer::ID)) $criteria->add(PersonalWorktypePeer::ID, $this->id);
		if ($this->isColumnModified(PersonalWorktypePeer::PERSONAL_ID)) $criteria->add(PersonalWorktypePeer::PERSONAL_ID, $this->personal_id);
		if ($this->isColumnModified(PersonalWorktypePeer::WORKTYPE_ID)) $criteria->add(PersonalWorktypePeer::WORKTYPE_ID, $this->worktype_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PersonalWorktypePeer::DATABASE_NAME);

		$criteria->add(PersonalWorktypePeer::ID, $this->id);

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

		$copyObj->setPersonalId($this->personal_id);

		$copyObj->setWorktypeId($this->worktype_id);


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
			self::$peer = new PersonalWorktypePeer();
		}
		return self::$peer;
	}

	
	public function setPersonal($v)
	{


		if ($v === null) {
			$this->setPersonalId(NULL);
		} else {
			$this->setPersonalId($v->getId());
		}


		$this->aPersonal = $v;
	}


	
	public function getPersonal($con = null)
	{
				include_once 'lib/model/om/BasePersonalPeer.php';

		if ($this->aPersonal === null && ($this->personal_id !== null)) {

			$this->aPersonal = PersonalPeer::retrieveByPK($this->personal_id, $con);

			
		}
		return $this->aPersonal;
	}

	
	public function setWorktype($v)
	{


		if ($v === null) {
			$this->setWorktypeId(NULL);
		} else {
			$this->setWorktypeId($v->getId());
		}


		$this->aWorktype = $v;
	}


	
	public function getWorktype($con = null)
	{
				include_once 'lib/model/om/BaseWorktypePeer.php';

		if ($this->aWorktype === null && ($this->worktype_id !== null)) {

			$this->aWorktype = WorktypePeer::retrieveByPK($this->worktype_id, $con);

			
		}
		return $this->aWorktype;
	}

} 