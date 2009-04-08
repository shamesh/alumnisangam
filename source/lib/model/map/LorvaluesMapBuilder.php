<?php



class LorvaluesMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.LorvaluesMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('lorValues');
		$tMap->setPhpName('Lorvalues');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('LORFIELDS_ID', 'LorfieldsId', 'int', CreoleTypes::INTEGER, 'lorFields', 'ID', false, null);

		$tMap->addColumn('DATA', 'Data', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 