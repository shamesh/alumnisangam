<?php
class homeComponents extends sfComponents {
	public function  executeHeader(){
		
	}
	public function  executeMenu(){

		
	}
	public function  executeTab(){

	}
	public function  executeFooter(){
	}
	public function  executeMessages(){
	}
	public function executeLeftmenu()
	{
		$c = new Criteria();
		$c->add(UserPeer::ISLOCKED, '2');
		$this->claimed = UserPeer::doCount($c);
		
		$c = new Criteria();
		$c->add(UserPeer::ISLOCKED, '3');
		$this->newreg = UserPeer::doCount($c);
	}
	public function executeGlobalheader(){
		
	}
}
?>