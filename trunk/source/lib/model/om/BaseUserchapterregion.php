<?php


abstract class BaseUserchapterregion extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $chapterregion_id;


	
	protected $other;


	
	protected $ucrflag;

	
	protected $aUser;

	
	protected $aChapterregion;

	
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

	
	public function getChapterregionId()
	{

		return $this->chapterregion_id;
	}

	
	public function getOther()
	{

		return $this->other;
	}

	
	public function getUcrflag()
	{

		return $this->ucrflag;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = UserchapterregionPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = UserchapterregionPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setChapterregionId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->chapterregion_id !== $v) {
			$this->chapterregion_id = $v;
			$this->modifiedColumns[] = UserchapterregionPeer::CHAPTERREGION_ID;
		}

		if ($this->aChapterregion !== null && $this->aChapterregion->getId() !== $v) {
			$this->aChapterregion = null;
		}

	} 
	
	public function setOther($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->other !== $v) {
			$this->other = $v;
			$this->modifiedColumns[] = UserchapterregionPeer::OTHER;
		}

	} 
	
	public function setUcrflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ucrflag !== $v) {
			$this->ucrflag = $v;
			$this->modifiedColumns[] = UserchapterregionPeer::UCRFLAG;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->chapterregion_id = $rs->getInt($startcol + 2);

			$this->other = $rs->getString($startcol + 3);

			$this->ucrflag = $rs->getString($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Userchapterregion object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserchapterregionPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			UserchapterregionPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(UserchapterregionPeer::DATABASE_NAME);
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

			if ($this->aChapterregion !== null) {
				if ($this->aChapterregion->isModified()) {
					$affectedRows += $this->aChapterregion->save($con);
				}
				$this->setChapterregion($this->aChapterregion);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = UserchapterregionPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += UserchapterregionPeer::doUpdate($this, $con);
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

			if ($this->aChapterregion !== null) {
				if (!$this->aChapterregion->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aChapterregion->getValidationFailures());
				}
			}


			if (($retval = UserchapterregionPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserchapterregionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getChapterregionId();
				break;
			case 3:
				return $this->getOther();
				break;
			case 4:
				return $this->getUcrflag();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserchapterregionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getChapterregionId(),
			$keys[3] => $this->getOther(),
			$keys[4] => $this->getUcrflag(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserchapterregionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setChapterregionId($value);
				break;
			case 3:
				$this->setOther($value);
				break;
			case 4:
				$this->setUcrflag($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserchapterregionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setChapterregionId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setOther($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUcrflag($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(UserchapterregionPeer::DATABASE_NAME);

		if ($this->isColumnModified(UserchapterregionPeer::ID)) $criteria->add(UserchapterregionPeer::ID, $this->id);
		if ($this->isColumnModified(UserchapterregionPeer::USER_ID)) $criteria->add(UserchapterregionPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(UserchapterregionPeer::CHAPTERREGION_ID)) $criteria->add(UserchapterregionPeer::CHAPTERREGION_ID, $this->chapterregion_id);
		if ($this->isColumnModified(UserchapterregionPeer::OTHER)) $criteria->add(UserchapterregionPeer::OTHER, $this->other);
		if ($this->isColumnModified(UserchapterregionPeer::UCRFLAG)) $criteria->add(UserchapterregionPeer::UCRFLAG, $this->ucrflag);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UserchapterregionPeer::DATABASE_NAME);

		$criteria->add(UserchapterregionPeer::ID, $this->id);

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

		$copyObj->setChapterregionId($this->chapterregion_id);

		$copyObj->setOther($this->other);

		$copyObj->setUcrflag($this->ucrflag);


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
			self::$peer = new UserchapterregionPeer();
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

	
	public function setChapterregion($v)
	{


		if ($v === null) {
			$this->setChapterregionId(NULL);
		} else {
			$this->setChapterregionId($v->getId());
		}


		$this->aChapterregion = $v;
	}


	
	public function getChapterregion($con = null)
	{
				include_once 'lib/model/om/BaseChapterregionPeer.php';

		if ($this->aChapterregion === null && ($this->chapterregion_id !== null)) {

			$this->aChapterregion = ChapterregionPeer::retrieveByPK($this->chapterregion_id, $con);

			
		}
		return $this->aChapterregion;
	}

} 