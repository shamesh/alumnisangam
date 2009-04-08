<?php


abstract class BaseBadge extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name;


	
	protected $image;

	
	protected $collUserbadges;

	
	protected $lastUserbadgeCriteria = null;

	
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

	
	public function getImage()
	{

		return $this->image;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = BadgePeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = BadgePeer::NAME;
		}

	} 
	
	public function setImage($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->image !== $v) {
			$this->image = $v;
			$this->modifiedColumns[] = BadgePeer::IMAGE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->name = $rs->getString($startcol + 1);

			$this->image = $rs->getString($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Badge object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(BadgePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			BadgePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(BadgePeer::DATABASE_NAME);
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
					$pk = BadgePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += BadgePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collUserbadges !== null) {
				foreach($this->collUserbadges as $referrerFK) {
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


			if (($retval = BadgePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collUserbadges !== null) {
					foreach($this->collUserbadges as $referrerFK) {
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
		$pos = BadgePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getImage();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = BadgePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getImage(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = BadgePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setImage($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = BadgePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setImage($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(BadgePeer::DATABASE_NAME);

		if ($this->isColumnModified(BadgePeer::ID)) $criteria->add(BadgePeer::ID, $this->id);
		if ($this->isColumnModified(BadgePeer::NAME)) $criteria->add(BadgePeer::NAME, $this->name);
		if ($this->isColumnModified(BadgePeer::IMAGE)) $criteria->add(BadgePeer::IMAGE, $this->image);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(BadgePeer::DATABASE_NAME);

		$criteria->add(BadgePeer::ID, $this->id);

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

		$copyObj->setImage($this->image);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getUserbadges() as $relObj) {
				$copyObj->addUserbadge($relObj->copy($deepCopy));
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
			self::$peer = new BadgePeer();
		}
		return self::$peer;
	}

	
	public function initUserbadges()
	{
		if ($this->collUserbadges === null) {
			$this->collUserbadges = array();
		}
	}

	
	public function getUserbadges($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserbadgePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserbadges === null) {
			if ($this->isNew()) {
			   $this->collUserbadges = array();
			} else {

				$criteria->add(UserbadgePeer::BADGE_ID, $this->getId());

				UserbadgePeer::addSelectColumns($criteria);
				$this->collUserbadges = UserbadgePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UserbadgePeer::BADGE_ID, $this->getId());

				UserbadgePeer::addSelectColumns($criteria);
				if (!isset($this->lastUserbadgeCriteria) || !$this->lastUserbadgeCriteria->equals($criteria)) {
					$this->collUserbadges = UserbadgePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastUserbadgeCriteria = $criteria;
		return $this->collUserbadges;
	}

	
	public function countUserbadges($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseUserbadgePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(UserbadgePeer::BADGE_ID, $this->getId());

		return UserbadgePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUserbadge(Userbadge $l)
	{
		$this->collUserbadges[] = $l;
		$l->setBadge($this);
	}


	
	public function getUserbadgesJoinUser($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserbadgePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserbadges === null) {
			if ($this->isNew()) {
				$this->collUserbadges = array();
			} else {

				$criteria->add(UserbadgePeer::BADGE_ID, $this->getId());

				$this->collUserbadges = UserbadgePeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(UserbadgePeer::BADGE_ID, $this->getId());

			if (!isset($this->lastUserbadgeCriteria) || !$this->lastUserbadgeCriteria->equals($criteria)) {
				$this->collUserbadges = UserbadgePeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastUserbadgeCriteria = $criteria;

		return $this->collUserbadges;
	}

} 