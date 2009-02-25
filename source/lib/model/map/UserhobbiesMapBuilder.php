<?php



class UserhobbiesMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.UserhobbiesMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('userHobbies');
		$tMap->setPhpName('Userhobbies');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addForeignKey('HOBBIES_ID', 'HobbiesId', 'int', CreoleTypes::INTEGER, 'hobbies', 'ID', false, null);

		$tMap->addColumn('OTHER', 'Other', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('HOBBIESFLAG', 'Hobbiesflag', 'string', CreoleTypes::VARCHAR, false, 5);

	} 
} 