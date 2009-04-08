<?php



class UserchapterregionMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.UserchapterregionMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('userChapterRegion');
		$tMap->setPhpName('Userchapterregion');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addForeignKey('CHAPTERREGION_ID', 'ChapterregionId', 'int', CreoleTypes::INTEGER, 'chapterRegion', 'ID', false, null);

		$tMap->addColumn('OTHER', 'Other', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('UCRFLAG', 'Ucrflag', 'string', CreoleTypes::VARCHAR, false, 5);

	} 
} 