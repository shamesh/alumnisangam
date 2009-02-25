<?php



class LorMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.LorMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('lor');
		$tMap->setPhpName('Lor');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addColumn('LOCATION', 'Location', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('EMPLOYER', 'Employer', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('POSITION', 'Position', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('LINKEDIN', 'Linkedin', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('GENERAL', 'General', 'string', CreoleTypes::VARCHAR, false, 200);

	} 
} 