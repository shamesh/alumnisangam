<?php


abstract class BaseLorvalues extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $lorfields_id;


	
	protected $data;


	
	protected $user_id;

	
	protected $aLorfields;

	
	protected $aUser;

	
	protected $collLorusers;

	
	protected $lastLoruserCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getLorfieldsId()
	{

		return $this->lorfields_id;
	}

	
	public function getData()
	{

		return $this->data;
	}

	
	public function getUserId()
	{

		return $this->user_id;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = LorvaluesPeer::ID;
		}

	} 
	
	public function setLorfieldsId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->lorfields_id !== $v) {
			$this->lorfields_id = $v;
			$this->modifiedColumns[] = LorvaluesPeer::LORFIELDS_ID;
		}

		if ($this->aLorfields !== null && $this->aLorfields->getId() !== $v) {
			$this->aLorfields = null;
		}

	} 
	
	public function setData($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->data !== $v) {
			$this->data = $v;
			$this->modifiedColumns[] = LorvaluesPeer::DATA;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = LorvaluesPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->lorfields_id = $rs->getInt($startcol + 1);

			$this->data = $rs->getString($startcol + 2);

			$this->user_id = $rs->getInt($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Lorvalues object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(LorvaluesPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			LorvaluesPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(LorvaluesPeer::DATABASE_NAME);
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


												
			if ($this->aLorfields !== null) {
				if ($this->aLorfields->isModified()) {
					$affectedRows += $this->aLorfields->save($con);
				}
				$this->setLorfields($this->aLorfields);
			}

			if ($this->aUser !== null) {
				if ($this->aUser->isModified()) {
					$affectedRows += $this->aUser->save($con);
				}
				$this->setUser($this->aUser);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = LorvaluesPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += LorvaluesPeer::doUpdate($this, $con);
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


												
			if ($this->aLorfields !== null) {
				if (!$this->aLorfields->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aLorfields->getValidationFailures());
				}
			}

			if ($this->aUser !== null) {
				if (!$this->aUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
				}
			}


			if (($retval = LorvaluesPeer::doValidate($this, $columns)) !== true) {
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
		$pos = LorvaluesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getLorfieldsId();
				break;
			case 2:
				return $this->getData();
				break;
			case 3:
				return $this->getUserId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LorvaluesPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getLorfieldsId(),
			$keys[2] => $this->getData(),
			$keys[3] => $this->getUserId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LorvaluesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setLorfieldsId($value);
				break;
			case 2:
				$this->setData($value);
				break;
			case 3:
				$this->setUserId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LorvaluesPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setLorfieldsId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setData($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUserId($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(LorvaluesPeer::DATABASE_NAME);

		if ($this->isColumnModified(LorvaluesPeer::ID)) $criteria->add(LorvaluesPeer::ID, $this->id);
		if ($this->isColumnModified(LorvaluesPeer::LORFIELDS_ID)) $criteria->add(LorvaluesPeer::LORFIELDS_ID, $this->lorfields_id);
		if ($this->isColumnModified(LorvaluesPeer::DATA)) $criteria->add(LorvaluesPeer::DATA, $this->data);
		if ($this->isColumnModified(LorvaluesPeer::USER_ID)) $criteria->add(LorvaluesPeer::USER_ID, $this->user_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(LorvaluesPeer::DATABASE_NAME);

		$criteria->add(LorvaluesPeer::ID, $this->id);

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

		$copyObj->setLorfieldsId($this->lorfields_id);

		$copyObj->setData($this->data);

		$copyObj->setUserId($this->user_id);


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
			self::$peer = new LorvaluesPeer();
		}
		return self::$peer;
	}

	
	public function setLorfields($v)
	{


		if ($v === null) {
			$this->setLorfieldsId(NULL);
		} else {
			$this->setLorfieldsId($v->getId());
		}


		$this->aLorfields = $v;
	}


	
	public function getLorfields($con = null)
	{
				include_once 'lib/model/om/BaseLorfieldsPeer.php';

		if ($this->aLorfields === null && ($this->lorfields_id !== null)) {

			$this->aLorfields = LorfieldsPeer::retrieveByPK($this->lorfields_id, $con);

			
		}
		return $this->aLorfields;
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

				$criteria->add(LoruserPeer::LORVALUES_ID, $this->getId());

				LoruserPeer::addSelectColumns($criteria);
				$this->collLorusers = LoruserPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(LoruserPeer::LORVALUES_ID, $this->getId());

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

		$criteria->add(LoruserPeer::LORVALUES_ID, $this->getId());

		return LoruserPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addLoruser(Loruser $l)
	{
		$this->collLorusers[] = $l;
		$l->setLorvalues($this);
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

				$criteria->add(LoruserPeer::LORVALUES_ID, $this->getId());

				$this->collLorusers = LoruserPeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(LoruserPeer::LORVALUES_ID, $this->getId());

			if (!isset($this->lastLoruserCriteria) || !$this->lastLoruserCriteria->equals($criteria)) {
				$this->collLorusers = LoruserPeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastLoruserCriteria = $criteria;

		return $this->collLorusers;
	}

} 