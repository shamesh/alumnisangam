<?php


abstract class BaseAddress extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $address;


	
	protected $addressflag;


	
	protected $city;


	
	protected $cityflag;


	
	protected $state;


	
	protected $stateflag;


	
	protected $country;


	
	protected $countryflag;


	
	protected $postalcode;


	
	protected $postalcodeflag;


	
	protected $phone1;


	
	protected $phone1flag;


	
	protected $phone2;


	
	protected $phone2flag;


	
	protected $cellphone;


	
	protected $cellphoneflag;


	
	protected $fax;


	
	protected $faxflag;


	
	protected $type;

	
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

	
	public function getAddress()
	{

		return $this->address;
	}

	
	public function getAddressflag()
	{

		return $this->addressflag;
	}

	
	public function getCity()
	{

		return $this->city;
	}

	
	public function getCityflag()
	{

		return $this->cityflag;
	}

	
	public function getState()
	{

		return $this->state;
	}

	
	public function getStateflag()
	{

		return $this->stateflag;
	}

	
	public function getCountry()
	{

		return $this->country;
	}

	
	public function getCountryflag()
	{

		return $this->countryflag;
	}

	
	public function getPostalcode()
	{

		return $this->postalcode;
	}

	
	public function getPostalcodeflag()
	{

		return $this->postalcodeflag;
	}

	
	public function getPhone1()
	{

		return $this->phone1;
	}

	
	public function getPhone1flag()
	{

		return $this->phone1flag;
	}

	
	public function getPhone2()
	{

		return $this->phone2;
	}

	
	public function getPhone2flag()
	{

		return $this->phone2flag;
	}

	
	public function getCellphone()
	{

		return $this->cellphone;
	}

	
	public function getCellphoneflag()
	{

		return $this->cellphoneflag;
	}

	
	public function getFax()
	{

		return $this->fax;
	}

	
	public function getFaxflag()
	{

		return $this->faxflag;
	}

	
	public function getType()
	{

		return $this->type;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = AddressPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = AddressPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setAddress($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->address !== $v) {
			$this->address = $v;
			$this->modifiedColumns[] = AddressPeer::ADDRESS;
		}

	} 
	
	public function setAddressflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->addressflag !== $v) {
			$this->addressflag = $v;
			$this->modifiedColumns[] = AddressPeer::ADDRESSFLAG;
		}

	} 
	
	public function setCity($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->city !== $v) {
			$this->city = $v;
			$this->modifiedColumns[] = AddressPeer::CITY;
		}

	} 
	
	public function setCityflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cityflag !== $v) {
			$this->cityflag = $v;
			$this->modifiedColumns[] = AddressPeer::CITYFLAG;
		}

	} 
	
	public function setState($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->state !== $v) {
			$this->state = $v;
			$this->modifiedColumns[] = AddressPeer::STATE;
		}

	} 
	
	public function setStateflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->stateflag !== $v) {
			$this->stateflag = $v;
			$this->modifiedColumns[] = AddressPeer::STATEFLAG;
		}

	} 
	
	public function setCountry($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->country !== $v) {
			$this->country = $v;
			$this->modifiedColumns[] = AddressPeer::COUNTRY;
		}

	} 
	
	public function setCountryflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->countryflag !== $v) {
			$this->countryflag = $v;
			$this->modifiedColumns[] = AddressPeer::COUNTRYFLAG;
		}

	} 
	
	public function setPostalcode($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->postalcode !== $v) {
			$this->postalcode = $v;
			$this->modifiedColumns[] = AddressPeer::POSTALCODE;
		}

	} 
	
	public function setPostalcodeflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->postalcodeflag !== $v) {
			$this->postalcodeflag = $v;
			$this->modifiedColumns[] = AddressPeer::POSTALCODEFLAG;
		}

	} 
	
	public function setPhone1($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->phone1 !== $v) {
			$this->phone1 = $v;
			$this->modifiedColumns[] = AddressPeer::PHONE1;
		}

	} 
	
	public function setPhone1flag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->phone1flag !== $v) {
			$this->phone1flag = $v;
			$this->modifiedColumns[] = AddressPeer::PHONE1FLAG;
		}

	} 
	
	public function setPhone2($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->phone2 !== $v) {
			$this->phone2 = $v;
			$this->modifiedColumns[] = AddressPeer::PHONE2;
		}

	} 
	
	public function setPhone2flag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->phone2flag !== $v) {
			$this->phone2flag = $v;
			$this->modifiedColumns[] = AddressPeer::PHONE2FLAG;
		}

	} 
	
	public function setCellphone($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cellphone !== $v) {
			$this->cellphone = $v;
			$this->modifiedColumns[] = AddressPeer::CELLPHONE;
		}

	} 
	
	public function setCellphoneflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cellphoneflag !== $v) {
			$this->cellphoneflag = $v;
			$this->modifiedColumns[] = AddressPeer::CELLPHONEFLAG;
		}

	} 
	
	public function setFax($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fax !== $v) {
			$this->fax = $v;
			$this->modifiedColumns[] = AddressPeer::FAX;
		}

	} 
	
	public function setFaxflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->faxflag !== $v) {
			$this->faxflag = $v;
			$this->modifiedColumns[] = AddressPeer::FAXFLAG;
		}

	} 
	
	public function setType($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v) {
			$this->type = $v;
			$this->modifiedColumns[] = AddressPeer::TYPE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->address = $rs->getString($startcol + 2);

			$this->addressflag = $rs->getString($startcol + 3);

			$this->city = $rs->getString($startcol + 4);

			$this->cityflag = $rs->getString($startcol + 5);

			$this->state = $rs->getString($startcol + 6);

			$this->stateflag = $rs->getString($startcol + 7);

			$this->country = $rs->getString($startcol + 8);

			$this->countryflag = $rs->getString($startcol + 9);

			$this->postalcode = $rs->getString($startcol + 10);

			$this->postalcodeflag = $rs->getString($startcol + 11);

			$this->phone1 = $rs->getString($startcol + 12);

			$this->phone1flag = $rs->getString($startcol + 13);

			$this->phone2 = $rs->getString($startcol + 14);

			$this->phone2flag = $rs->getString($startcol + 15);

			$this->cellphone = $rs->getString($startcol + 16);

			$this->cellphoneflag = $rs->getString($startcol + 17);

			$this->fax = $rs->getString($startcol + 18);

			$this->faxflag = $rs->getString($startcol + 19);

			$this->type = $rs->getString($startcol + 20);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 21; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Address object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AddressPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			AddressPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(AddressPeer::DATABASE_NAME);
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
					$pk = AddressPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += AddressPeer::doUpdate($this, $con);
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


			if (($retval = AddressPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AddressPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAddress();
				break;
			case 3:
				return $this->getAddressflag();
				break;
			case 4:
				return $this->getCity();
				break;
			case 5:
				return $this->getCityflag();
				break;
			case 6:
				return $this->getState();
				break;
			case 7:
				return $this->getStateflag();
				break;
			case 8:
				return $this->getCountry();
				break;
			case 9:
				return $this->getCountryflag();
				break;
			case 10:
				return $this->getPostalcode();
				break;
			case 11:
				return $this->getPostalcodeflag();
				break;
			case 12:
				return $this->getPhone1();
				break;
			case 13:
				return $this->getPhone1flag();
				break;
			case 14:
				return $this->getPhone2();
				break;
			case 15:
				return $this->getPhone2flag();
				break;
			case 16:
				return $this->getCellphone();
				break;
			case 17:
				return $this->getCellphoneflag();
				break;
			case 18:
				return $this->getFax();
				break;
			case 19:
				return $this->getFaxflag();
				break;
			case 20:
				return $this->getType();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AddressPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getAddress(),
			$keys[3] => $this->getAddressflag(),
			$keys[4] => $this->getCity(),
			$keys[5] => $this->getCityflag(),
			$keys[6] => $this->getState(),
			$keys[7] => $this->getStateflag(),
			$keys[8] => $this->getCountry(),
			$keys[9] => $this->getCountryflag(),
			$keys[10] => $this->getPostalcode(),
			$keys[11] => $this->getPostalcodeflag(),
			$keys[12] => $this->getPhone1(),
			$keys[13] => $this->getPhone1flag(),
			$keys[14] => $this->getPhone2(),
			$keys[15] => $this->getPhone2flag(),
			$keys[16] => $this->getCellphone(),
			$keys[17] => $this->getCellphoneflag(),
			$keys[18] => $this->getFax(),
			$keys[19] => $this->getFaxflag(),
			$keys[20] => $this->getType(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AddressPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAddress($value);
				break;
			case 3:
				$this->setAddressflag($value);
				break;
			case 4:
				$this->setCity($value);
				break;
			case 5:
				$this->setCityflag($value);
				break;
			case 6:
				$this->setState($value);
				break;
			case 7:
				$this->setStateflag($value);
				break;
			case 8:
				$this->setCountry($value);
				break;
			case 9:
				$this->setCountryflag($value);
				break;
			case 10:
				$this->setPostalcode($value);
				break;
			case 11:
				$this->setPostalcodeflag($value);
				break;
			case 12:
				$this->setPhone1($value);
				break;
			case 13:
				$this->setPhone1flag($value);
				break;
			case 14:
				$this->setPhone2($value);
				break;
			case 15:
				$this->setPhone2flag($value);
				break;
			case 16:
				$this->setCellphone($value);
				break;
			case 17:
				$this->setCellphoneflag($value);
				break;
			case 18:
				$this->setFax($value);
				break;
			case 19:
				$this->setFaxflag($value);
				break;
			case 20:
				$this->setType($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AddressPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAddress($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAddressflag($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCity($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCityflag($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setState($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setStateflag($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCountry($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCountryflag($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setPostalcode($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPostalcodeflag($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setPhone1($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setPhone1flag($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setPhone2($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setPhone2flag($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCellphone($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setCellphoneflag($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setFax($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setFaxflag($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setType($arr[$keys[20]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(AddressPeer::DATABASE_NAME);

		if ($this->isColumnModified(AddressPeer::ID)) $criteria->add(AddressPeer::ID, $this->id);
		if ($this->isColumnModified(AddressPeer::USER_ID)) $criteria->add(AddressPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(AddressPeer::ADDRESS)) $criteria->add(AddressPeer::ADDRESS, $this->address);
		if ($this->isColumnModified(AddressPeer::ADDRESSFLAG)) $criteria->add(AddressPeer::ADDRESSFLAG, $this->addressflag);
		if ($this->isColumnModified(AddressPeer::CITY)) $criteria->add(AddressPeer::CITY, $this->city);
		if ($this->isColumnModified(AddressPeer::CITYFLAG)) $criteria->add(AddressPeer::CITYFLAG, $this->cityflag);
		if ($this->isColumnModified(AddressPeer::STATE)) $criteria->add(AddressPeer::STATE, $this->state);
		if ($this->isColumnModified(AddressPeer::STATEFLAG)) $criteria->add(AddressPeer::STATEFLAG, $this->stateflag);
		if ($this->isColumnModified(AddressPeer::COUNTRY)) $criteria->add(AddressPeer::COUNTRY, $this->country);
		if ($this->isColumnModified(AddressPeer::COUNTRYFLAG)) $criteria->add(AddressPeer::COUNTRYFLAG, $this->countryflag);
		if ($this->isColumnModified(AddressPeer::POSTALCODE)) $criteria->add(AddressPeer::POSTALCODE, $this->postalcode);
		if ($this->isColumnModified(AddressPeer::POSTALCODEFLAG)) $criteria->add(AddressPeer::POSTALCODEFLAG, $this->postalcodeflag);
		if ($this->isColumnModified(AddressPeer::PHONE1)) $criteria->add(AddressPeer::PHONE1, $this->phone1);
		if ($this->isColumnModified(AddressPeer::PHONE1FLAG)) $criteria->add(AddressPeer::PHONE1FLAG, $this->phone1flag);
		if ($this->isColumnModified(AddressPeer::PHONE2)) $criteria->add(AddressPeer::PHONE2, $this->phone2);
		if ($this->isColumnModified(AddressPeer::PHONE2FLAG)) $criteria->add(AddressPeer::PHONE2FLAG, $this->phone2flag);
		if ($this->isColumnModified(AddressPeer::CELLPHONE)) $criteria->add(AddressPeer::CELLPHONE, $this->cellphone);
		if ($this->isColumnModified(AddressPeer::CELLPHONEFLAG)) $criteria->add(AddressPeer::CELLPHONEFLAG, $this->cellphoneflag);
		if ($this->isColumnModified(AddressPeer::FAX)) $criteria->add(AddressPeer::FAX, $this->fax);
		if ($this->isColumnModified(AddressPeer::FAXFLAG)) $criteria->add(AddressPeer::FAXFLAG, $this->faxflag);
		if ($this->isColumnModified(AddressPeer::TYPE)) $criteria->add(AddressPeer::TYPE, $this->type);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AddressPeer::DATABASE_NAME);

		$criteria->add(AddressPeer::ID, $this->id);

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

		$copyObj->setAddress($this->address);

		$copyObj->setAddressflag($this->addressflag);

		$copyObj->setCity($this->city);

		$copyObj->setCityflag($this->cityflag);

		$copyObj->setState($this->state);

		$copyObj->setStateflag($this->stateflag);

		$copyObj->setCountry($this->country);

		$copyObj->setCountryflag($this->countryflag);

		$copyObj->setPostalcode($this->postalcode);

		$copyObj->setPostalcodeflag($this->postalcodeflag);

		$copyObj->setPhone1($this->phone1);

		$copyObj->setPhone1flag($this->phone1flag);

		$copyObj->setPhone2($this->phone2);

		$copyObj->setPhone2flag($this->phone2flag);

		$copyObj->setCellphone($this->cellphone);

		$copyObj->setCellphoneflag($this->cellphoneflag);

		$copyObj->setFax($this->fax);

		$copyObj->setFaxflag($this->faxflag);

		$copyObj->setType($this->type);


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
			self::$peer = new AddressPeer();
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