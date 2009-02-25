<?php



class UserroleMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.UserroleMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('userRole');
		$tMap->setPhpName('Userrole');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addForeignKey('ROLE_ID', 'RoleId', 'int', CreoleTypes::INTEGER, 'role', 'ID', false, null);

	} 
} 