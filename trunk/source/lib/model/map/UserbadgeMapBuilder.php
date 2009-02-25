<?php



class UserbadgeMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.UserbadgeMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('userBadge');
		$tMap->setPhpName('Userbadge');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addForeignKey('BADGE_ID', 'BadgeId', 'int', CreoleTypes::INTEGER, 'badge', 'ID', false, null);

		$tMap->addColumn('BADGEFLAG', 'Badgeflag', 'string', CreoleTypes::VARCHAR, false, 5);

	} 
} 