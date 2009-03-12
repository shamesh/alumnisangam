<?php


abstract class BaseMag extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $mailinggroup;


	
	protected $year;


	
	protected $branch;


	
	protected $moderatoremail;


	
	protected $details;

	
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

	
	public function getMailinggroup()
	{

		return $this->mailinggroup;
	}

	
	public function getYear()
	{

		return $this->year;
	}

	
	public function getBranch()
	{

		return $this->branch;
	}

	
	public function getModeratoremail()
	{

		return $this->moderatoremail;
	}

	
	public function getDetails()
	{

		return $this->details;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = MagPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = MagPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setMailinggroup($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mailinggroup !== $v) {
			$this->mailinggroup = $v;
			$this->modifiedColumns[] = MagPeer::MAILINGGROUP;
		}

	} 
	
	public function setYear($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->year !== $v) {
			$this->year = $v;
			$this->modifiedColumns[] = MagPeer::YEAR;
		}

	} 
	
	public function setBranch($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->branch !== $v) {
			$this->branch = $v;
			$this->modifiedColumns[] = MagPeer::BRANCH;
		}

	} 
	
	public function setModeratoremail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->moderatoremail !== $v) {
			$this->moderatoremail = $v;
			$this->modifiedColumns[] = MagPeer::MODERATOREMAIL;
		}

	} 
	
	public function setDetails($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->details !== $v) {
			$this->details = $v;
			$this->modifiedColumns[] = MagPeer::DETAILS;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->mailinggroup = $rs->getString($startcol + 2);

			$this->year = $rs->getInt($startcol + 3);

			$this->branch = $rs->getString($startcol + 4);

			$this->moderatoremail = $rs->getString($startcol + 5);

			$this->details = $rs->getString($startcol + 6);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Mag object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MagPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			MagPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(MagPeer::DATABASE_NAME);
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
					$pk = MagPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += MagPeer::doUpdate($this, $con);
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


			if (($retval = MagPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MagPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getMailinggroup();
				break;
			case 3:
				return $this->getYear();
				break;
			case 4:
				return $this->getBranch();
				break;
			case 5:
				return $this->getModeratoremail();
				break;
			case 6:
				return $this->getDetails();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = MagPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getMailinggroup(),
			$keys[3] => $this->getYear(),
			$keys[4] => $this->getBranch(),
			$keys[5] => $this->getModeratoremail(),
			$keys[6] => $this->getDetails(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MagPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setMailinggroup($value);
				break;
			case 3:
				$this->setYear($value);
				break;
			case 4:
				$this->setBranch($value);
				break;
			case 5:
				$this->setModeratoremail($value);
				break;
			case 6:
				$this->setDetails($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = MagPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMailinggroup($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setYear($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setBranch($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setModeratoremail($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDetails($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(MagPeer::DATABASE_NAME);

		if ($this->isColumnModified(MagPeer::ID)) $criteria->add(MagPeer::ID, $this->id);
		if ($this->isColumnModified(MagPeer::USER_ID)) $criteria->add(MagPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(MagPeer::MAILINGGROUP)) $criteria->add(MagPeer::MAILINGGROUP, $this->mailinggroup);
		if ($this->isColumnModified(MagPeer::YEAR)) $criteria->add(MagPeer::YEAR, $this->year);
		if ($this->isColumnModified(MagPeer::BRANCH)) $criteria->add(MagPeer::BRANCH, $this->branch);
		if ($this->isColumnModified(MagPeer::MODERATOREMAIL)) $criteria->add(MagPeer::MODERATOREMAIL, $this->moderatoremail);
		if ($this->isColumnModified(MagPeer::DETAILS)) $criteria->add(MagPeer::DETAILS, $this->details);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(MagPeer::DATABASE_NAME);

		$criteria->add(MagPeer::ID, $this->id);

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

		$copyObj->setMailinggroup($this->mailinggroup);

		$copyObj->setYear($this->year);

		$copyObj->setBranch($this->branch);

		$copyObj->setModeratoremail($this->moderatoremail);

		$copyObj->setDetails($this->details);


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
			self::$peer = new MagPeer();
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