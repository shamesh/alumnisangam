<?php
// auto-generated by sfPropelCrud
// date: 2009/02/10 08:14:41
?>
<?php

/**
 * user actions.
 *
 * @package    sf_sandbox
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class userActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('user', 'pendinglist');
  }

  public function executeList()
  {
    $this->users = UserPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->user = UserPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->user);
  }

  public function executeCreate()
  {
    $this->user = new User();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->user = UserPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->user);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $user = new User();
    }
    else
    {
      $user = UserPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($user);
    }

    $user->setId($this->getRequestParameter('id'));
    $user->setUsername($this->getRequestParameter('username'));
    $user->setPassword($this->getRequestParameter('password'));
    $user->setEnrolment($this->getRequestParameter('enrolment'));
    $user->setEnrolflag($this->getRequestParameter('enrolflag'));
    $user->setRoll($this->getRequestParameter('roll'));
    $user->setRollflag($this->getRequestParameter('rollflag'));
    $user->setGraduationyear($this->getRequestParameter('graduationyear'));
    $user->setGraduationyearflag($this->getRequestParameter('graduationyearflag'));
    $user->setBranchId($this->getRequestParameter('branch_id') ? $this->getRequestParameter('branch_id') : null);
    $user->setBranchflag($this->getRequestParameter('branchflag'));
    $user->setDegreeId($this->getRequestParameter('degree_id') ? $this->getRequestParameter('degree_id') : null);
    $user->setDegreeflag($this->getRequestParameter('degreeflag'));
    $user->setSecretquestion($this->getRequestParameter('secretquestion'));
    $user->setSecretanswer($this->getRequestParameter('secretanswer'));
    $user->setIslocked($this->getRequestParameter('islocked', 0));

    $user->save();

    return $this->redirect('user/show?id='.$user->getId());
  }

  public function executeDelete()
  {
    $user = UserPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($user);

    $user->delete();

    return $this->redirect('user/list');
  }
   
  public function executeForgotpasswordform(){
  	
  }
  
  public function executeForgotpassword()
  {
  	$email = $this->getRequestParameter('forgotemail');
  	$c = new Criteria();
  	$c->add(PersonalPeer::EMAIL, $email);
  	$personals = PersonalPeer::doSelect($c);
  	$count = 0;
  	$ids = "";
  	foreach ($personals as $personal){
	  	$user = $personal->getUser();
	  	$name = $user->getFullname();
		$newpassword = $this->generatePassword();
	  	$user->setPassword($newpassword);
	  	$user->save();
	  	
	  	$sendermail = sfConfig::get('app_from_mail');
		$sendername = sfConfig::get('app_from_name');
		$to = $email;
		$subject = "Password reset request for ITBHU Global Org";
		$body ='
Dear '.$name.',
		
As per your request, your password has been reset.
		
Your Login Details are:
		
Username: '.$user->getUsername().'
Password: '.$newpassword.'
		
Admin,
ITBHU Global
';
		
	  	$mail = myUtility::sendmail($sendermail, $sendername, $sendermail, $sendername, $sendermail, $to, $subject, $body);
	  	$count++;
	  	if($ids){
	  		$ids.="\n".$user->getUsername();
	  	}else{
	  		$ids.=$user->getUsername();
	  	}
  	}
  	if($count > 1){
	  	$sendermail = sfConfig::get('app_from_mail');
		$sendername = sfConfig::get('app_from_name');
		$to = sfConfig::get('app_to_adminmail');
		$subject = "Password reset for multiple users";
		$body ='
Dear Admin,
		
As per a request, the password has been reset for the following usernames:
		
'.$ids.'
		
The common email used here is: '.$email.'
		
		
System,
ITBHU Global
';
		
	  	$mail = myUtility::sendmail($sendermail, $sendername, $sendermail, $sendername, $sendermail, $to, $subject, $body);
  	}
	//$this->setFlash('fp', 'If the Email provided by you is correct and registered, You\'ll recieve a mail soon.' );
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
  
  public function handleErrorForgotpassword()
  {
		$this->forward('user','forgotpasswordform');
  }

  public function executeWelcome(){
  	$this->user = UserPeer::retrieveByPK($this->getUser()->getAttribute('userid')); 
  }

  public function executeSearch()
	{
		$this->mdl = $this->getRequestParameter('mdl');
		$this->fnc = $this->getRequestParameter('fnc');
		
		$branchid = $this->getRequestParameter('branchoption');
		$chapterid = $this->getRequestParameter('chapteroption');
		$year = $this->getRequestParameter('yearoption');
		$degreeid = $this->getRequestParameter('degreeoption');
		// $currentlyat = $this->getRequestParameter('currentlyat');
		
		$flag = 0;
		
		$c = new Criteria();
		if($branchid != 0)
		{
			$c->add(UserPeer::BRANCH_ID, $branchid);
			$flag = 1;
		}
		if($chapterid != 0)
		{
			$c->addJoin(UserPeer::ID, UserchapterregionPeer::USER_ID);
			$c->addJoin(UserchapterregionPeer::CHAPTERREGION_ID, ChapterregionPeer::ID);
			$c->add(ChapterregionPeer::CHAPTER_ID, $chapterid);
			$flag = 1;
		}
		if($year != 0)
		{
			$c->add(UserPeer::GRADUATIONYEAR, $year);
			$flag = 1;
		}
		if($degreeid != 0)
		{
			$c->add(UserPeer::DEGREE_ID, $degreeid);
			$flag = 1;
		}

		if($flag == 1)
		{
			$this->results = UserPeer::doSelect($c);
		}
		else
		{
			$this->flag = 1;
			$this->setFlash('searchnone', 'Select At least one field...');
			return $this->redirect('user/searchform');
		}
		$this->chapterid = $chapterid;
	}
  
  public function executeComposemail(){
  	if($this->getRequestParameter('id')){
		$this->toid = $this->getRequestParameter('id');
		$this->user = UserPeer::retrieveByPK($this->toid);
  	}else{
		$userids = split(',', $this->getRequestParameter('bulk'));
		$this->count = count($userids);
		$this->getUser()->setAttribute('bulkmailids', $userids);
  	}
  }

  public function executeSendmail(){
		$subject = $this->getRequestParameter('subject');
		$body = $this->getRequestParameter('mailbody');
		
		$loggeduser = UserPeer::retrieveByPK($this->getUser()->getAttribute('userid'));
		$sendermail = $loggeduser->getEmail();
		$sendername = $loggeduser->getFullname();

		$counts = 0;
		$countf = 0;
		if($this->getRequestParameter('type') == 'single'){
			$user = UserPeer::retrieveByPK($this->getRequestParameter('toid'));
			$to = $user->getEmail();
			$mail = myUtility::sendmail($sendermail, $sendername, $sendermail, $sendername, $sendermail, $to, $subject, $body);
			$this->setFlash('notice', 'Mail sent to <b>'.$user->getFullname().'</b> successfully.');
		}elseif($this->getRequestParameter('type')=='bulk'){
			$userids = $this->getUser()->getAttribute('bulkmailids');
			$this->getUser()->getAttributeHolder()->remove('bulkmailids');
			foreach ($userids as $uid){
				$user = UserPeer::retrieveByPK($uid);
				$to = $user->getEmail();
				if($to){
					$mail = myUtility::sendmail($sendermail, $sendername, $sendermail, $sendername, $sendermail, $to, $subject, $body);
					$counts++;
				}else{
					$countf++;
				}
			}
			$this->setFlash('notice', 'Mail sent to <b>'.$counts.'</b> users successfully. While <b>'.$countf.'</b> users dont have an email.');
		}
  		$this->redirect('search/result?page='.$this->getUser()->getAttribute('srpage'));
		/*$sendermail = sfConfig::get('app_from_mail');
		$sendername = sfConfig::get('app_from_name');*/
		/*$userids = $this->getUser()->getAttribute('uu');
		$this->getUser()->getAttributeHolder()->remove('uu');*/
/*		if($option == 'm'){
			echo count($userids);
			foreach ($userids as $uid){
				echo "hello";
				$ab = $uid;
				$user = UserPeer::retrieveByPK($uid);
				$to = $user->getEmail();
				$mail = myUtility::sendmail($sendermail, $sendername, $sendermail, $sendername, $sendermail, $to, $subject, $body);
			}
		}
		else {
		echo count($userids);
			foreach ($userids as $uid){
				echo "hello";
				$ab = $uid;
				$user = UserPeer::retrieveByPK($uid);
				$to = $user->getEmail();
				$mail = myUtility::sendmail($sendermail, $sendername, $sendermail, $sendername, $sendermail, $to, $subject, $body);
			}
		}*/
  }
   
  public function executeInvite(){
	$userid =  $this->getUser()->getAttribute('userid');
	$user = UserPeer::retrieveByPK($userid);
    $this->fullname = $user->getFullname();
  }
  
  public function executeSendinvite(){
	   $this->emailid =$this->getRequestParameter('emailid');
	    
		$userid = $this->getRequestParameter('userid');
		$subject = $this->getRequestParameter('subject');
		$body = $this->getRequestParameter('message');
	  	$sendermail = sfConfig::get('app_from_mail');
		$sendername = sfConfig::get('app_from_name');
		$user = UserPeer::retrieveByPK($userid);
		$to = $this->emailid ;
		$mail = myUtility::sendmail($sendermail, $sendername, $sendermail, $sendername, $sendermail, $to, $subject, $body);
  }

  public function handleErrorSendinvite()
	{
		$this->forward('user','sendinvite');
	}

  public function executeLor(){
  	$this->type = $this->getRequestParameter('type');
  	$this->toid = $this->getRequestParameter('for');
  	$this->foruser = UserPeer::retrieveByPK($this->toid);
  	$badges = BadgePeer::doSelect(new Criteria());
  	$allbadges = array();
  	foreach ($badges as $badge){
  		$allbadges[$badge->getName()] = $badge->getName();
  	}
  	$this->badges = $allbadges;
  }
  
  public function executeLorsubmit(){
  	$data = $this->getRequestParameter('lorvalue');
  	$type = $this->getRequestParameter('type');
  	$toid = $this->getRequestParameter('toid');
  	$lorForUser = UserPeer::retrieveByPK($toid);
  	$lorById = $this->getUser()->getAttribute('userid');
  	if($lorById){
  		$lorByUser = UserPeer::retrieveByPK($lorById);
  		$fromName = $lorByUser->getFullname();
  	}else{
  		$fromName = "Guest";
  	}
  	
  	$lorvalue = new Lorvalues();
  	$lorvalue->setLorfieldsId(sfConfig::get('app_lor_'.$type));
  	$lorvalue->setData($data);
  	$lorvalue->setUserId($lorById);
  	$lorvalue->setCreatedAt(time());
  	$lorvalue->save();
  	
  	$loruser = new Loruser();
  	$loruser->setLorvaluesId($lorvalue->getId());
  	$loruser->setUserId($toid);
	$loruser->save();
  	
      if($type == 'email'){
		$mail = new sfMail();
		$mail->initialize();
		//$mail->addCc(sfConfig::get('app_to_adminmail'));
		$mail->addAddress($lorForUser->getEmail());
		
  		$sendermail = sfConfig::get('app_from_mail');
		$sendername = sfConfig::get('app_from_name');
		$to = $newmail;
		$subject = "Alert: Connect with your friends at ".sfConfig::get('app_names_org');
		$body ='
			
Hi '.$lorForUser->getFullname().',
	
	'.$fromName.' has told us that your email address is 
	actually '.$newmail.'.  If so, we strongly encourage you to claim it 
	at '.sfConfig::get('app_urls_claim').' so you can connect with your friends.
	
	Admin,
	ITBHU Global
	';
		 $mail = myUtility::newsendmail($mail,$sendermail, $sendername, $sendermail, $sendername, $sendermail, $to, $subject, $body);
  	}
	
	$this->setFlash('notice', 'Your remark on '.sfConfig::get('app_lortext_'.$type).' has been saved successfully.');
	$this->redirect('/search/profile?id='.$toid);
  }

  	
  
}

  
