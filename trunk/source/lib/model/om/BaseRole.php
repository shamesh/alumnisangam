<?php


abstract class BaseRole extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name;


	
	protected $displayname;


	
	protected $assignable;


	
	protected $description;

	
	protected $collUserroles;

	
	protected $lastUserroleCriteria = null;

	
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

	
	public function getDisplayname()
	{

		return $this->displayname;
	}

	
	public function getAssignable()
	{

		return $this->assignable;
	}

	
	public function getDescription()
	{

		return $this->description;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = RolePeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = RolePeer::NAME;
		}

	} 
	
	public function setDisplayname($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->displayname !== $v) {
			$this->displayname = $v;
			$this->modifiedColumns[] = RolePeer::DISPLAYNAME;
		}

	} 
	
	public function setAssignable($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->assignable !== $v) {
			$this->assignable = $v;
			$this->modifiedColumns[] = RolePeer::ASSIGNABLE;
		}

	} 
	
	public function setDescription($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = RolePeer::DESCRIPTION;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->name = $rs->getString($startcol + 1);

			$this->displayname = $rs->getString($startcol + 2);

			$this->assignable = $rs->getString($startcol + 3);

			$this->description = $rs->getString($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Role object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(RolePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			RolePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(RolePeer::DATABASE_NAME);
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
					$pk = RolePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += RolePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collUserroles !== null) {
				foreach($this->collUserroles as $referrerFK) {
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


			if (($retval = RolePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collUserroles !== null) {
					foreach($this->collUserroles as $referrerFK) {
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
		$pos = RolePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
			case 2:
				return $this->getDisplayname();
				break;
			case 3:
				return $this->getAssignable();
				break;
			case 4:
				return $this->getDescription();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RolePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getDisplayname(),
			$keys[3] => $this->getAssignable(),
			$keys[4] => $this->getDescription(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RolePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
			case 2:
				$this->setDisplayname($value);
				break;
			case 3:
				$this->setAssignable($value);
				break;
			case 4:
				$this->setDescription($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RolePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDisplayname($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAssignable($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDescription($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(RolePeer::DATABASE_NAME);

		if ($this->isColumnModified(RolePeer::ID)) $criteria->add(RolePeer::ID, $this->id);
		if ($this->isColumnModified(RolePeer::NAME)) $criteria->add(RolePeer::NAME, $this->name);
		if ($this->isColumnModified(RolePeer::DISPLAYNAME)) $criteria->add(RolePeer::DISPLAYNAME, $this->displayname);
		if ($this->isColumnModified(RolePeer::ASSIGNABLE)) $criteria->add(RolePeer::ASSIGNABLE, $this->assignable);
		if ($this->isColumnModified(RolePeer::DESCRIPTION)) $criteria->add(RolePeer::DESCRIPTION, $this->description);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(RolePeer::DATABASE_NAME);

		$criteria->add(RolePeer::ID, $this->id);

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

		$copyObj->setDisplayname($this->displayname);

		$copyObj->setAssignable($this->assignable);

		$copyObj->setDescription($this->description);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getUserroles() as $relObj) {
				$copyObj->addUserrole($relObj->copy($deepCopy));
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
			self::$peer = new RolePeer();
		}
		return self::$peer;
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

				$criteria->add(UserrolePeer::ROLE_ID, $this->getId());

				UserrolePeer::addSelectColumns($criteria);
				$this->collUserroles = UserrolePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UserrolePeer::ROLE_ID, $this->getId());

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

		$criteria->add(UserrolePeer::ROLE_ID, $this->getId());

		return UserrolePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUserrole(Userrole $l)
	{
		$this->collUserroles[] = $l;
		$l->setRole($this);
	}


	
	public function getUserrolesJoinUser($criteria = null, $con = null)
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

				$criteria->add(UserrolePeer::ROLE_ID, $this->getId());

				$this->collUserroles = UserrolePeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(UserrolePeer::ROLE_ID, $this->getId());

			if (!isset($this->lastUserroleCriteria) || !$this->lastUserroleCriteria->equals($criteria)) {
				$this->collUserroles = UserrolePeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastUserroleCriteria = $criteria;

		return $this->collUserroles;
	}

} 