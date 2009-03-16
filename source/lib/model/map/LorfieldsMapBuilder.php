<?php



class LorfieldsMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.LorfieldsMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('lorFields');
		$tMap->setPhpName('Lorfields');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('FIELDS', 'Fields', 'string', CreoleTypes::VARCHAR, false, 50);

	} 
} 