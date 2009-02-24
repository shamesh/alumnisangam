<?php


abstract class BaseUserbadge extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $badge_id;


	
	protected $badgeflag;

	
	protected $aUser;

	
	protected $aBadge;

	
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

	
	public function getBadgeId()
	{

		return $this->badge_id;
	}

	
	public function getBadgeflag()
	{

		return $this->badgeflag;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = UserbadgePeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = UserbadgePeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setBadgeId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->badge_id !== $v) {
			$this->badge_id = $v;
			$this->modifiedColumns[] = UserbadgePeer::BADGE_ID;
		}

		if ($this->aBadge !== null && $this->aBadge->getId() !== $v) {
			$this->aBadge = null;
		}

	} 
	
	public function setBadgeflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->badgeflag !== $v) {
			$this->badgeflag = $v;
			$this->modifiedColumns[] = UserbadgePeer::BADGEFLAG;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->badge_id = $rs->getInt($startcol + 2);

			$this->badgeflag = $rs->getString($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Userbadge object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserbadgePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			UserbadgePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(UserbadgePeer::DATABASE_NAME);
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

			if ($this->aBadge !== null) {
				if ($this->aBadge->isModified()) {
					$affectedRows += $this->aBadge->save($con);
				}
				$this->setBadge($this->aBadge);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = UserbadgePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += UserbadgePeer::doUpdate($this, $con);
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

			if ($this->aBadge !== null) {
				if (!$this->aBadge->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aBadge->getValidationFailures());
				}
			}


			if (($retval = UserbadgePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserbadgePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getBadgeId();
				break;
			case 3:
				return $this->getBadgeflag();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserbadgePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getBadgeId(),
			$keys[3] => $this->getBadgeflag(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserbadgePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setBadgeId($value);
				break;
			case 3:
				$this->setBadgeflag($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserbadgePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setBadgeId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setBadgeflag($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(UserbadgePeer::DATABASE_NAME);

		if ($this->isColumnModified(UserbadgePeer::ID)) $criteria->add(UserbadgePeer::ID, $this->id);
		if ($this->isColumnModified(UserbadgePeer::USER_ID)) $criteria->add(UserbadgePeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(UserbadgePeer::BADGE_ID)) $criteria->add(UserbadgePeer::BADGE_ID, $this->badge_id);
		if ($this->isColumnModified(UserbadgePeer::BADGEFLAG)) $criteria->add(UserbadgePeer::BADGEFLAG, $this->badgeflag);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UserbadgePeer::DATABASE_NAME);

		$criteria->add(UserbadgePeer::ID, $this->id);

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

		$copyObj->setBadgeId($this->badge_id);

		$copyObj->setBadgeflag($this->badgeflag);


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
			self::$peer = new UserbadgePeer();
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

	
	public function setBadge($v)
	{


		if ($v === null) {
			$this->setBadgeId(NULL);
		} else {
			$this->setBadgeId($v->getId());
		}


		$this->aBadge = $v;
	}


	
	public function getBadge($con = null)
	{
				include_once 'lib/model/om/BaseBadgePeer.php';

		if ($this->aBadge === null && ($this->badge_id !== null)) {

			$this->aBadge = BadgePeer::retrieveByPK($this->badge_id, $con);

			
		}
		return $this->aBadge;
	}

} 