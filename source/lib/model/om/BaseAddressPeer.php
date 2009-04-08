<?php


abstract class BaseAddressPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'address';

	
	const CLASS_DEFAULT = 'lib.model.Address';

	
	const NUM_COLUMNS = 21;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'address.ID';

	
	const USER_ID = 'address.USER_ID';

	
	const ADDRESS = 'address.ADDRESS';

	
	const ADDRESSFLAG = 'address.ADDRESSFLAG';

	
	const CITY = 'address.CITY';

	
	const CITYFLAG = 'address.CITYFLAG';

	
	const STATE = 'address.STATE';

	
	const STATEFLAG = 'address.STATEFLAG';

	
	const COUNTRY = 'address.COUNTRY';

	
	const COUNTRYFLAG = 'address.COUNTRYFLAG';

	
	const POSTALCODE = 'address.POSTALCODE';

	
	const POSTALCODEFLAG = 'address.POSTALCODEFLAG';

	
	const PHONE1 = 'address.PHONE1';

	
	const PHONE1FLAG = 'address.PHONE1FLAG';

	
	const PHONE2 = 'address.PHONE2';

	
	const PHONE2FLAG = 'address.PHONE2FLAG';

	
	const CELLPHONE = 'address.CELLPHONE';

	
	const CELLPHONEFLAG = 'address.CELLPHONEFLAG';

	
	const FAX = 'address.FAX';

	
	const FAXFLAG = 'address.FAXFLAG';

	
	const TYPE = 'address.TYPE';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'UserId', 'Address', 'Addressflag', 'City', 'Cityflag', 'State', 'Stateflag', 'Country', 'Countryflag', 'Postalcode', 'Postalcodeflag', 'Phone1', 'Phone1flag', 'Phone2', 'Phone2flag', 'Cellphone', 'Cellphoneflag', 'Fax', 'Faxflag', 'Type', ),
		BasePeer::TYPE_COLNAME => array (AddressPeer::ID, AddressPeer::USER_ID, AddressPeer::ADDRESS, AddressPeer::ADDRESSFLAG, AddressPeer::CITY, AddressPeer::CITYFLAG, AddressPeer::STATE, AddressPeer::STATEFLAG, AddressPeer::COUNTRY, AddressPeer::COUNTRYFLAG, AddressPeer::POSTALCODE, AddressPeer::POSTALCODEFLAG, AddressPeer::PHONE1, AddressPeer::PHONE1FLAG, AddressPeer::PHONE2, AddressPeer::PHONE2FLAG, AddressPeer::CELLPHONE, AddressPeer::CELLPHONEFLAG, AddressPeer::FAX, AddressPeer::FAXFLAG, AddressPeer::TYPE, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'user_id', 'address', 'addressFlag', 'city', 'cityFlag', 'state', 'stateFlag', 'country', 'countryFlag', 'postalcode', 'postalcodeFlag', 'phone1', 'phone1Flag', 'phone2', 'phone2Flag', 'cellphone', 'cellphoneFlag', 'fax', 'faxFlag', 'type', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'UserId' => 1, 'Address' => 2, 'Addressflag' => 3, 'City' => 4, 'Cityflag' => 5, 'State' => 6, 'Stateflag' => 7, 'Country' => 8, 'Countryflag' => 9, 'Postalcode' => 10, 'Postalcodeflag' => 11, 'Phone1' => 12, 'Phone1flag' => 13, 'Phone2' => 14, 'Phone2flag' => 15, 'Cellphone' => 16, 'Cellphoneflag' => 17, 'Fax' => 18, 'Faxflag' => 19, 'Type' => 20, ),
		BasePeer::TYPE_COLNAME => array (AddressPeer::ID => 0, AddressPeer::USER_ID => 1, AddressPeer::ADDRESS => 2, AddressPeer::ADDRESSFLAG => 3, AddressPeer::CITY => 4, AddressPeer::CITYFLAG => 5, AddressPeer::STATE => 6, AddressPeer::STATEFLAG => 7, AddressPeer::COUNTRY => 8, AddressPeer::COUNTRYFLAG => 9, AddressPeer::POSTALCODE => 10, AddressPeer::POSTALCODEFLAG => 11, AddressPeer::PHONE1 => 12, AddressPeer::PHONE1FLAG => 13, AddressPeer::PHONE2 => 14, AddressPeer::PHONE2FLAG => 15, AddressPeer::CELLPHONE => 16, AddressPeer::CELLPHONEFLAG => 17, AddressPeer::FAX => 18, AddressPeer::FAXFLAG => 19, AddressPeer::TYPE => 20, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user_id' => 1, 'address' => 2, 'addressFlag' => 3, 'city' => 4, 'cityFlag' => 5, 'state' => 6, 'stateFlag' => 7, 'country' => 8, 'countryFlag' => 9, 'postalcode' => 10, 'postalcodeFlag' => 11, 'phone1' => 12, 'phone1Flag' => 13, 'phone2' => 14, 'phone2Flag' => 15, 'cellphone' => 16, 'cellphoneFlag' => 17, 'fax' => 18, 'faxFlag' => 19, 'type' => 20, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/AddressMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.AddressMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = AddressPeer::getTableMap();
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
		return str_replace(AddressPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(AddressPeer::ID);

		$criteria->addSelectColumn(AddressPeer::USER_ID);

		$criteria->addSelectColumn(AddressPeer::ADDRESS);

		$criteria->addSelectColumn(AddressPeer::ADDRESSFLAG);

		$criteria->addSelectColumn(AddressPeer::CITY);

		$criteria->addSelectColumn(AddressPeer::CITYFLAG);

		$criteria->addSelectColumn(AddressPeer::STATE);

		$criteria->addSelectColumn(AddressPeer::STATEFLAG);

		$criteria->addSelectColumn(AddressPeer::COUNTRY);

		$criteria->addSelectColumn(AddressPeer::COUNTRYFLAG);

		$criteria->addSelectColumn(AddressPeer::POSTALCODE);

		$criteria->addSelectColumn(AddressPeer::POSTALCODEFLAG);

		$criteria->addSelectColumn(AddressPeer::PHONE1);

		$criteria->addSelectColumn(AddressPeer::PHONE1FLAG);

		$criteria->addSelectColumn(AddressPeer::PHONE2);

		$criteria->addSelectColumn(AddressPeer::PHONE2FLAG);

		$criteria->addSelectColumn(AddressPeer::CELLPHONE);

		$criteria->addSelectColumn(AddressPeer::CELLPHONEFLAG);

		$criteria->addSelectColumn(AddressPeer::FAX);

		$criteria->addSelectColumn(AddressPeer::FAXFLAG);

		$criteria->addSelectColumn(AddressPeer::TYPE);

	}

	const COUNT = 'COUNT(address.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT address.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AddressPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AddressPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = AddressPeer::doSelectRS($criteria, $con);
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
		$objects = AddressPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return AddressPeer::populateObjects(AddressPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			AddressPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = AddressPeer::getOMClass();
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
			$criteria->addSelectColumn(AddressPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AddressPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AddressPeer::USER_ID, UserPeer::ID);

		$rs = AddressPeer::doSelectRS($criteria, $con);
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

		AddressPeer::addSelectColumns($c);
		$startcol = (AddressPeer::NUM_COLUMNS - AddressPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UserPeer::addSelectColumns($c);

		$c->addJoin(AddressPeer::USER_ID, UserPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AddressPeer::getOMClass();

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
										$temp_obj2->addAddress($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initAddresss();
				$obj2->addAddress($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AddressPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AddressPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AddressPeer::USER_ID, UserPeer::ID);

		$rs = AddressPeer::doSelectRS($criteria, $con);
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

		AddressPeer::addSelectColumns($c);
		$startcol2 = (AddressPeer::NUM_COLUMNS - AddressPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		UserPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + UserPeer::NUM_COLUMNS;

		$c->addJoin(AddressPeer::USER_ID, UserPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AddressPeer::getOMClass();


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
					$temp_obj2->addAddress($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initAddresss();
				$obj2->addAddress($obj1);
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
		return AddressPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(AddressPeer::ID); 

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
			$comparison = $criteria->getComparison(AddressPeer::ID);
			$selectCriteria->add(AddressPeer::ID, $criteria->remove(AddressPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(AddressPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(AddressPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Address) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(AddressPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Address $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AddressPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AddressPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(AddressPeer::DATABASE_NAME, AddressPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = AddressPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(AddressPeer::DATABASE_NAME);

		$criteria->add(AddressPeer::ID, $pk);


		$v = AddressPeer::doSelect($criteria, $con);

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
			$criteria->add(AddressPeer::ID, $pks, Criteria::IN);
			$objs = AddressPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseAddressPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/AddressMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.AddressMapBuilder');
}
