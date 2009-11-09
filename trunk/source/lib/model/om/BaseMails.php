<?php


abstract class BaseMails extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $subject;


	
	protected $message;


	
	protected $sendername;


	
	protected $sendermail;


	
	protected $recipientname;


	
	protected $recipientmail;


	
	protected $approved;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getSubject()
	{

		return $this->subject;
	}

	
	public function getMessage()
	{

		return $this->message;
	}

	
	public function getSendername()
	{

		return $this->sendername;
	}

	
	public function getSendermail()
	{

		return $this->sendermail;
	}

	
	public function getRecipientname()
	{

		return $this->recipientname;
	}

	
	public function getRecipientmail()
	{

		return $this->recipientmail;
	}

	
	public function getApproved()
	{

		return $this->approved;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = MailsPeer::ID;
		}

	} 
	
	public function setSubject($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->subject !== $v) {
			$this->subject = $v;
			$this->modifiedColumns[] = MailsPeer::SUBJECT;
		}

	} 
	
	public function setMessage($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->message !== $v) {
			$this->message = $v;
			$this->modifiedColumns[] = MailsPeer::MESSAGE;
		}

	} 
	
	public function setSendername($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sendername !== $v) {
			$this->sendername = $v;
			$this->modifiedColumns[] = MailsPeer::SENDERNAME;
		}

	} 
	
	public function setSendermail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sendermail !== $v) {
			$this->sendermail = $v;
			$this->modifiedColumns[] = MailsPeer::SENDERMAIL;
		}

	} 
	
	public function setRecipientname($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->recipientname !== $v) {
			$this->recipientname = $v;
			$this->modifiedColumns[] = MailsPeer::RECIPIENTNAME;
		}

	} 
	
	public function setRecipientmail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->recipientmail !== $v) {
			$this->recipientmail = $v;
			$this->modifiedColumns[] = MailsPeer::RECIPIENTMAIL;
		}

	} 
	
	public function setApproved($v)
	{

		if ($this->approved !== $v) {
			$this->approved = $v;
			$this->modifiedColumns[] = MailsPeer::APPROVED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->subject = $rs->getString($startcol + 1);

			$this->message = $rs->getString($startcol + 2);

			$this->sendername = $rs->getString($startcol + 3);

			$this->sendermail = $rs->getString($startcol + 4);

			$this->recipientname = $rs->getString($startcol + 5);

			$this->recipientmail = $rs->getString($startcol + 6);

			$this->approved = $rs->getBoolean($startcol + 7);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Mails object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MailsPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			MailsPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(MailsPeer::DATABASE_NAME);
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
					$pk = MailsPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += MailsPeer::doUpdate($this, $con);
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


			if (($retval = MailsPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getSubject();
				break;
			case 2:
				return $this->getMessage();
				break;
			case 3:
				return $this->getSendername();
				break;
			case 4:
				return $this->getSendermail();
				break;
			case 5:
				return $this->getRecipientname();
				break;
			case 6:
				return $this->getRecipientmail();
				break;
			case 7:
				return $this->getApproved();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = MailsPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSubject(),
			$keys[2] => $this->getMessage(),
			$keys[3] => $this->getSendername(),
			$keys[4] => $this->getSendermail(),
			$keys[5] => $this->getRecipientname(),
			$keys[6] => $this->getRecipientmail(),
			$keys[7] => $this->getApproved(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setSubject($value);
				break;
			case 2:
				$this->setMessage($value);
				break;
			case 3:
				$this->setSendername($value);
				break;
			case 4:
				$this->setSendermail($value);
				break;
			case 5:
				$this->setRecipientname($value);
				break;
			case 6:
				$this->setRecipientmail($value);
				break;
			case 7:
				$this->setApproved($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = MailsPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSubject($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMessage($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSendername($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSendermail($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRecipientname($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setRecipientmail($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setApproved($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(MailsPeer::DATABASE_NAME);

		if ($this->isColumnModified(MailsPeer::ID)) $criteria->add(MailsPeer::ID, $this->id);
		if ($this->isColumnModified(MailsPeer::SUBJECT)) $criteria->add(MailsPeer::SUBJECT, $this->subject);
		if ($this->isColumnModified(MailsPeer::MESSAGE)) $criteria->add(MailsPeer::MESSAGE, $this->message);
		if ($this->isColumnModified(MailsPeer::SENDERNAME)) $criteria->add(MailsPeer::SENDERNAME, $this->sendername);
		if ($this->isColumnModified(MailsPeer::SENDERMAIL)) $criteria->add(MailsPeer::SENDERMAIL, $this->sendermail);
		if ($this->isColumnModified(MailsPeer::RECIPIENTNAME)) $criteria->add(MailsPeer::RECIPIENTNAME, $this->recipientname);
		if ($this->isColumnModified(MailsPeer::RECIPIENTMAIL)) $criteria->add(MailsPeer::RECIPIENTMAIL, $this->recipientmail);
		if ($this->isColumnModified(MailsPeer::APPROVED)) $criteria->add(MailsPeer::APPROVED, $this->approved);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(MailsPeer::DATABASE_NAME);

		$criteria->add(MailsPeer::ID, $this->id);

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

		$copyObj->setSubject($this->subject);

		$copyObj->setMessage($this->message);

		$copyObj->setSendername($this->sendername);

		$copyObj->setSendermail($this->sendermail);

		$copyObj->setRecipientname($this->recipientname);

		$copyObj->setRecipientmail($this->recipientmail);

		$copyObj->setApproved($this->approved);


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
			self::$peer = new MailsPeer();
		}
		return self::$peer;
	}

} 