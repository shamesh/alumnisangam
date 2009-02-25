<?php



class AddressMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.AddressMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('address');
		$tMap->setPhpName('Address');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addColumn('ADDRESS', 'Address', 'string', CreoleTypes::VARCHAR, false, 150);

		$tMap->addColumn('ADDRESSFLAG', 'Addressflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('CITY', 'City', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CITYFLAG', 'Cityflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('STATE', 'State', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('STATEFLAG', 'Stateflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('COUNTRY', 'Country', 'string', CreoleTypes::VARCHAR, false, 25);

		$tMap->addColumn('COUNTRYFLAG', 'Countryflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('POSTALCODE', 'Postalcode', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('POSTALCODEFLAG', 'Postalcodeflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('PHONE1', 'Phone1', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('PHONE1FLAG', 'Phone1flag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('PHONE2', 'Phone2', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('PHONE2FLAG', 'Phone2flag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('CELLPHONE', 'Cellphone', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('CELLPHONEFLAG', 'Cellphoneflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('FAX', 'Fax', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('FAXFLAG', 'Faxflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('TYPE', 'Type', 'string', CreoleTypes::VARCHAR, false, 5);

	} 
} 