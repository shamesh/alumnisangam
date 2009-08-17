<?php
class homeComponents extends sfComponents {
	public function  executeHeader(){
		$this->modname = $this->getContext()->getModuleName();
		$this->actname = $this->getContext()->getActionName();
		$this->fullaction = $this->modname."*".$this->actname;
		if(($this->fullaction === "user*lorform") || ($this->fullaction === "user*composemail")){
			$this->modname = 'search';
		}
		
		if($this->getUser()->hasCredential('masterauth')){
			$c = new Criteria();
			$c->add(UserPeer::AUTHCODE, sfConfig::get('app_authcode_masterauth'));
			$c->add(UserPeer::ISLOCKED, '2');
			$this->claimed = UserPeer::doCount($c);
		}else{
			$c = new Criteria();
			$c->add(UserPeer::ISLOCKED, '2');
			$this->claimed = UserPeer::doCount($c);
		}
		
		if($this->getUser()->hasCredential('masterauth')){
			$c = new Criteria();
			$c->add(UserPeer::AUTHCODE, sfConfig::get('app_authcode_masterauth'));
			$c->add(UserPeer::ISLOCKED, '3');
			$this->newreg = UserPeer::doCount($c);
		}else{
			$c = new Criteria();
			$c->add(UserPeer::ISLOCKED, '3');
			$this->newreg = UserPeer::doCount($c);
		}
	}

	public function  executeMessages(){
	}
	public function executeLeftmenu()
	{
		/*$c = new Criteria();
		$c->add(UserPeer::ISLOCKED, '2');
		$this->claimed = UserPeer::doCount($c);
		
		$c = new Criteria();
		$c->add(UserPeer::ISLOCKED, '3');
		$this->newreg = UserPeer::doCount($c);

		$this->modname = $this->getModuleName();
		$this->actname = $this->getActionName();
		$this->fullaction = $this->modname."*".$this->actname;
		if(($this->fullaction === "user*lorform") || ($this->fullaction === "user*composemail")){
			$this->modname = 'search';
		}
		
		$this->roletype = $this->getRequestParameter('type');*/
	}
	public function executeGlobalheader(){
		
	}
}
?>