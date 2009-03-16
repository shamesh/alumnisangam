<?php


abstract class BaseLorfields extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $fields;

	
	protected $collLorvaluess;

	
	protected $lastLorvaluesCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getFields()
	{

		return $this->fields;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = LorfieldsPeer::ID;
		}

	} 
	
	public function setFields($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fields !== $v) {
			$this->fields = $v;
			$this->modifiedColumns[] = LorfieldsPeer::FIELDS;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->fields = $rs->getString($startcol + 1);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 2; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Lorfields object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(LorfieldsPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			LorfieldsPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(LorfieldsPeer::DATABASE_NAME);
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
					$pk = LorfieldsPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += LorfieldsPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collLorvaluess !== null) {
				foreach($this->collLorvaluess as $referrerFK) {
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


			if (($retval = LorfieldsPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collLorvaluess !== null) {
					foreach($this->collLorvaluess as $referrerFK) {
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
		$pos = LorfieldsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getFields();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LorfieldsPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getFields(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LorfieldsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setFields($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LorfieldsPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFields($arr[$keys[1]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(LorfieldsPeer::DATABASE_NAME);

		if ($this->isColumnModified(LorfieldsPeer::ID)) $criteria->add(LorfieldsPeer::ID, $this->id);
		if ($this->isColumnModified(LorfieldsPeer::FIELDS)) $criteria->add(LorfieldsPeer::FIELDS, $this->fields);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(LorfieldsPeer::DATABASE_NAME);

		$criteria->add(LorfieldsPeer::ID, $this->id);

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

		$copyObj->setFields($this->fields);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getLorvaluess() as $relObj) {
				$copyObj->addLorvalues($relObj->copy($deepCopy));
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
			self::$peer = new LorfieldsPeer();
		}
		return self::$peer;
	}

	
	public function initLorvaluess()
	{
		if ($this->collLorvaluess === null) {
			$this->collLorvaluess = array();
		}
	}

	
	public function getLorvaluess($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseLorvaluesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collLorvaluess === null) {
			if ($this->isNew()) {
			   $this->collLorvaluess = array();
			} else {

				$criteria->add(LorvaluesPeer::LORFIELDS_ID, $this->getId());

				LorvaluesPeer::addSelectColumns($criteria);
				$this->collLorvaluess = LorvaluesPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(LorvaluesPeer::LORFIELDS_ID, $this->getId());

				LorvaluesPeer::addSelectColumns($criteria);
				if (!isset($this->lastLorvaluesCriteria) || !$this->lastLorvaluesCriteria->equals($criteria)) {
					$this->collLorvaluess = LorvaluesPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastLorvaluesCriteria = $criteria;
		return $this->collLorvaluess;
	}

	
	public function countLorvaluess($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseLorvaluesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(LorvaluesPeer::LORFIELDS_ID, $this->getId());

		return LorvaluesPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addLorvalues(Lorvalues $l)
	{
		$this->collLorvaluess[] = $l;
		$l->setLorfields($this);
	}


	
	public function getLorvaluessJoinUser($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseLorvaluesPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collLorvaluess === null) {
			if ($this->isNew()) {
				$this->collLorvaluess = array();
			} else {

				$criteria->add(LorvaluesPeer::LORFIELDS_ID, $this->getId());

				$this->collLorvaluess = LorvaluesPeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(LorvaluesPeer::LORFIELDS_ID, $this->getId());

			if (!isset($this->lastLorvaluesCriteria) || !$this->lastLorvaluesCriteria->equals($criteria)) {
				$this->collLorvaluess = LorvaluesPeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastLorvaluesCriteria = $criteria;

		return $this->collLorvaluess;
	}

} 