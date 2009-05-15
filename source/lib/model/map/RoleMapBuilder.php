<?php



class RoleMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.RoleMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('role');
		$tMap->setPhpName('Role');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DISPLAYNAME', 'Displayname', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('ASSIGNABLE', 'Assignable', 'string', CreoleTypes::VARCHAR, false, 2);

		$tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::LONGVARCHAR, false, null);

	} 
} 