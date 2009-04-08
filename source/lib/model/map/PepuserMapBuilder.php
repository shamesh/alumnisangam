<?php



class PepuserMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.PepuserMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('pepUser');
		$tMap->setPhpName('Pepuser');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addForeignKey('PEPPAGE_ID', 'PeppageId', 'int', CreoleTypes::INTEGER, 'pepPage', 'ID', false, null);

	} 
} 