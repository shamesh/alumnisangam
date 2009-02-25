<?php


abstract class BaseFamily extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $dom;


	
	protected $domflag;


	
	protected $spousename;


	
	protected $spousenameflag;


	
	protected $spouseemployer;


	
	protected $spouseemployerflag;


	
	protected $spousetitle;


	
	protected $spousetitleflag;


	
	protected $children;


	
	protected $childrenflag;

	
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

	
	public function getDom($format = 'Y-m-d H:i:s')
	{

		if ($this->dom === null || $this->dom === '') {
			return null;
		} elseif (!is_int($this->dom)) {
						$ts = strtotime($this->dom);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [dom] as date/time value: " . var_export($this->dom, true));
			}
		} else {
			$ts = $this->dom;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDomflag()
	{

		return $this->domflag;
	}

	
	public function getSpousename()
	{

		return $this->spousename;
	}

	
	public function getSpousenameflag()
	{

		return $this->spousenameflag;
	}

	
	public function getSpouseemployer()
	{

		return $this->spouseemployer;
	}

	
	public function getSpouseemployerflag()
	{

		return $this->spouseemployerflag;
	}

	
	public function getSpousetitle()
	{

		return $this->spousetitle;
	}

	
	public function getSpousetitleflag()
	{

		return $this->spousetitleflag;
	}

	
	public function getChildren()
	{

		return $this->children;
	}

	
	public function getChildrenflag()
	{

		return $this->childrenflag;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = FamilyPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = FamilyPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setDom($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [dom] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->dom !== $ts) {
			$this->dom = $ts;
			$this->modifiedColumns[] = FamilyPeer::DOM;
		}

	} 
	
	public function setDomflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->domflag !== $v) {
			$this->domflag = $v;
			$this->modifiedColumns[] = FamilyPeer::DOMFLAG;
		}

	} 
	
	public function setSpousename($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->spousename !== $v) {
			$this->spousename = $v;
			$this->modifiedColumns[] = FamilyPeer::SPOUSENAME;
		}

	} 
	
	public function setSpousenameflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->spousenameflag !== $v) {
			$this->spousenameflag = $v;
			$this->modifiedColumns[] = FamilyPeer::SPOUSENAMEFLAG;
		}

	} 
	
	public function setSpouseemployer($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->spouseemployer !== $v) {
			$this->spouseemployer = $v;
			$this->modifiedColumns[] = FamilyPeer::SPOUSEEMPLOYER;
		}

	} 
	
	public function setSpouseemployerflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->spouseemployerflag !== $v) {
			$this->spouseemployerflag = $v;
			$this->modifiedColumns[] = FamilyPeer::SPOUSEEMPLOYERFLAG;
		}

	} 
	
	public function setSpousetitle($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->spousetitle !== $v) {
			$this->spousetitle = $v;
			$this->modifiedColumns[] = FamilyPeer::SPOUSETITLE;
		}

	} 
	
	public function setSpousetitleflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->spousetitleflag !== $v) {
			$this->spousetitleflag = $v;
			$this->modifiedColumns[] = FamilyPeer::SPOUSETITLEFLAG;
		}

	} 
	
	public function setChildren($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->children !== $v) {
			$this->children = $v;
			$this->modifiedColumns[] = FamilyPeer::CHILDREN;
		}

	} 
	
	public function setChildrenflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->childrenflag !== $v) {
			$this->childrenflag = $v;
			$this->modifiedColumns[] = FamilyPeer::CHILDRENFLAG;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->dom = $rs->getTimestamp($startcol + 2, null);

			$this->domflag = $rs->getString($startcol + 3);

			$this->spousename = $rs->getString($startcol + 4);

			$this->spousenameflag = $rs->getString($startcol + 5);

			$this->spouseemployer = $rs->getString($startcol + 6);

			$this->spouseemployerflag = $rs->getString($startcol + 7);

			$this->spousetitle = $rs->getString($startcol + 8);

			$this->spousetitleflag = $rs->getString($startcol + 9);

			$this->children = $rs->getString($startcol + 10);

			$this->childrenflag = $rs->getString($startcol + 11);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 12; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Family object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(FamilyPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			FamilyPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(FamilyPeer::DATABASE_NAME);
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
					$pk = FamilyPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += FamilyPeer::doUpdate($this, $con);
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


			if (($retval = FamilyPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FamilyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDom();
				break;
			case 3:
				return $this->getDomflag();
				break;
			case 4:
				return $this->getSpousename();
				break;
			case 5:
				return $this->getSpousenameflag();
				break;
			case 6:
				return $this->getSpouseemployer();
				break;
			case 7:
				return $this->getSpouseemployerflag();
				break;
			case 8:
				return $this->getSpousetitle();
				break;
			case 9:
				return $this->getSpousetitleflag();
				break;
			case 10:
				return $this->getChildren();
				break;
			case 11:
				return $this->getChildrenflag();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FamilyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getDom(),
			$keys[3] => $this->getDomflag(),
			$keys[4] => $this->getSpousename(),
			$keys[5] => $this->getSpousenameflag(),
			$keys[6] => $this->getSpouseemployer(),
			$keys[7] => $this->getSpouseemployerflag(),
			$keys[8] => $this->getSpousetitle(),
			$keys[9] => $this->getSpousetitleflag(),
			$keys[10] => $this->getChildren(),
			$keys[11] => $this->getChildrenflag(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FamilyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDom($value);
				break;
			case 3:
				$this->setDomflag($value);
				break;
			case 4:
				$this->setSpousename($value);
				break;
			case 5:
				$this->setSpousenameflag($value);
				break;
			case 6:
				$this->setSpouseemployer($value);
				break;
			case 7:
				$this->setSpouseemployerflag($value);
				break;
			case 8:
				$this->setSpousetitle($value);
				break;
			case 9:
				$this->setSpousetitleflag($value);
				break;
			case 10:
				$this->setChildren($value);
				break;
			case 11:
				$this->setChildrenflag($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FamilyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDom($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDomflag($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSpousename($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSpousenameflag($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSpouseemployer($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSpouseemployerflag($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSpousetitle($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setSpousetitleflag($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setChildren($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setChildrenflag($arr[$keys[11]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(FamilyPeer::DATABASE_NAME);

		if ($this->isColumnModified(FamilyPeer::ID)) $criteria->add(FamilyPeer::ID, $this->id);
		if ($this->isColumnModified(FamilyPeer::USER_ID)) $criteria->add(FamilyPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(FamilyPeer::DOM)) $criteria->add(FamilyPeer::DOM, $this->dom);
		if ($this->isColumnModified(FamilyPeer::DOMFLAG)) $criteria->add(FamilyPeer::DOMFLAG, $this->domflag);
		if ($this->isColumnModified(FamilyPeer::SPOUSENAME)) $criteria->add(FamilyPeer::SPOUSENAME, $this->spousename);
		if ($this->isColumnModified(FamilyPeer::SPOUSENAMEFLAG)) $criteria->add(FamilyPeer::SPOUSENAMEFLAG, $this->spousenameflag);
		if ($this->isColumnModified(FamilyPeer::SPOUSEEMPLOYER)) $criteria->add(FamilyPeer::SPOUSEEMPLOYER, $this->spouseemployer);
		if ($this->isColumnModified(FamilyPeer::SPOUSEEMPLOYERFLAG)) $criteria->add(FamilyPeer::SPOUSEEMPLOYERFLAG, $this->spouseemployerflag);
		if ($this->isColumnModified(FamilyPeer::SPOUSETITLE)) $criteria->add(FamilyPeer::SPOUSETITLE, $this->spousetitle);
		if ($this->isColumnModified(FamilyPeer::SPOUSETITLEFLAG)) $criteria->add(FamilyPeer::SPOUSETITLEFLAG, $this->spousetitleflag);
		if ($this->isColumnModified(FamilyPeer::CHILDREN)) $criteria->add(FamilyPeer::CHILDREN, $this->children);
		if ($this->isColumnModified(FamilyPeer::CHILDRENFLAG)) $criteria->add(FamilyPeer::CHILDRENFLAG, $this->childrenflag);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(FamilyPeer::DATABASE_NAME);

		$criteria->add(FamilyPeer::ID, $this->id);

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

		$copyObj->setDom($this->dom);

		$copyObj->setDomflag($this->domflag);

		$copyObj->setSpousename($this->spousename);

		$copyObj->setSpousenameflag($this->spousenameflag);

		$copyObj->setSpouseemployer($this->spouseemployer);

		$copyObj->setSpouseemployerflag($this->spouseemployerflag);

		$copyObj->setSpousetitle($this->spousetitle);

		$copyObj->setSpousetitleflag($this->spousetitleflag);

		$copyObj->setChildren($this->children);

		$copyObj->setChildrenflag($this->childrenflag);


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
			self::$peer = new FamilyPeer();
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