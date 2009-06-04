<?php


abstract class BasePersonalPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'personal';

	
	const CLASS_DEFAULT = 'lib.model.Personal';

	
	const NUM_COLUMNS = 30;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'personal.ID';

	
	const USER_ID = 'personal.USER_ID';

	
	const IMAGE = 'personal.IMAGE';

	
	const IMAGEFLAG = 'personal.IMAGEFLAG';

	
	const SALUTATION = 'personal.SALUTATION';

	
	const FIRSTNAME = 'personal.FIRSTNAME';

	
	const FIRSTNAMEFLAG = 'personal.FIRSTNAMEFLAG';

	
	const MIDDLENAME = 'personal.MIDDLENAME';

	
	const MIDDLENAMEFLAG = 'personal.MIDDLENAMEFLAG';

	
	const LASTNAME = 'personal.LASTNAME';

	
	const LASTNAMEFLAG = 'personal.LASTNAMEFLAG';

	
	const MAIDENNAME = 'personal.MAIDENNAME';

	
	const MAIDENNAMEFLAG = 'personal.MAIDENNAMEFLAG';

	
	const ITBHUNAME = 'personal.ITBHUNAME';

	
	const ITBHUNAMEFLAG = 'personal.ITBHUNAMEFLAG';

	
	const GENDER = 'personal.GENDER';

	
	const GENDERFLAG = 'personal.GENDERFLAG';

	
	const DOB = 'personal.DOB';

	
	const DOBFLAG = 'personal.DOBFLAG';

	
	const MARITALSTATUS = 'personal.MARITALSTATUS';

	
	const MARITALSTATUSFLAG = 'personal.MARITALSTATUSFLAG';

	
	const EMAIL = 'personal.EMAIL';

	
	const EMAILFLAG = 'personal.EMAILFLAG';

	
	const WEBSITE = 'personal.WEBSITE';

	
	const WEBSITEFLAG = 'personal.WEBSITEFLAG';

	
	const LINKEDIN = 'personal.LINKEDIN';

	
	const LINKEDINFLAG = 'personal.LINKEDINFLAG';

	
	const HOBBIES = 'personal.HOBBIES';

	
	const HOBBIESFLAG = 'personal.HOBBIESFLAG';

	
	const INTEREST = 'personal.INTEREST';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'UserId', 'Image', 'Imageflag', 'Salutation', 'Firstname', 'Firstnameflag', 'Middlename', 'Middlenameflag', 'Lastname', 'Lastnameflag', 'Maidenname', 'Maidennameflag', 'Itbhuname', 'Itbhunameflag', 'Gender', 'Genderflag', 'Dob', 'Dobflag', 'Maritalstatus', 'Maritalstatusflag', 'Email', 'Emailflag', 'Website', 'Websiteflag', 'Linkedin', 'Linkedinflag', 'Hobbies', 'Hobbiesflag', 'Interest', ),
		BasePeer::TYPE_COLNAME => array (PersonalPeer::ID, PersonalPeer::USER_ID, PersonalPeer::IMAGE, PersonalPeer::IMAGEFLAG, PersonalPeer::SALUTATION, PersonalPeer::FIRSTNAME, PersonalPeer::FIRSTNAMEFLAG, PersonalPeer::MIDDLENAME, PersonalPeer::MIDDLENAMEFLAG, PersonalPeer::LASTNAME, PersonalPeer::LASTNAMEFLAG, PersonalPeer::MAIDENNAME, PersonalPeer::MAIDENNAMEFLAG, PersonalPeer::ITBHUNAME, PersonalPeer::ITBHUNAMEFLAG, PersonalPeer::GENDER, PersonalPeer::GENDERFLAG, PersonalPeer::DOB, PersonalPeer::DOBFLAG, PersonalPeer::MARITALSTATUS, PersonalPeer::MARITALSTATUSFLAG, PersonalPeer::EMAIL, PersonalPeer::EMAILFLAG, PersonalPeer::WEBSITE, PersonalPeer::WEBSITEFLAG, PersonalPeer::LINKEDIN, PersonalPeer::LINKEDINFLAG, PersonalPeer::HOBBIES, PersonalPeer::HOBBIESFLAG, PersonalPeer::INTEREST, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'user_id', 'image', 'imageFlag', 'salutation', 'firstname', 'firstnameFlag', 'middlename', 'middlenameFlag', 'lastname', 'lastnameFlag', 'maidenname', 'maidennameFlag', 'itbhuname', 'itbhunameFlag', 'gender', 'genderFlag', 'dob', 'dobFlag', 'maritalstatus', 'maritalstatusFlag', 'email', 'emailFlag', 'website', 'websiteFlag', 'linkedin', 'linkedinFlag', 'hobbies', 'hobbiesFlag', 'interest', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'UserId' => 1, 'Image' => 2, 'Imageflag' => 3, 'Salutation' => 4, 'Firstname' => 5, 'Firstnameflag' => 6, 'Middlename' => 7, 'Middlenameflag' => 8, 'Lastname' => 9, 'Lastnameflag' => 10, 'Maidenname' => 11, 'Maidennameflag' => 12, 'Itbhuname' => 13, 'Itbhunameflag' => 14, 'Gender' => 15, 'Genderflag' => 16, 'Dob' => 17, 'Dobflag' => 18, 'Maritalstatus' => 19, 'Maritalstatusflag' => 20, 'Email' => 21, 'Emailflag' => 22, 'Website' => 23, 'Websiteflag' => 24, 'Linkedin' => 25, 'Linkedinflag' => 26, 'Hobbies' => 27, 'Hobbiesflag' => 28, 'Interest' => 29, ),
		BasePeer::TYPE_COLNAME => array (PersonalPeer::ID => 0, PersonalPeer::USER_ID => 1, PersonalPeer::IMAGE => 2, PersonalPeer::IMAGEFLAG => 3, PersonalPeer::SALUTATION => 4, PersonalPeer::FIRSTNAME => 5, PersonalPeer::FIRSTNAMEFLAG => 6, PersonalPeer::MIDDLENAME => 7, PersonalPeer::MIDDLENAMEFLAG => 8, PersonalPeer::LASTNAME => 9, PersonalPeer::LASTNAMEFLAG => 10, PersonalPeer::MAIDENNAME => 11, PersonalPeer::MAIDENNAMEFLAG => 12, PersonalPeer::ITBHUNAME => 13, PersonalPeer::ITBHUNAMEFLAG => 14, PersonalPeer::GENDER => 15, PersonalPeer::GENDERFLAG => 16, PersonalPeer::DOB => 17, PersonalPeer::DOBFLAG => 18, PersonalPeer::MARITALSTATUS => 19, PersonalPeer::MARITALSTATUSFLAG => 20, PersonalPeer::EMAIL => 21, PersonalPeer::EMAILFLAG => 22, PersonalPeer::WEBSITE => 23, PersonalPeer::WEBSITEFLAG => 24, PersonalPeer::LINKEDIN => 25, PersonalPeer::LINKEDINFLAG => 26, PersonalPeer::HOBBIES => 27, PersonalPeer::HOBBIESFLAG => 28, PersonalPeer::INTEREST => 29, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user_id' => 1, 'image' => 2, 'imageFlag' => 3, 'salutation' => 4, 'firstname' => 5, 'firstnameFlag' => 6, 'middlename' => 7, 'middlenameFlag' => 8, 'lastname' => 9, 'lastnameFlag' => 10, 'maidenname' => 11, 'maidennameFlag' => 12, 'itbhuname' => 13, 'itbhunameFlag' => 14, 'gender' => 15, 'genderFlag' => 16, 'dob' => 17, 'dobFlag' => 18, 'maritalstatus' => 19, 'maritalstatusFlag' => 20, 'email' => 21, 'emailFlag' => 22, 'website' => 23, 'websiteFlag' => 24, 'linkedin' => 25, 'linkedinFlag' => 26, 'hobbies' => 27, 'hobbiesFlag' => 28, 'interest' => 29, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/PersonalMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.PersonalMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = PersonalPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(PersonalPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(PersonalPeer::ID);

		$criteria->addSelectColumn(PersonalPeer::USER_ID);

		$criteria->addSelectColumn(PersonalPeer::IMAGE);

		$criteria->addSelectColumn(PersonalPeer::IMAGEFLAG);

		$criteria->addSelectColumn(PersonalPeer::SALUTATION);

		$criteria->addSelectColumn(PersonalPeer::FIRSTNAME);

		$criteria->addSelectColumn(PersonalPeer::FIRSTNAMEFLAG);

		$criteria->addSelectColumn(PersonalPeer::MIDDLENAME);

		$criteria->addSelectColumn(PersonalPeer::MIDDLENAMEFLAG);

		$criteria->addSelectColumn(PersonalPeer::LASTNAME);

		$criteria->addSelectColumn(PersonalPeer::LASTNAMEFLAG);

		$criteria->addSelectColumn(PersonalPeer::MAIDENNAME);

		$criteria->addSelectColumn(PersonalPeer::MAIDENNAMEFLAG);

		$criteria->addSelectColumn(PersonalPeer::ITBHUNAME);

		$criteria->addSelectColumn(PersonalPeer::ITBHUNAMEFLAG);

		$criteria->addSelectColumn(PersonalPeer::GENDER);

		$criteria->addSelectColumn(PersonalPeer::GENDERFLAG);

		$criteria->addSelectColumn(PersonalPeer::DOB);

		$criteria->addSelectColumn(PersonalPeer::DOBFLAG);

		$criteria->addSelectColumn(PersonalPeer::MARITALSTATUS);

		$criteria->addSelectColumn(PersonalPeer::MARITALSTATUSFLAG);

		$criteria->addSelectColumn(PersonalPeer::EMAIL);

		$criteria->addSelectColumn(PersonalPeer::EMAILFLAG);

		$criteria->addSelectColumn(PersonalPeer::WEBSITE);

		$criteria->addSelectColumn(PersonalPeer::WEBSITEFLAG);

		$criteria->addSelectColumn(PersonalPeer::LINKEDIN);

		$criteria->addSelectColumn(PersonalPeer::LINKEDINFLAG);

		$criteria->addSelectColumn(PersonalPeer::HOBBIES);

		$criteria->addSelectColumn(PersonalPeer::HOBBIESFLAG);

		$criteria->addSelectColumn(PersonalPeer::INTEREST);

	}

	const COUNT = 'COUNT(personal.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT personal.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PersonalPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PersonalPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = PersonalPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = PersonalPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return PersonalPeer::populateObjects(PersonalPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			PersonalPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = PersonalPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinUser(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PersonalPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PersonalPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(PersonalPeer::USER_ID, UserPeer::ID);

		$rs = PersonalPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinUser(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		PersonalPeer::addSelectColumns($c);
		$startcol = (PersonalPeer::NUM_COLUMNS - PersonalPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UserPeer::addSelectColumns($c);

		$c->addJoin(PersonalPeer::USER_ID, UserPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = PersonalPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = UserPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getUser(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addPersonal($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initPersonals();
				$obj2->addPersonal($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PersonalPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PersonalPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(PersonalPeer::USER_ID, UserPeer::ID);

		$rs = PersonalPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		PersonalPeer::addSelectColumns($c);
		$startcol2 = (PersonalPeer::NUM_COLUMNS - PersonalPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		UserPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + UserPeer::NUM_COLUMNS;

		$c->addJoin(PersonalPeer::USER_ID, UserPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = PersonalPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = UserPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getUser(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addPersonal($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initPersonals();
				$obj2->addPersonal($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}

	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return PersonalPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(PersonalPeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(PersonalPeer::ID);
			$selectCriteria->add(PersonalPeer::ID, $criteria->remove(PersonalPeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(PersonalPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(PersonalPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Personal) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(PersonalPeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(Personal $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(PersonalPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(PersonalPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(PersonalPeer::DATABASE_NAME, PersonalPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = PersonalPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(PersonalPeer::DATABASE_NAME);

		$criteria->add(PersonalPeer::ID, $pk);


		$v = PersonalPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(PersonalPeer::ID, $pks, Criteria::IN);
			$objs = PersonalPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasePersonalPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/PersonalMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.PersonalMapBuilder');
}
