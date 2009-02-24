<?php



class UserMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.UserMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('user');
		$tMap->setPhpName('User');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('USERNAME', 'Username', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('PASSWORD', 'Password', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('ENROLMENT', 'Enrolment', 'int', CreoleTypes::INTEGER, false, 20);

		$tMap->addColumn('ENROLFLAG', 'Enrolflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('ROLL', 'Roll', 'int', CreoleTypes::INTEGER, false, 20);

		$tMap->addColumn('ROLLFLAG', 'Rollflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('GRADUATIONYEAR', 'Graduationyear', 'int', CreoleTypes::INTEGER, false, 4);

		$tMap->addColumn('GRADUATIONYEARFLAG', 'Graduationyearflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addForeignKey('BRANCH_ID', 'BranchId', 'int', CreoleTypes::INTEGER, 'branch', 'ID', false, null);

		$tMap->addColumn('BRANCHFLAG', 'Branchflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addForeignKey('DEGREE_ID', 'DegreeId', 'int', CreoleTypes::INTEGER, 'degree', 'ID', false, null);

		$tMap->addColumn('DEGREEFLAG', 'Degreeflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('SECRETQUESTION', 'Secretquestion', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('SECRETANSWER', 'Secretanswer', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('ISLOCKED', 'Islocked', 'boolean', CreoleTypes::BOOLEAN, false, null);

	} 
} 