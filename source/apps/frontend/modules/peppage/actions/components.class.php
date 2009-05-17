<?php
class peppageComponents extends sfComponents {
	public function executeSitetabs()
	{
		//$userid = $this->getRequestParameter('id');
		$username = $this->getRequestParameter('un');
		$c = new Criteria();
		$c->add(UserPeer::USERNAME, $username);
		$user = UserPeer::doSelectOne($c);
		
		$c = new Criteria();
		$c->add(PepuserPeer::USER_ID, $user->getId());
		$c->addJoin(PepuserPeer::PEPPAGE_ID, PeppagePeer::ID);
  		$c->addAscendingOrderByColumn(PeppagePeer::SEQUENCE);
		$this->userpages = PepuserPeer::doSelect($c);
		$homepage = PepuserPeer::doSelectOne($c);
		$tabid = $this->getRequestParameter('tid');
		if(!$tabid){
			$tabid = $homepage->getPeppageId(); 
		}
		$this->tabid = $tabid;
		//$this->userid = $userid;
		//$user = UserPeer::retrieveByPK($userid);
		$this->username = $user->getUsername();
	}
}
?>