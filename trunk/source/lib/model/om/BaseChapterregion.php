<?php


abstract class BaseChapterregion extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $chapter_id;


	
	protected $region_id;

	
	protected $aChapter;

	
	protected $aRegion;

	
	protected $collUserchapterregions;

	
	protected $lastUserchapterregionCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getChapterId()
	{

		return $this->chapter_id;
	}

	
	public function getRegionId()
	{

		return $this->region_id;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ChapterregionPeer::ID;
		}

	} 
	
	public function setChapterId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->chapter_id !== $v) {
			$this->chapter_id = $v;
			$this->modifiedColumns[] = ChapterregionPeer::CHAPTER_ID;
		}

		if ($this->aChapter !== null && $this->aChapter->getId() !== $v) {
			$this->aChapter = null;
		}

	} 
	
	public function setRegionId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->region_id !== $v) {
			$this->region_id = $v;
			$this->modifiedColumns[] = ChapterregionPeer::REGION_ID;
		}

		if ($this->aRegion !== null && $this->aRegion->getId() !== $v) {
			$this->aRegion = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->chapter_id = $rs->getInt($startcol + 1);

			$this->region_id = $rs->getInt($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Chapterregion object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ChapterregionPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ChapterregionPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ChapterregionPeer::DATABASE_NAME);
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


												
			if ($this->aChapter !== null) {
				if ($this->aChapter->isModified()) {
					$affectedRows += $this->aChapter->save($con);
				}
				$this->setChapter($this->aChapter);
			}

			if ($this->aRegion !== null) {
				if ($this->aRegion->isModified()) {
					$affectedRows += $this->aRegion->save($con);
				}
				$this->setRegion($this->aRegion);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ChapterregionPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ChapterregionPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collUserchapterregions !== null) {
				foreach($this->collUserchapterregions as $referrerFK) {
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


												
			if ($this->aChapter !== null) {
				if (!$this->aChapter->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aChapter->getValidationFailures());
				}
			}

			if ($this->aRegion !== null) {
				if (!$this->aRegion->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRegion->getValidationFailures());
				}
			}


			if (($retval = ChapterregionPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collUserchapterregions !== null) {
					foreach($this->collUserchapterregions as $referrerFK) {
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
		$pos = ChapterregionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getChapterId();
				break;
			case 2:
				return $this->getRegionId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ChapterregionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getChapterId(),
			$keys[2] => $this->getRegionId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ChapterregionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setChapterId($value);
				break;
			case 2:
				$this->setRegionId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ChapterregionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setChapterId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setRegionId($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ChapterregionPeer::DATABASE_NAME);

		if ($this->isColumnModified(ChapterregionPeer::ID)) $criteria->add(ChapterregionPeer::ID, $this->id);
		if ($this->isColumnModified(ChapterregionPeer::CHAPTER_ID)) $criteria->add(ChapterregionPeer::CHAPTER_ID, $this->chapter_id);
		if ($this->isColumnModified(ChapterregionPeer::REGION_ID)) $criteria->add(ChapterregionPeer::REGION_ID, $this->region_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ChapterregionPeer::DATABASE_NAME);

		$criteria->add(ChapterregionPeer::ID, $this->id);

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

		$copyObj->setChapterId($this->chapter_id);

		$copyObj->setRegionId($this->region_id);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getUserchapterregions() as $relObj) {
				$copyObj->addUserchapterregion($relObj->copy($deepCopy));
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
			self::$peer = new ChapterregionPeer();
		}
		return self::$peer;
	}

	
	public function setChapter($v)
	{


		if ($v === null) {
			$this->setChapterId(NULL);
		} else {
			$this->setChapterId($v->getId());
		}


		$this->aChapter = $v;
	}


	
	public function getChapter($con = null)
	{
				include_once 'lib/model/om/BaseChapterPeer.php';

		if ($this->aChapter === null && ($this->chapter_id !== null)) {

			$this->aChapter = ChapterPeer::retrieveByPK($this->chapter_id, $con);

			
		}
		return $this->aChapter;
	}

	
	public function setRegion($v)
	{


		if ($v === null) {
			$this->setRegionId(NULL);
		} else {
			$this->setRegionId($v->getId());
		}


		$this->aRegion = $v;
	}


	
	public function getRegion($con = null)
	{
				include_once 'lib/model/om/BaseRegionPeer.php';

		if ($this->aRegion === null && ($this->region_id !== null)) {

			$this->aRegion = RegionPeer::retrieveByPK($this->region_id, $con);

			
		}
		return $this->aRegion;
	}

	
	public function initUserchapterregions()
	{
		if ($this->collUserchapterregions === null) {
			$this->collUserchapterregions = array();
		}
	}

	
	public function getUserchapterregions($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserchapterregionPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserchapterregions === null) {
			if ($this->isNew()) {
			   $this->collUserchapterregions = array();
			} else {

				$criteria->add(UserchapterregionPeer::CHAPTERREGION_ID, $this->getId());

				UserchapterregionPeer::addSelectColumns($criteria);
				$this->collUserchapterregions = UserchapterregionPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UserchapterregionPeer::CHAPTERREGION_ID, $this->getId());

				UserchapterregionPeer::addSelectColumns($criteria);
				if (!isset($this->lastUserchapterregionCriteria) || !$this->lastUserchapterregionCriteria->equals($criteria)) {
					$this->collUserchapterregions = UserchapterregionPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastUserchapterregionCriteria = $criteria;
		return $this->collUserchapterregions;
	}

	
	public function countUserchapterregions($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseUserchapterregionPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(UserchapterregionPeer::CHAPTERREGION_ID, $this->getId());

		return UserchapterregionPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUserchapterregion(Userchapterregion $l)
	{
		$this->collUserchapterregions[] = $l;
		$l->setChapterregion($this);
	}


	
	public function getUserchapterregionsJoinUser($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserchapterregionPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserchapterregions === null) {
			if ($this->isNew()) {
				$this->collUserchapterregions = array();
			} else {

				$criteria->add(UserchapterregionPeer::CHAPTERREGION_ID, $this->getId());

				$this->collUserchapterregions = UserchapterregionPeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(UserchapterregionPeer::CHAPTERREGION_ID, $this->getId());

			if (!isset($this->lastUserchapterregionCriteria) || !$this->lastUserchapterregionCriteria->equals($criteria)) {
				$this->collUserchapterregions = UserchapterregionPeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastUserchapterregionCriteria = $criteria;

		return $this->collUserchapterregions;
	}

} 