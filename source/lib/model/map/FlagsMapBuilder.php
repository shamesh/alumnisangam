<?php



class FlagsMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.FlagsMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('flags');
		$tMap->setPhpName('Flags');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('NEWSLETTER', 'Newsletter', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('MAIL', 'Mail', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 