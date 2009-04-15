<?php



class UserfriendMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.UserfriendMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('userfriend');
		$tMap->setPhpName('Userfriend');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addForeignKey('FRIEND_ID', 'FriendId', 'int', CreoleTypes::INTEGER, 'friend', 'ID', false, null);

	} 
} 