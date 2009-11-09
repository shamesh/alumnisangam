<?php



class MailsMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.MailsMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('mails');
		$tMap->setPhpName('Mails');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SUBJECT', 'Subject', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('MESSAGE', 'Message', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('SENDERNAME', 'Sendername', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('SENDERMAIL', 'Sendermail', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('RECIPIENTNAME', 'Recipientname', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('RECIPIENTMAIL', 'Recipientmail', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('APPROVED', 'Approved', 'boolean', CreoleTypes::BOOLEAN, false, null);

	} 
} 