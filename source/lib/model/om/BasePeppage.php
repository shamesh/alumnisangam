<?php


abstract class BasePeppage extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $tabname;


	
	protected $content;


	
	protected $sequence;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $collPepusers;

	
	protected $lastPepuserCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getTabname()
	{

		return $this->tabname;
	}

	
	public function getContent()
	{

		return $this->content;
	}

	
	public function getSequence()
	{

		return $this->sequence;
	}

	
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->created_at === null || $this->created_at === '') {
			return null;
		} elseif (!is_int($this->created_at)) {
						$ts = strtotime($this->created_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [created_at] as date/time value: " . var_export($this->created_at, true));
			}
		} else {
			$ts = $this->created_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getUpdatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->updated_at === null || $this->updated_at === '') {
			return null;
		} elseif (!is_int($this->updated_at)) {
						$ts = strtotime($this->updated_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [updated_at] as date/time value: " . var_export($this->updated_at, true));
			}
		} else {
			$ts = $this->updated_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PeppagePeer::ID;
		}

	} 
	
	public function setTabname($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tabname !== $v) {
			$this->tabname = $v;
			$this->modifiedColumns[] = PeppagePeer::TABNAME;
		}

	} 
	
	public function setContent($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->content !== $v) {
			$this->content = $v;
			$this->modifiedColumns[] = PeppagePeer::CONTENT;
		}

	} 
	
	public function setSequence($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->sequence !== $v) {
			$this->sequence = $v;
			$this->modifiedColumns[] = PeppagePeer::SEQUENCE;
		}

	} 
	
	public function setCreatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [created_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->created_at !== $ts) {
			$this->created_at = $ts;
			$this->modifiedColumns[] = PeppagePeer::CREATED_AT;
		}

	} 
	
	public function setUpdatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [updated_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->updated_at !== $ts) {
			$this->updated_at = $ts;
			$this->modifiedColumns[] = PeppagePeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->tabname = $rs->getString($startcol + 1);

			$this->content = $rs->getString($startcol + 2);

			$this->sequence = $rs->getInt($startcol + 3);

			$this->created_at = $rs->getTimestamp($startcol + 4, null);

			$this->updated_at = $rs->getTimestamp($startcol + 5, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Peppage object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PeppagePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			PeppagePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(PeppagePeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(PeppagePeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PeppagePeer::DATABASE_NAME);
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
					$pk = PeppagePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PeppagePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collPepusers !== null) {
				foreach($this->collPepusers as $referrerFK) {
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


			if (($retval = PeppagePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collPepusers !== null) {
					foreach($this->collPepusers as $referrerFK) {
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
		$pos = PeppagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getTabname();
				break;
			case 2:
				return $this->getContent();
				break;
			case 3:
				return $this->getSequence();
				break;
			case 4:
				return $this->getCreatedAt();
				break;
			case 5:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PeppagePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTabname(),
			$keys[2] => $this->getContent(),
			$keys[3] => $this->getSequence(),
			$keys[4] => $this->getCreatedAt(),
			$keys[5] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PeppagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setTabname($value);
				break;
			case 2:
				$this->setContent($value);
				break;
			case 3:
				$this->setSequence($value);
				break;
			case 4:
				$this->setCreatedAt($value);
				break;
			case 5:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PeppagePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTabname($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setContent($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSequence($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCreatedAt($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setUpdatedAt($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PeppagePeer::DATABASE_NAME);

		if ($this->isColumnModified(PeppagePeer::ID)) $criteria->add(PeppagePeer::ID, $this->id);
		if ($this->isColumnModified(PeppagePeer::TABNAME)) $criteria->add(PeppagePeer::TABNAME, $this->tabname);
		if ($this->isColumnModified(PeppagePeer::CONTENT)) $criteria->add(PeppagePeer::CONTENT, $this->content);
		if ($this->isColumnModified(PeppagePeer::SEQUENCE)) $criteria->add(PeppagePeer::SEQUENCE, $this->sequence);
		if ($this->isColumnModified(PeppagePeer::CREATED_AT)) $criteria->add(PeppagePeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(PeppagePeer::UPDATED_AT)) $criteria->add(PeppagePeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PeppagePeer::DATABASE_NAME);

		$criteria->add(PeppagePeer::ID, $this->id);

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

		$copyObj->setTabname($this->tabname);

		$copyObj->setContent($this->content);

		$copyObj->setSequence($this->sequence);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getPepusers() as $relObj) {
				$copyObj->addPepuser($relObj->copy($deepCopy));
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
			self::$peer = new PeppagePeer();
		}
		return self::$peer;
	}

	
	public function initPepusers()
	{
		if ($this->collPepusers === null) {
			$this->collPepusers = array();
		}
	}

	
	public function getPepusers($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BasePepuserPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPepusers === null) {
			if ($this->isNew()) {
			   $this->collPepusers = array();
			} else {

				$criteria->add(PepuserPeer::PEPPAGE_ID, $this->getId());

				PepuserPeer::addSelectColumns($criteria);
				$this->collPepusers = PepuserPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(PepuserPeer::PEPPAGE_ID, $this->getId());

				PepuserPeer::addSelectColumns($criteria);
				if (!isset($this->lastPepuserCriteria) || !$this->lastPepuserCriteria->equals($criteria)) {
					$this->collPepusers = PepuserPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastPepuserCriteria = $criteria;
		return $this->collPepusers;
	}

	
	public function countPepusers($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BasePepuserPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(PepuserPeer::PEPPAGE_ID, $this->getId());

		return PepuserPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addPepuser(Pepuser $l)
	{
		$this->collPepusers[] = $l;
		$l->setPeppage($this);
	}


	
	public function getPepusersJoinUser($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BasePepuserPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPepusers === null) {
			if ($this->isNew()) {
				$this->collPepusers = array();
			} else {

				$criteria->add(PepuserPeer::PEPPAGE_ID, $this->getId());

				$this->collPepusers = PepuserPeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(PepuserPeer::PEPPAGE_ID, $this->getId());

			if (!isset($this->lastPepuserCriteria) || !$this->lastPepuserCriteria->equals($criteria)) {
				$this->collPepusers = PepuserPeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastPepuserCriteria = $criteria;

		return $this->collPepusers;
	}

} 