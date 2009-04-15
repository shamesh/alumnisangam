<?php



class FamilyMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.FamilyMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('family');
		$tMap->setPhpName('Family');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addColumn('DOM', 'Dom', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DOMFLAG', 'Domflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('SPOUSENAME', 'Spousename', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('SPOUSENAMEFLAG', 'Spousenameflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('SPOUSEEMPLOYER', 'Spouseemployer', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('SPOUSEEMPLOYERFLAG', 'Spouseemployerflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('SPOUSETITLE', 'Spousetitle', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('SPOUSETITLEFLAG', 'Spousetitleflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('CHILDREN', 'Children', 'string', CreoleTypes::VARCHAR, false, 2);

		$tMap->addColumn('CHILDRENFLAG', 'Childrenflag', 'string', CreoleTypes::VARCHAR, false, 5);

	} 
} 