<?php



class ChapterregionMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ChapterregionMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('chapterRegion');
		$tMap->setPhpName('Chapterregion');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('CHAPTER_ID', 'ChapterId', 'int', CreoleTypes::INTEGER, 'chapter', 'ID', false, null);

		$tMap->addForeignKey('REGION_ID', 'RegionId', 'int', CreoleTypes::INTEGER, 'region', 'ID', false, null);

	} 
} 