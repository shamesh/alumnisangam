<?php


abstract class BaseProfessional extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $employer;


	
	protected $employerflag;


	
	protected $position;


	
	protected $positionflag;


	
	protected $from;


	
	protected $to;

	
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

	
	public function getEmployer()
	{

		return $this->employer;
	}

	
	public function getEmployerflag()
	{

		return $this->employerflag;
	}

	
	public function getPosition()
	{

		return $this->position;
	}

	
	public function getPositionflag()
	{

		return $this->positionflag;
	}

	
	public function getFrom($format = 'Y-m-d')
	{

		if ($this->from === null || $this->from === '') {
			return null;
		} elseif (!is_int($this->from)) {
						$ts = strtotime($this->from);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [from] as date/time value: " . var_export($this->from, true));
			}
		} else {
			$ts = $this->from;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getTo($format = 'Y-m-d')
	{

		if ($this->to === null || $this->to === '') {
			return null;
		} elseif (!is_int($this->to)) {
						$ts = strtotime($this->to);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [to] as date/time value: " . var_export($this->to, true));
			}
		} else {
			$ts = $this->to;
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
			$this->modifiedColumns[] = ProfessionalPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = ProfessionalPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setEmployer($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employer !== $v) {
			$this->employer = $v;
			$this->modifiedColumns[] = ProfessionalPeer::EMPLOYER;
		}

	} 
	
	public function setEmployerflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employerflag !== $v) {
			$this->employerflag = $v;
			$this->modifiedColumns[] = ProfessionalPeer::EMPLOYERFLAG;
		}

	} 
	
	public function setPosition($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->position !== $v) {
			$this->position = $v;
			$this->modifiedColumns[] = ProfessionalPeer::POSITION;
		}

	} 
	
	public function setPositionflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->positionflag !== $v) {
			$this->positionflag = $v;
			$this->modifiedColumns[] = ProfessionalPeer::POSITIONFLAG;
		}

	} 
	
	public function setFrom($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [from] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->from !== $ts) {
			$this->from = $ts;
			$this->modifiedColumns[] = ProfessionalPeer::FROM;
		}

	} 
	
	public function setTo($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [to] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->to !== $ts) {
			$this->to = $ts;
			$this->modifiedColumns[] = ProfessionalPeer::TO;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->employer = $rs->getString($startcol + 2);

			$this->employerflag = $rs->getString($startcol + 3);

			$this->position = $rs->getString($startcol + 4);

			$this->positionflag = $rs->getString($startcol + 5);

			$this->from = $rs->getDate($startcol + 6, null);

			$this->to = $rs->getDate($startcol + 7, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Professional object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProfessionalPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ProfessionalPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ProfessionalPeer::DATABASE_NAME);
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
					$pk = ProfessionalPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ProfessionalPeer::doUpdate($this, $con);
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


			if (($retval = ProfessionalPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProfessionalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getEmployer();
				break;
			case 3:
				return $this->getEmployerflag();
				break;
			case 4:
				return $this->getPosition();
				break;
			case 5:
				return $this->getPositionflag();
				break;
			case 6:
				return $this->getFrom();
				break;
			case 7:
				return $this->getTo();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProfessionalPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getEmployer(),
			$keys[3] => $this->getEmployerflag(),
			$keys[4] => $this->getPosition(),
			$keys[5] => $this->getPositionflag(),
			$keys[6] => $this->getFrom(),
			$keys[7] => $this->getTo(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProfessionalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setEmployer($value);
				break;
			case 3:
				$this->setEmployerflag($value);
				break;
			case 4:
				$this->setPosition($value);
				break;
			case 5:
				$this->setPositionflag($value);
				break;
			case 6:
				$this->setFrom($value);
				break;
			case 7:
				$this->setTo($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProfessionalPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setEmployer($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setEmployerflag($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPosition($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPositionflag($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFrom($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTo($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ProfessionalPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProfessionalPeer::ID)) $criteria->add(ProfessionalPeer::ID, $this->id);
		if ($this->isColumnModified(ProfessionalPeer::USER_ID)) $criteria->add(ProfessionalPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(ProfessionalPeer::EMPLOYER)) $criteria->add(ProfessionalPeer::EMPLOYER, $this->employer);
		if ($this->isColumnModified(ProfessionalPeer::EMPLOYERFLAG)) $criteria->add(ProfessionalPeer::EMPLOYERFLAG, $this->employerflag);
		if ($this->isColumnModified(ProfessionalPeer::POSITION)) $criteria->add(ProfessionalPeer::POSITION, $this->position);
		if ($this->isColumnModified(ProfessionalPeer::POSITIONFLAG)) $criteria->add(ProfessionalPeer::POSITIONFLAG, $this->positionflag);
		if ($this->isColumnModified(ProfessionalPeer::FROM)) $criteria->add(ProfessionalPeer::FROM, $this->from);
		if ($this->isColumnModified(ProfessionalPeer::TO)) $criteria->add(ProfessionalPeer::TO, $this->to);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ProfessionalPeer::DATABASE_NAME);

		$criteria->add(ProfessionalPeer::ID, $this->id);

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

		$copyObj->setEmployer($this->employer);

		$copyObj->setEmployerflag($this->employerflag);

		$copyObj->setPosition($this->position);

		$copyObj->setPositionflag($this->positionflag);

		$copyObj->setFrom($this->from);

		$copyObj->setTo($this->to);


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
			self::$peer = new ProfessionalPeer();
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