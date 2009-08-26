<?php



class AcademicMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.AcademicMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('academic');
		$tMap->setPhpName('Academic');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addColumn('DEGREE', 'Degree', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DEGREEFLAG', 'Degreeflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('YEAR', 'Year', 'int', CreoleTypes::INTEGER, false, 4);

		$tMap->addColumn('YEARFLAG', 'Yearflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DEPARTMENTFLAG', 'Departmentflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('INSTITUTE', 'Institute', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('INSTITUTEFLAG', 'Instituteflag', 'string', CreoleTypes::VARCHAR, false, 5);

	} 
} 