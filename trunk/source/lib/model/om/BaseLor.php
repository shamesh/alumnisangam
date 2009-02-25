<?php


abstract class BaseLor extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $location;


	
	protected $employer;


	
	protected $position;


	
	protected $linkedin;


	
	protected $general;

	
	protected $aUser;

	
	protected $collLorusers;

	
	protected $lastLoruserCriteria = null;

	
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

	
	public function getLocation()
	{

		return $this->location;
	}

	
	public function getEmployer()
	{

		return $this->employer;
	}

	
	public function getPosition()
	{

		return $this->position;
	}

	
	public function getLinkedin()
	{

		return $this->linkedin;
	}

	
	public function getGeneral()
	{

		return $this->general;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = LorPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = LorPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setLocation($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->location !== $v) {
			$this->location = $v;
			$this->modifiedColumns[] = LorPeer::LOCATION;
		}

	} 
	
	public function setEmployer($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employer !== $v) {
			$this->employer = $v;
			$this->modifiedColumns[] = LorPeer::EMPLOYER;
		}

	} 
	
	public function setPosition($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->position !== $v) {
			$this->position = $v;
			$this->modifiedColumns[] = LorPeer::POSITION;
		}

	} 
	
	public function setLinkedin($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->linkedin !== $v) {
			$this->linkedin = $v;
			$this->modifiedColumns[] = LorPeer::LINKEDIN;
		}

	} 
	
	public function setGeneral($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->general !== $v) {
			$this->general = $v;
			$this->modifiedColumns[] = LorPeer::GENERAL;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->location = $rs->getString($startcol + 2);

			$this->employer = $rs->getString($startcol + 3);

			$this->position = $rs->getString($startcol + 4);

			$this->linkedin = $rs->getString($startcol + 5);

			$this->general = $rs->getString($startcol + 6);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Lor object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(LorPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			LorPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(LorPeer::DATABASE_NAME);
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
					$pk = LorPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += LorPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collLorusers !== null) {
				foreach($this->collLorusers as $referrerFK) {
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


												
			if ($this->aUser !== null) {
				if (!$this->aUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
				}
			}


			if (($retval = LorPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collLorusers !== null) {
					foreach($this->collLorusers as $referrerFK) {
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
		$pos = LorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getLocation();
				break;
			case 3:
				return $this->getEmployer();
				break;
			case 4:
				return $this->getPosition();
				break;
			case 5:
				return $this->getLinkedin();
				break;
			case 6:
				return $this->getGeneral();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LorPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getLocation(),
			$keys[3] => $this->getEmployer(),
			$keys[4] => $this->getPosition(),
			$keys[5] => $this->getLinkedin(),
			$keys[6] => $this->getGeneral(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setLocation($value);
				break;
			case 3:
				$this->setEmployer($value);
				break;
			case 4:
				$this->setPosition($value);
				break;
			case 5:
				$this->setLinkedin($value);
				break;
			case 6:
				$this->setGeneral($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LorPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setLocation($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setEmployer($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPosition($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLinkedin($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setGeneral($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(LorPeer::DATABASE_NAME);

		if ($this->isColumnModified(LorPeer::ID)) $criteria->add(LorPeer::ID, $this->id);
		if ($this->isColumnModified(LorPeer::USER_ID)) $criteria->add(LorPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(LorPeer::LOCATION)) $criteria->add(LorPeer::LOCATION, $this->location);
		if ($this->isColumnModified(LorPeer::EMPLOYER)) $criteria->add(LorPeer::EMPLOYER, $this->employer);
		if ($this->isColumnModified(LorPeer::POSITION)) $criteria->add(LorPeer::POSITION, $this->position);
		if ($this->isColumnModified(LorPeer::LINKEDIN)) $criteria->add(LorPeer::LINKEDIN, $this->linkedin);
		if ($this->isColumnModified(LorPeer::GENERAL)) $criteria->add(LorPeer::GENERAL, $this->general);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(LorPeer::DATABASE_NAME);

		$criteria->add(LorPeer::ID, $this->id);

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

		$copyObj->setLocation($this->location);

		$copyObj->setEmployer($this->employer);

		$copyObj->setPosition($this->position);

		$copyObj->setLinkedin($this->linkedin);

		$copyObj->setGeneral($this->general);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getLorusers() as $relObj) {
				$copyObj->addLoruser($relObj->copy($deepCopy));
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
			self::$peer = new LorPeer();
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

				$criteria->add(LoruserPeer::LOR_ID, $this->getId());

				LoruserPeer::addSelectColumns($criteria);
				$this->collLorusers = LoruserPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(LoruserPeer::LOR_ID, $this->getId());

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

		$criteria->add(LoruserPeer::LOR_ID, $this->getId());

		return LoruserPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addLoruser(Loruser $l)
	{
		$this->collLorusers[] = $l;
		$l->setLor($this);
	}


	
	public function getLorusersJoinUser($criteria = null, $con = null)
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

				$criteria->add(LoruserPeer::LOR_ID, $this->getId());

				$this->collLorusers = LoruserPeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(LoruserPeer::LOR_ID, $this->getId());

			if (!isset($this->lastLoruserCriteria) || !$this->lastLoruserCriteria->equals($criteria)) {
				$this->collLorusers = LoruserPeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastLoruserCriteria = $criteria;

		return $this->collLorusers;
	}

} 