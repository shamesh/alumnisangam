<?php


abstract class BaseHobbies extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name;

	
	protected $collUserhobbiess;

	
	protected $lastUserhobbiesCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = HobbiesPeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = HobbiesPeer::NAME;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->name = $rs->getString($startcol + 1);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 2; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Hobbies object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HobbiesPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HobbiesPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HobbiesPeer::DATABASE_NAME);
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


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = HobbiesPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HobbiesPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collUserhobbiess !== null) {
				foreach($this->collUserhobbiess as $referrerFK) {
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


			if (($retval = HobbiesPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collUserhobbiess !== null) {
					foreach($this->collUserhobbiess as $referrerFK) {
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
		$pos = HobbiesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getName();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HobbiesPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HobbiesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setName($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HobbiesPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HobbiesPeer::DATABASE_NAME);

		if ($this->isColumnModified(HobbiesPeer::ID)) $criteria->add(HobbiesPeer::ID, $this->id);
		if ($this->isColumnModified(HobbiesPeer::NAME)) $criteria->add(HobbiesPeer::NAME, $this->name);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HobbiesPeer::DATABASE_NAME);

		$criteria->add(HobbiesPeer::ID, $this->id);

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

		$copyObj->setName($this->name);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getUserhobbiess() as $relObj) {
				$copyObj->addUserhobbies($relObj->copy($deepCopy));
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
			self::$peer = new HobbiesPeer();
		}
		return self::$peer;
	}

	
	public function initUserhobbiess()
	{
		if ($this->collUserhobbiess === null) {
			$this->collUserhobbiess = array();
		}
	}

	
	public function getUserhobbiess($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserhobbiesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserhobbiess === null) {
			if ($this->isNew()) {
			   $this->collUserhobbiess = array();
			} else {

				$criteria->add(UserhobbiesPeer::HOBBIES_ID, $this->getId());

				UserhobbiesPeer::addSelectColumns($criteria);
				$this->collUserhobbiess = UserhobbiesPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UserhobbiesPeer::HOBBIES_ID, $this->getId());

				UserhobbiesPeer::addSelectColumns($criteria);
				if (!isset($this->lastUserhobbiesCriteria) || !$this->lastUserhobbiesCriteria->equals($criteria)) {
					$this->collUserhobbiess = UserhobbiesPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastUserhobbiesCriteria = $criteria;
		return $this->collUserhobbiess;
	}

	
	public function countUserhobbiess($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseUserhobbiesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(UserhobbiesPeer::HOBBIES_ID, $this->getId());

		return UserhobbiesPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUserhobbies(Userhobbies $l)
	{
		$this->collUserhobbiess[] = $l;
		$l->setHobbies($this);
	}


	
	public function getUserhobbiessJoinUser($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserhobbiesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserhobbiess === null) {
			if ($this->isNew()) {
				$this->collUserhobbiess = array();
			} else {

				$criteria->add(UserhobbiesPeer::HOBBIES_ID, $this->getId());

				$this->collUserhobbiess = UserhobbiesPeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(UserhobbiesPeer::HOBBIES_ID, $this->getId());

			if (!isset($this->lastUserhobbiesCriteria) || !$this->lastUserhobbiesCriteria->equals($criteria)) {
				$this->collUserhobbiess = UserhobbiesPeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastUserhobbiesCriteria = $criteria;

		return $this->collUserhobbiess;
	}

} 