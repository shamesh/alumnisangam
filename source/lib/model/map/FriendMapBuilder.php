<?php



class FriendMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.FriendMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('friend');
		$tMap->setPhpName('Friend');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addColumn('FRIENDID', 'Friendid', 'int', CreoleTypes::INTEGER, false, 11);

		$tMap->addColumn('STATUS', 'Status', 'int', CreoleTypes::INTEGER, false, 2);

	} 
} 