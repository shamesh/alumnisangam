
<?php


class friendActions extends sfActions
{
  public function executeAdd()
  {
    $touserid = $this->getRequestParameter('id');
    $touser = UserPeer::retrieveByPK($touserid);
    $fromuserid = $this->getUser()->getAttribute('userid');

    $friend = new Friend();
    $friend->setUserId($touserid);
    $friend->save();
    
    $userfriend = new Userfriend();
    $userfriend->setUserId($fromuserid);
    $userfriend->setFriendId($friend->getId());
    $userfriend->save();
    
    $this->setFlash('notice', '<font style="background-color: yellow">Friend request sent to <b>'.$touser->getFullname().'</b>.</font>');
  	$this->redirect('search/result?page='.$this->getUser()->getAttribute('srpage'));
  }

  public function executeInvites(){
  	$loggedid = $this->getUser()->getAttribute('userid');

  	$c = new Criteria();
  	$c->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
	$c->add(UserfriendPeer::USER_ID, $loggedid);
	$c->addSelectColumn(FriendPeer::USER_ID);
	$reqlist = FriendPeer::doSelectRS($c);
	
	$reqarray = array();
	foreach($reqlist as $id){
		$reqarray[] = $id[0];
	}
  	
	$c->clear();
	$c->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
	$c->add(FriendPeer::USER_ID, $loggedid);
	$c->add(UserfriendPeer::USER_ID, $reqarray, Criteria::NOT_IN);
	
	$this->getUser()->setAttribute('ifpage', $this->getRequestParameter('page', 1));
	$pager = new sfPropelPager('Userfriend', sfConfig::get('app_pager_friendpage'));
	$pager->setCriteria($c);
	$pager->setPage($this->getRequestParameter('page', 1));
	$pager->init();
	$this->pager = $pager;
  }
  
  public function executeRequests(){
  	$loggedid = $this->getUser()->getAttribute('userid');

  	$c = new Criteria();
  	$c->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
	$c->add(FriendPeer::USER_ID, $loggedid);
	$c->addSelectColumn(UserfriendPeer::USER_ID);
	$reqlist = UserfriendPeer::doSelectRS($c);
	
	$reqarray = array();
	foreach($reqlist as $id){
		$reqarray[] = $id[0];
	}
  	
	$c->clear();
	$c->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
	$c->add(UserfriendPeer::USER_ID, $loggedid);
	$c->add(FriendPeer::USER_ID, $reqarray, Criteria::NOT_IN);
	
	$this->getUser()->setAttribute('efpage', $this->getRequestParameter('page', 1));
	$pager = new sfPropelPager('Userfriend', sfConfig::get('app_pager_friendpage'));
	$pager->setCriteria($c);
	$pager->setPage($this->getRequestParameter('page', 1));
	$pager->init();
	$this->pager = $pager;
	$this->type = 'req';
	$this->setTemplate('myfriends');
  }
  
  public function executeMyfriends(){
  	$loggedid = $this->getUser()->getAttribute('userid');

  	$c = new Criteria();
  	$c->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
	$c->add(FriendPeer::USER_ID, $loggedid);
	$c->addSelectColumn(UserfriendPeer::USER_ID);
	$reqlist = UserfriendPeer::doSelectRS($c);
	
	$reqarray = array();
	foreach($reqlist as $id){
		$reqarray[] = $id[0];
	}
  	
	$c->clear();
	$c->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
	$c->add(UserfriendPeer::USER_ID, $loggedid);
	$c->add(FriendPeer::USER_ID, $reqarray, Criteria::IN);
	
	$this->getUser()->setAttribute('efpage', $this->getRequestParameter('page', 1));
	$pager = new sfPropelPager('Userfriend', sfConfig::get('app_pager_friendpage'));
	$pager->setCriteria($c);
	$pager->setPage($this->getRequestParameter('page', 1));
	$pager->init();
	$this->pager = $pager;
  }
  
  public function executeDelete(){
  	$friendid = $this->getRequestParameter('id');
  	$loggedid = $this->getUser()->getAttribute('userid');
  	$friend = UserPeer::retrieveByPK($friendid);
  	
  	$this->delfriend($friendid, $loggedid);
  	$this->delfriend($loggedid, $friendid);
  	
  	$this->setFlash('notice', '<font style="background-color: yellow"><b>'.$friend->getFullname().'</b> has been removed from your friends list.</font>');
  	$this->redirect('friend/myfriends?page='.$this->getUser()->getAttribute('efpage'));
  }
  
  protected function delfriend($id1, $id2){
  	$c = new Criteria();
  	$c->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
  	$c->add(UserfriendPeer::USER_ID, $id1);
  	$c->add(FriendPeer::USER_ID, $id2);
  	$fr1 = UserfriendPeer::doSelectOne($c);
  	$fr1->getFriend()->delete();
  	$fr1->delete();
  }
  
  public function executeApprove(){
  	$toid = $this->getRequestParameter('id');
  	$loggedid = $this->getUser()->getAttribute('userid');
  	$friend = new Friend();
  	$friend->setUserId($toid);
  	$friend->save();
  	
  	$userfriend = new Userfriend();
  	$userfriend->setUserId($loggedid);
  	$userfriend->setFriendId($friend->getId());
  	$userfriend->save();
  	$this->setFlash('notice', '<font style="background-color: yellow"><b>'.$friend->getUser()->getFullname().'</b> has been added to your friends list.</font>');
  	$this->redirect('friend/invites?page='.$this->getUser()->getAttribute('ifpage'));
  }
  
  public function executeReject(){
  	$toid = $this->getRequestParameter('id');
  	$loggedid = $this->getUser()->getAttribute('userid');
  	
  	$c = new Criteria();
  	$c->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
  	$c->add(FriendPeer::USER_ID, $loggedid);
  	$c->add(UserfriendPeer::USER_ID, $toid);
  	$uf = UserfriendPeer::doSelectOne($c);
  	$uf->getFriend()->delete();
  	$uf->delete();
  	$this->setFlash('notice', '<font style="background-color: yellow"><b>'.$friend->getUser()->getFullname().'</b> has been denied.</font>');
  	$this->redirect('friend/invites?page='.$this->getUser()->getAttribute('ifpage'));
  }
  
  public function executeCancel(){
  	$toid = $this->getRequestParameter('id');
  	$loggedid = $this->getUser()->getAttribute('userid');
  	$friendname = UserPeer::retrieveByPK($toid)->getFullname();
  	
  	$c = new Criteria();
  	$c->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
  	$c->add(FriendPeer::USER_ID, $toid);
  	$c->add(UserfriendPeer::USER_ID, $loggedid);
  	$uf = UserfriendPeer::doSelectOne($c);
  	$uf->getFriend()->delete();
  	$uf->delete();
  	$this->setFlash('notice', '<font style="background-color: yellow"> Friend request to <b>'.$friendname.'</b> has been cancelled.</font>');
  	$this->redirect('friend/requests?page='.$this->getUser()->getAttribute('ifpage'));
  }
  
}
