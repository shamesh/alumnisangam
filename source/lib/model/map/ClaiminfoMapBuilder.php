<?php



class ClaiminfoMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ClaiminfoMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('claiminfo');
		$tMap->setPhpName('Claiminfo');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addColumn('ROLL', 'Roll', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('HAWA', 'Hawa', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('CITY', 'City', 'string', CreoleTypes::VARCHAR, false, 25);

		$tMap->addColumn('HOD', 'Hod', 'string', CreoleTypes::VARCHAR, false, 25);

		$tMap->addColumn('DIRECTOR', 'Director', 'string', CreoleTypes::VARCHAR, false, 25);

		$tMap->addColumn('TEACHER', 'Teacher', 'string', CreoleTypes::VARCHAR, false, 25);

		$tMap->addColumn('LANKASHOP', 'Lankashop', 'string', CreoleTypes::VARCHAR, false, 25);

		$tMap->addColumn('OTHER', 'Other', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DUSERNAME', 'Dusername', 'string', CreoleTypes::VARCHAR, false, 25);

	} 
} 