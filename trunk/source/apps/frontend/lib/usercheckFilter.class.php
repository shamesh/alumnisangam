<?php
class usercheckFilter extends sfFilter
{
	public function execute($filterChain){
/*		if($this->isFirstCall()){
			$request=$this->getContext()->getRequest();
			$user=$this->getContext()->getUser();
			$user->setAuthenticated(true);
			if(!$user->hasCredential('sysadmin') && !$user->hasCredential('admin') && !$user->hasCredential('hr') && !$user->hasCredential('pm') && !$user->hasCredential('sales') && !$user->hasCredential('employee')){
				$user->getAttributeHolder()->remove('username');
			}
		}*/
		$filterChain->execute();
	}
}