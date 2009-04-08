<?php



class MagMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.MagMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('mag');
		$tMap->setPhpName('Mag');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addColumn('MAILINGGROUP', 'Mailinggroup', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('YEAR', 'Year', 'int', CreoleTypes::INTEGER, false, 4);

		$tMap->addColumn('BRANCH', 'Branch', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('MODERATOREMAIL', 'Moderatoremail', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DETAILS', 'Details', 'string', CreoleTypes::VARCHAR, false, 300);

	} 
} 