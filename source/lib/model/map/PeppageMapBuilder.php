<?php



class PeppageMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.PeppageMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('pepPage');
		$tMap->setPhpName('Peppage');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TABNAME', 'Tabname', 'string', CreoleTypes::VARCHAR, false, 25);

		$tMap->addColumn('CONTENT', 'Content', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('SEQUENCE', 'Sequence', 'int', CreoleTypes::INTEGER, false, 2);

	} 
} 