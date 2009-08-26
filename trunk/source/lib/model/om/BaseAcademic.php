<?php


abstract class BaseAcademic extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $degree;


	
	protected $degreeflag;


	
	protected $year;


	
	protected $yearflag;


	
	protected $department;


	
	protected $departmentflag;


	
	protected $institute;


	
	protected $instituteflag;

	
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

	
	public function getDegree()
	{

		return $this->degree;
	}

	
	public function getDegreeflag()
	{

		return $this->degreeflag;
	}

	
	public function getYear()
	{

		return $this->year;
	}

	
	public function getYearflag()
	{

		return $this->yearflag;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getDepartmentflag()
	{

		return $this->departmentflag;
	}

	
	public function getInstitute()
	{

		return $this->institute;
	}

	
	public function getInstituteflag()
	{

		return $this->instituteflag;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = AcademicPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = AcademicPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setDegree($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->degree !== $v) {
			$this->degree = $v;
			$this->modifiedColumns[] = AcademicPeer::DEGREE;
		}

	} 
	
	public function setDegreeflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->degreeflag !== $v) {
			$this->degreeflag = $v;
			$this->modifiedColumns[] = AcademicPeer::DEGREEFLAG;
		}

	} 
	
	public function setYear($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->year !== $v) {
			$this->year = $v;
			$this->modifiedColumns[] = AcademicPeer::YEAR;
		}

	} 
	
	public function setYearflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->yearflag !== $v) {
			$this->yearflag = $v;
			$this->modifiedColumns[] = AcademicPeer::YEARFLAG;
		}

	} 
	
	public function setDepartment($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v) {
			$this->department = $v;
			$this->modifiedColumns[] = AcademicPeer::DEPARTMENT;
		}

	} 
	
	public function setDepartmentflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->departmentflag !== $v) {
			$this->departmentflag = $v;
			$this->modifiedColumns[] = AcademicPeer::DEPARTMENTFLAG;
		}

	} 
	
	public function setInstitute($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->institute !== $v) {
			$this->institute = $v;
			$this->modifiedColumns[] = AcademicPeer::INSTITUTE;
		}

	} 
	
	public function setInstituteflag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->instituteflag !== $v) {
			$this->instituteflag = $v;
			$this->modifiedColumns[] = AcademicPeer::INSTITUTEFLAG;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->degree = $rs->getString($startcol + 2);

			$this->degreeflag = $rs->getString($startcol + 3);

			$this->year = $rs->getInt($startcol + 4);

			$this->yearflag = $rs->getString($startcol + 5);

			$this->department = $rs->getString($startcol + 6);

			$this->departmentflag = $rs->getString($startcol + 7);

			$this->institute = $rs->getString($startcol + 8);

			$this->instituteflag = $rs->getString($startcol + 9);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Academic object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AcademicPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			AcademicPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(AcademicPeer::DATABASE_NAME);
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
					$pk = AcademicPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += AcademicPeer::doUpdate($this, $con);
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


			if (($retval = AcademicPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AcademicPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDegree();
				break;
			case 3:
				return $this->getDegreeflag();
				break;
			case 4:
				return $this->getYear();
				break;
			case 5:
				return $this->getYearflag();
				break;
			case 6:
				return $this->getDepartment();
				break;
			case 7:
				return $this->getDepartmentflag();
				break;
			case 8:
				return $this->getInstitute();
				break;
			case 9:
				return $this->getInstituteflag();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AcademicPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getDegree(),
			$keys[3] => $this->getDegreeflag(),
			$keys[4] => $this->getYear(),
			$keys[5] => $this->getYearflag(),
			$keys[6] => $this->getDepartment(),
			$keys[7] => $this->getDepartmentflag(),
			$keys[8] => $this->getInstitute(),
			$keys[9] => $this->getInstituteflag(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AcademicPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDegree($value);
				break;
			case 3:
				$this->setDegreeflag($value);
				break;
			case 4:
				$this->setYear($value);
				break;
			case 5:
				$this->setYearflag($value);
				break;
			case 6:
				$this->setDepartment($value);
				break;
			case 7:
				$this->setDepartmentflag($value);
				break;
			case 8:
				$this->setInstitute($value);
				break;
			case 9:
				$this->setInstituteflag($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AcademicPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDegree($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDegreeflag($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setYear($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setYearflag($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDepartment($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDepartmentflag($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setInstitute($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setInstituteflag($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(AcademicPeer::DATABASE_NAME);

		if ($this->isColumnModified(AcademicPeer::ID)) $criteria->add(AcademicPeer::ID, $this->id);
		if ($this->isColumnModified(AcademicPeer::USER_ID)) $criteria->add(AcademicPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(AcademicPeer::DEGREE)) $criteria->add(AcademicPeer::DEGREE, $this->degree);
		if ($this->isColumnModified(AcademicPeer::DEGREEFLAG)) $criteria->add(AcademicPeer::DEGREEFLAG, $this->degreeflag);
		if ($this->isColumnModified(AcademicPeer::YEAR)) $criteria->add(AcademicPeer::YEAR, $this->year);
		if ($this->isColumnModified(AcademicPeer::YEARFLAG)) $criteria->add(AcademicPeer::YEARFLAG, $this->yearflag);
		if ($this->isColumnModified(AcademicPeer::DEPARTMENT)) $criteria->add(AcademicPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(AcademicPeer::DEPARTMENTFLAG)) $criteria->add(AcademicPeer::DEPARTMENTFLAG, $this->departmentflag);
		if ($this->isColumnModified(AcademicPeer::INSTITUTE)) $criteria->add(AcademicPeer::INSTITUTE, $this->institute);
		if ($this->isColumnModified(AcademicPeer::INSTITUTEFLAG)) $criteria->add(AcademicPeer::INSTITUTEFLAG, $this->instituteflag);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AcademicPeer::DATABASE_NAME);

		$criteria->add(AcademicPeer::ID, $this->id);

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

		$copyObj->setDegree($this->degree);

		$copyObj->setDegreeflag($this->degreeflag);

		$copyObj->setYear($this->year);

		$copyObj->setYearflag($this->yearflag);

		$copyObj->setDepartment($this->department);

		$copyObj->setDepartmentflag($this->departmentflag);

		$copyObj->setInstitute($this->institute);

		$copyObj->setInstituteflag($this->instituteflag);


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
			self::$peer = new AcademicPeer();
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