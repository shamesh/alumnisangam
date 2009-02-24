<?php

/**
 * home actions.
 *
 * @package    shopper
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class homeActions extends sfActions
{
	/**
	 * Executes index action
	 *
	 */

	public function executeIndex()
	{
		$c = new Criteria();
		$branches = BranchPeer::doSelect($c);
		$options = array();
		$options[] = 'Select Department';
		foreach($branches as $branch)
		{
			$options[$branch->getId()] = $branch->getName();
		}
		$this->options = $options;
	}
	public function executeAdmin()
	{
		if($this->getUser()->hasCredential('admin')){
			return $this->forward('home', 'adminmenu');
		}
	}
	public function executeError404()
	{

	}
	public function executeSecure()
	{

	}

	public function executeAdminmenu()
	{

	}
	public function executeLogin()
	{
		$username=$this->getRequestParameter('username');
		$password=$this->getRequestParameter('password');
		$c = new Criteria();
		$c->add(UserPeer::USERNAME, $username);
		$user = UserPeer::doSelectOne($c);
		if($user)
		{
			$islocked=$user->getIslocked();
			if($islocked=="0")
			{
				$salt = md5("I am Indian.");
				if(sha1($salt.$password) == $user->getPassword())
				{
		//			$userroles=$user->getUserroles();
		//			foreach($userroles as $r){
		//				$this->getUser()->addCredential($r->getRole()->getName());
		//			}
		//		if($password == $user->getPassword())
		//		{
					$c = new Criteria();
					$c->addJoin(UserPeer::ID, UserrolePeer::USER_ID);
					$c->addJoin(UserrolePeer::ROLE_ID, RolePeer::ID);
					$c->add(UserPeer::USERNAME, $username);
					
					$roles = RolePeer::doSelect($c);
					foreach($roles as $role)
					{
						$this->getUser()->addCredential($role->getName());
					}
					$this->getUser()->setAuthenticated(true);
					$this->getUser()->setAttribute('username',$user->getUsername());
					
					$this->getUser()->setAttribute('userid', $user->getId());
					if($this->getUser()->hasCredential('admin'))
					{
						return $this->redirect('home/adminmenu');
					}
					else
					{
						return $this->redirect('personal/show');
					}
		//		}
		//		else
		//		{
		//			$this->setFlash('login', 'Invalid username or password.');
		//			return $this->redirect('home/admin');
		//		}
				}
				else
				{
					$this->setFlash('login', 'Invalid username or password.');
					return $this->redirect('home/admin');
				}
			}
			else
			{
				$this->setFlash('login', 'Username is not Enabled.');
				return $this->redirect('home/admin');
			}
		}
		else
		{
			$this->setFlash('login', 'Username is not Enabled.');
			return $this->redirect('home/admin');
		}
	}
	public function executeLogout()
	{
		$this->getUser()->setAuthenticated();
		$this->getUser()->clearCredentials();
		$this->getUser()->getAttributeHolder()->remove('username');
		$this->redirect('home/admin');
	}
	public function executeAccessdenied()
	{


	}
	
	public function executeRegsearch()
	{
		//$name = $this->getRequestParameter('name');
		$year = $this->getRequestParameter('year');
		//$enrol = $this->getRequestParameter('enrol');
		$branch = $this->getRequestParameter('branch');
		
		$c = new Criteria();
		$c->add(UserPeer::ISLOCKED, '1');
		/*if($name)
		{
			$c->addJoin(UserPeer::ID, PersonalPeer::USER_ID);
			$c1 = $c->getNewCriterion(PersonalPeer::FIRSTNAME, $name);
			$c1->addOr($c->getNewCriterion(PersonalPeer::MIDDLENAME, $name));
			$c1->addOr($c->getNewCriterion(PersonalPeer::LASTNAME, $name));
			$c->add($c1);
		}*/
		if($year)
		{
			$c->add(UserPeer::GRADUATIONYEAR, $year);
		}
	/*	if($enrol)
		{
			$c->add(UserPeer::ENROLMENT, $enrol);
		}*/
		if($branch)
		{
			$c->addJoin(UserPeer::BRANCH_ID, BranchPeer::ID);
			$c->add(BranchPeer::ID, $branch);
		}
		
		$this->regusers = UserPeer::doSelect($c);
	}

	public function executeRegverify()
	{
		$userid = $this->getRequestParameter('regradio');
		$c = new Criteria();
		$c->add(PersonalPeer::USER_ID, $userid);
		$this->personal = PersonalPeer::doSelectOne($c);
	}
	
	public function executeRegmail()
	{
		$userid = $this->getRequestParameter('userid');
		$roll = $this->getRequestParameter('roll');
		$hawa = $this->getRequestParameter('hawa');
		$city = $this->getRequestParameter('city');
		$hod = $this->getRequestParameter('hod');
		$director = $this->getRequestParameter('director');
		$teacher = $this->getRequestParameter('favteacher');
		$lanka = $this->getRequestParameter('favlankashop');
		$email = $this->getRequestParameter('email');
		
		$user = UserPeer::retrieveByPK($userid);
		if($user)
		{
			$username = $user->getUsername();
			$c = new Criteria();
			$c->add(PersonalPeer::USER_ID, $userid);
			$personal = PersonalPeer::doSelectOne($c);
			$name = $personal->getFirstname()." ".$personal->getMiddlename()." ".$personal->getLastname();
			
			$user->setIslocked('2');
			$user->setPassword($email);
			$user->save();
		}		
		$sendermail = sfConfig::get('app_from_mail');
		$sendername = sfConfig::get('app_from_name');
		$to = sfConfig::get('app_to_adminmail');
		$subject = "Registration request for ITBHU Global Org";
		$body='
  Hi ,
 
  I want to connect to ITBHU Global. My verification information is: 

';
		$body=$body.'Roll Number :            '.$roll.'
';
		$body=$body.'HAWA :                   '.$hawa.'
';
		$body=$body.'City :                   '.$city.'
';
		$body=$body.'HoD :                    '.$hod.'
';
		$body=$body.'Director :               '.$director.'
';
		$body=$body.'Favourite Teacher :      '.$teacher.'
';
		$body=$body.'Favuorite Lanka Shop :   '.$lanka.'
';
		$body=$body.'My Email :               '.$email.'
';		
		$body=$body.'Username I am claiming : '.$username.'

';
		$body=$body.'Thanks,';
		$body=$body.'
'.$name;
		
		
		$mail = myUtility::sendmail($sendermail, $sendername, $sendermail, $sendername, $sendermail, $to, $subject, $body);
		
		
		$sendermail = sfConfig::get('app_from_mail');
		$sendername = sfConfig::get('app_from_name');
		$to = $email;
		$subject = "Registration request for ITBHU Global Org";
		$body ='
		Dear '.$name.',
		
		Thank you for your connect request. We\'ll get back to you shortly.	
		
		
		Admin,
		ITBHU Global
		';
		$mail = myUtility::sendmail($sendermail, $sendername, $sendermail, $sendername, $sendermail, $to, $subject, $body);
		
	}

	public function executeRegisternewform()
	{
		$c = new Criteria();
		$branches = BranchPeer::doSelect($c);
		$options = array();
		$options[] = 'Select Department';
		foreach($branches as $branch)
		{
			$options[$branch->getId()] = $branch->getName();
		}
		$this->options = $options;		
	}
	
	public function executeRegisternew()
	{
		$user = new User();
		$personal = new Personal();
		
		$user->setBranchId($this->getRequestParameter('branch'));
		$user->setGraduationyear($this->getRequestParameter('year'));
		$user->setUsername($this->getRequestParameter('username'));
		$user->setIslocked('3');
		$user->save();
		
		$personal->setUserId($user->getId());
		$personal->setFirstname($this->getRequestParameter('firstname'));
		$personal->setMiddlename($this->getRequestParameter('middlename'));
		$personal->setLastname($this->getRequestParameter('lastname'));
		$personal->setEmail($this->getRequestParameter('email'));
		$personal->save();
	}
	
	public function handleErrorRegisternew()
	{
		$this->forward('home', 'registernewform');
	}

}
