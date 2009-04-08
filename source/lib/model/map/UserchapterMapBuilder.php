<?php



class UserchapterMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.UserchapterMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('userChapter');
		$tMap->setPhpName('Userchapter');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addForeignKey('CHAPTER_ID', 'ChapterId', 'int', CreoleTypes::INTEGER, 'chapter', 'ID', false, null);

		$tMap->addColumn('OTHER', 'Other', 'string', CreoleTypes::VARCHAR, false, 50);

	} 
} 