<?php



class PersonalWorktypeMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.PersonalWorktypeMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('personal_worktype');
		$tMap->setPhpName('PersonalWorktype');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('PERSONAL_ID', 'PersonalId', 'int', CreoleTypes::INTEGER, 'personal', 'ID', false, null);

		$tMap->addForeignKey('WORKTYPE_ID', 'WorktypeId', 'int', CreoleTypes::INTEGER, 'worktype', 'ID', false, null);

	} 
} 