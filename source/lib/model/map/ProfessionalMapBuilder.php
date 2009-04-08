<?php



class ProfessionalMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ProfessionalMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('professional');
		$tMap->setPhpName('Professional');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addColumn('EMPLOYER', 'Employer', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('EMPLOYERFLAG', 'Employerflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('POSITION', 'Position', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('POSITIONFLAG', 'Positionflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('FROM', 'From', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('TO', 'To', 'int', CreoleTypes::DATE, false, null);

	} 
} 