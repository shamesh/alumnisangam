<?php



class PersonalMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.PersonalMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('personal');
		$tMap->setPhpName('Personal');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, null);

		$tMap->addColumn('IMAGE', 'Image', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('IMAGEFLAG', 'Imageflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('SALUTATION', 'Salutation', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('FIRSTNAME', 'Firstname', 'string', CreoleTypes::VARCHAR, false, 15);

		$tMap->addColumn('FIRSTNAMEFLAG', 'Firstnameflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('MIDDLENAME', 'Middlename', 'string', CreoleTypes::VARCHAR, false, 15);

		$tMap->addColumn('MIDDLENAMEFLAG', 'Middlenameflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('LASTNAME', 'Lastname', 'string', CreoleTypes::VARCHAR, false, 15);

		$tMap->addColumn('LASTNAMEFLAG', 'Lastnameflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('MAIDENNAME', 'Maidenname', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('MAIDENNAMEFLAG', 'Maidennameflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('ITBHUNAME', 'Itbhuname', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('ITBHUNAMEFLAG', 'Itbhunameflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('GENDER', 'Gender', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('GENDERFLAG', 'Genderflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('DOB', 'Dob', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DOBFLAG', 'Dobflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('MARITALSTATUS', 'Maritalstatus', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('MARITALSTATUSFLAG', 'Maritalstatusflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('EMAILFLAG', 'Emailflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('WEBSITE', 'Website', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('WEBSITEFLAG', 'Websiteflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('LINKEDIN', 'Linkedin', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('LINKEDINFLAG', 'Linkedinflag', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('HOBBIES', 'Hobbies', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('HOBBIESFLAG', 'Hobbiesflag', 'string', CreoleTypes::VARCHAR, false, 5);

	} 
} 