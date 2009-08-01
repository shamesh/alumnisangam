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

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addColumn('NEWSLETTER', 'Newsletter', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('MAIL', 'Mail', 'boolean', CreoleTypes::BOOLEAN, false, null);

	} 
} 