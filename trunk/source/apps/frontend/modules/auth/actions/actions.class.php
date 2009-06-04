<?php

class authActions extends sfActions
{
  public function executePendinglist()
  {
	  if($this->getUser()->hasCredential('admin')){
  		$c = new Criteria();
	  	$c->addJoin(UserPeer::ID, PersonalPeer::USER_ID);
	  	$c->addJoin(UserPeer::DEGREE_ID, DegreePeer::ID);
	  	$c->addJoin(UserPeer::BRANCH_ID, BranchPeer::ID);
	  	$c->add(UserPeer::ISLOCKED, '2');
	  	$this->personal = PersonalPeer::doSelect($c);
	  }else{
		if($this->getUser()->hasCredential('auth')){
			$me = UserPeer::retrieveByPK($this->getUser()->getAttribute('userid'));
			
			$c = new Criteria();
			$c->addJoin(UserPeer::ID, PersonalPeer::USER_ID);
			$c->add(UserPeer::ISLOCKED, '2');
			$c->add(UserPeer::GRADUATIONYEAR, $me->getGraduationyear());
			$c->add(UserPeer::BRANCH_ID, $me->getBranchId());
			$c->add(UserPeer::AUTHCODE, sfConfig::get('app_authcode_classauth'));
			$this->personalca = PersonalPeer::doSelect($c);
			
			$ugyear = $me->getGraduationyear() - 2;
			$lgyear = $me->getGraduationyear() + 2;
			$c = new Criteria();
			$c->addJoin(UserPeer::ID, PersonalPeer::USER_ID);
			$c->add(UserPeer::ISLOCKED, '2');
			$c->add(UserPeer::GRADUATIONYEAR, $ugyear, Criteria::GREATER_EQUAL);
			$c->add(UserPeer::GRADUATIONYEAR, $lgyear, Criteria::LESS_EQUAL);
			$c->add(UserPeer::BRANCH_ID, $me->getBranchId());
			$c->add(UserPeer::AUTHCODE, sfConfig::get('app_authcode_otherauth'));
			$this->personaloa = PersonalPeer::doSelect($c);
		}
		if($this->getUser()->hasCredential('masterauth')){
			$c = new Criteria();
			$c->addJoin(UserPeer::ID, PersonalPeer::USER_ID);
			$c->add(UserPeer::AUTHCODE, sfConfig::get('app_authcode_masterauth'));
			$c->add(UserPeer::ISLOCKED, '2');
			$this->personalma = PersonalPeer::doSelect($c);
		}
	  }
  }
	
  public function executeManagenewuser()
  {
  	$ids = $this->getRequestParameter('ids');
  	$action = $this->getRequestParameter('action1');
  	$value = 5;
  	if($action == 'approve')
  	{
  		$value = 0;
  	}
  	elseif($action == 'reject')
  	{
  		$value = 1;
  	}
  	$idlist = split(',',$ids);
  	$count = 0;
  	foreach($idlist as $id)
  	{
  		$user = UserPeer::retrieveByPK($id);
  		$previslocked = 5;
		if($user)
		{
			$previslocked = $user->getIslocked();
			$c = new Criteria();
			$c->add(PersonalPeer::USER_ID, $user->getId());
			$personal = PersonalPeer::doSelectOne($c);
			$name = $personal->getFirstname()." ".$personal->getMiddlename()." ".$personal->getLastname();
			$newmail = $personal->getEmail();
			
			$newpassword = $this->generatePassword();
  			$user->setIslocked($value);
  			$user->setPassword($newpassword);
  			
  			$count++;
  			
			$sendermail = sfConfig::get('app_from_mail');
			$sendername = sfConfig::get('app_from_name');
			$to = $newmail;
			$subject = "Registration request for ITBHU Global Org";
			if($action == 'approve')
			{
				$userrole = new Userrole();
				$userrole->setRoleId(sfConfig::get('app_role_user'));
				$userrole->setUserId($id);
				$userrole->save();
				
				$professional = new Professional();
				$professional->setUserId($id);
				$professional->save();
				
				$academic = new Academic();
				$academic->setUserId($id);
				$academic->save();
				
				$user->save();
				$body ='
Dear '.$name.',

Congrats!! You are now connected to ITBHU GLOBAL.

Your Login Details are:

Username: '.$user->getUsername().'
Password: '.$newpassword.'

Admin,
ITBHU Global
';

				//check if there is any authorizer for the batch..
				$ca = new Criteria();
				$ca->add(UserPeer::BRANCH_ID, $user->getBranchId());
				$ca->add(UserPeer::GRADUATIONYEAR, $user->getGraduationyear());
				$ca->addJoin(UserPeer::ID, UserrolePeer::USER_ID);
				$ca->add(UserrolePeer::ROLE_ID, sfConfig::get('app_role_auth'));
				$authuser = UserPeer::doSelectOne($ca);
				if(!$authuser){
					$body1 ='
Dear '.$name.',

Currently there are no authorizers for your batch.

You are invited for the role of Authorizer for your batch.
To accept/reject the invitation, login to http://itbhuglobal.org
and go to settings->invitations.

On accepting the role, you\'ll recieve approval requests from y-
our batchmates.

Admin,
ITBHU Global
';
				}
			}
			elseif($action == 'reject')
			{
				if($previslocked == 2){
					$user->setIslocked('1');
					$user->save();
				}else{
					$user->delete();
					$personal->delete();
				}
				$body ='
Dear '.$name.',

Your connect request to ITBHU GLOBAL is not approved as your details couldn\'t be verified. 	


Admin,
ITBHU Global
';
			}
			$mail = myUtility::sendmail($sendermail, $sendername, $sendermail, $sendername, $sendermail, $to, $subject, $body);
  			if($body1){
				$mail = myUtility::sendmail($sendermail, $sendername, $sendermail, $sendername, $sendermail, $to, $subject, $body1);
				$body1 = '';
				$user->setIsinvited('4');
				$user->save();
			}
			
		}
  	}
  	if($action == 'approve')
  	{
  		if($count == 0)
  		{
  			$this->setFlash('newuseraction', 'No user(s) selected to approve');
  		}
  		else
  		{
  			$this->setFlash('newuseraction', 'You have successfuly approved '.$count.' users');
  		}
  	}
  	elseif($action == 'reject')
  	{
  		if($count == 0)
  		{
  			$this->setFlash('newuseraction', 'No user(s) selected to reject');
  		}
  		else
  		{
  			$this->setFlash('newuseraction', 'You have successfuly rejected '.$count.' users');
  		}
  	}
  	if($this->getRequestParameter('from') == 'new'){
  		return $this->redirect('auth/newregister');
  	}else{
  		return $this->redirect('auth/pendinglist');
  	}
  	
  }

  public function generatePassword($length = 8)
  {
	  $password = "";
	  $possible = "23456789abcdefghjkmnpqrstvwxyzABCDEFGHJKMNPQRSTVWXYZ!@$#%"; 
	  $i = 0; 
	  while ($i < $length) 
	  { 
	    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
	    if (!strstr($password, $char)) { 
	      $password .= $char;
	      $i++;
	    }
	  }
	  return $password;
  }

  public function executeNewregister()
  {
  /*	$c = new Criteria();
  	$c->addJoin(UserPeer::ID, PersonalPeer::USER_ID);
  	$c->addJoin(UserPeer::BRANCH_ID, BranchPeer::ID);
  	$c->add(UserPeer::ISLOCKED, '3');
  	$this->personal = PersonalPeer::doSelect($c);  */	
	if($this->getUser()->hasCredential('admin')){
	  	$c = new Criteria();
	  	$c->addJoin(UserPeer::ID, PersonalPeer::USER_ID);
	  	$c->addJoin(UserPeer::DEGREE_ID, DegreePeer::ID);
	  	$c->addJoin(UserPeer::BRANCH_ID, BranchPeer::ID);
	  	$c->add(UserPeer::ISLOCKED, '3');
	  	$this->personal = PersonalPeer::doSelect($c);
	}else{
		if($this->getUser()->hasCredential('auth')){
			$me = UserPeer::retrieveByPK($this->getUser()->getAttribute('userid'));
			
			$c = new Criteria();
			$c->addJoin(UserPeer::ID, PersonalPeer::USER_ID);
			$c->add(UserPeer::ISLOCKED, '3');
			$c->add(UserPeer::GRADUATIONYEAR, $me->getGraduationyear());
			$c->add(UserPeer::BRANCH_ID, $me->getBranchId());
			$c->add(UserPeer::AUTHCODE, sfConfig::get('app_authcode_classauth'));
			$this->personalca = PersonalPeer::doSelect($c);
			
			$ugyear = $me->getGraduationyear() - 2;
			$lgyear = $me->getGraduationyear() + 2;
			$c = new Criteria();
			$c->addJoin(UserPeer::ID, PersonalPeer::USER_ID);
			$c->add(UserPeer::ISLOCKED, '3');
			$c->add(UserPeer::GRADUATIONYEAR, $ugyear, Criteria::GREATER_EQUAL);
			$c->add(UserPeer::GRADUATIONYEAR, $lgyear, Criteria::LESS_EQUAL);
			$c->add(UserPeer::BRANCH_ID, $me->getBranchId());
			$c->add(UserPeer::AUTHCODE, sfConfig::get('app_authcode_otherauth'));
			$this->personaloa = PersonalPeer::doSelect($c);
		}
		if($this->getUser()->hasCredential('masterauth')){
			$c = new Criteria();
			$c->addJoin(UserPeer::ID, PersonalPeer::USER_ID);
			$c->add(UserPeer::AUTHCODE, sfConfig::get('app_authcode_masterauth'));
			$c->add(UserPeer::ISLOCKED, '3');
			$this->personalma = PersonalPeer::doSelect($c);
		}
  	}
  	$this->type = 'new';
  	$this->setTemplate('pendinglist');
  }
  
  
}