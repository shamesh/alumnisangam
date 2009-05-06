<?php

class adminActions extends sfActions
{
	/* Chapters */
	
  public function executeChapters()
  {
	$c = new Criteria();
	$c->addAscendingOrderByColumn(ChapterPeer::NAME);
  	$this->chapters = ChapterPeer::doSelect($c);
    $regions = RegionPeer::doSelect(new Criteria());
    foreach($regions as $region){
  		$regionOptions[$region->getId()] = $region->getName();
  	}
  	$this->regionOptions = $regionOptions;
  }
  
  public function executeAddchapter()
  {
  	$c = new Criteria();
  	$c->add(ChapterPeer::NAME, $this->getRequestParameter('chapter'));
  	$exchapter = ChapterPeer::doSelectOne($c);
  	if($exchapter){
  		$this->setFlash('notice', 'Chapter could not be added. A chapter with this name already exists.');
  	}else{
	    $chapter = new Chapter();
	    $chapter->setName($this->getRequestParameter('chapter'));
	    $chapter->save();
	    
	    $cr = new Chapterregion();
	    $cr->setChapterId($chapter->getId());
	    $cr->setRegionId($this->getRequestParameter('region'));
	  	$cr->save();
	  	
	  	$this->setFlash('notice', 'Chapter <b>'.$chapter->getName().'</b> has been created successfully.');
  	}
  	$this->redirect('admin/chapters');
  }

  public function executeEditchapter(){
  	$c = new Criteria();
  	$c->add(ChapterPeer::NAME, $this->getRequestParameter('chapter'));
  	$exchapter = ChapterPeer::doSelectOne($c);
  	if($exchapter){
  		$this->setFlash('notice', 'Chapter could not be added. A chapter with this name already exists.');
  	}else{
	  	$chaptername = $this->getRequestParameter('chapter');
	  	$regionid = $this->getRequestParameter('region');
	  	$chapter = ChapterPeer::retrieveByPK($this->getRequestParameter('id'));
	  	$chapter->setName($chaptername);
	  	$chapter->save();
	  	
	  	$cr = $chapter->getChapterregion();
	  	$cr->setRegionId($regionid);
	  	$cr->save();
	  	
	  	$this->setFlash('notice', 'Chapter Edited Successfully');
  	}
  	$this->redirect('admin/chapters');
  }
  
  public function executeDeletechapter(){
  	$chapter = ChapterPeer::retrieveByPK($this->getRequestParameter('id'));
  	$cr = $chapter->getChapterregion();
  	
  	$c = new Criteria();
  	$c->add(UserchapterregionPeer::CHAPTERREGION_ID, $cr->getId());
  	$ucount = UserchapterregionPeer::doCount($c);
  	$ucr = UserchapterregionPeer::doSelectOne($c);
  	if($ucr){
  		$this->setFlash('notice', 'Cannot delete chapter. <b>'.$ucount.'</b> user(s) are subscribed to this chapter.');
  	}else{
	  	$chapter->delete();
	  	$cr->delete();
	  	$this->setFlash('notice', 'Chapter Deleted Successfully');
  	}
  	$this->redirect('admin/chapters');
  }
  
  /* User Roles */
  
  public function executeUserroles(){
	$this->type = $this->getRequestParameter('type');
  	$c = new Criteria();
  	$c->add(UserrolePeer::ROLE_ID, sfConfig::get('app_role_'.$this->type));
  	$c->addJoin(UserPeer::ID, UserrolePeer::USER_ID);
  	$c->addAscendingOrderByColumn(UserPeer::GRADUATIONYEAR);
  	$this->userroles = UserrolePeer::doSelect($c);
  }
  
  public function executeRevokerole(){
  	$type = $this->getRequestParameter('type');
  	$userid = $this->getRequestParameter('id');
  	$c = new Criteria();
  	$c->add(UserrolePeer::USER_ID, $userid);
  	$c->add(UserrolePeer::ROLE_ID, sfConfig::get('app_role_'.$type));
  	UserrolePeer::doSelectOne($c)->delete();
  	$this->setFlash('notice', 'Permission Revoked Successfully');
  	$this->redirect('/admin/userroles?type='.$type);
  }

    /* Regions */
  
  public function executeRegions(){
  	$c = new Criteria();
  	$c->addAscendingOrderByColumn(RegionPeer::NAME);
  	$this->regions = RegionPeer::doSelect($c);
  }

  public function executeDeleteregion(){
  	$regionid = $this->getRequestParameter('id');
  	$c = new Criteria();
  	$c->add(ChapterregionPeer::REGION_ID, $regionid);
  	$chcount = ChapterregionPeer::doCount($c);
  	$chapterregion = ChapterregionPeer::doSelectOne($c);
  	if($chapterregion){
  		$this->setFlash('notice', 'Region cannot be deleted. <b>'.$chcount.'</b> chapters belong to this region.');
  	}else{
  		$region = RegionPeer::retrieveByPK($regionid);
  		$region->delete();
  		$this->setFlash('notice', 'Region deleted Successfully.');
  	}
  	$this->redirect('admin/regions');
  }
  
  public function executeEditregion(){
  	$c = new Criteria();
  	$c->add(RegionPeer::NAME, $this->getRequestParameter('region'));
  	$exregion = RegionPeer::doSelectOne($c);
  	if($exregion){
  		$this->setFlash('notice', 'Region could not be edited. A Region with this name already exists.');
  	}else{
	  	$region = RegionPeer::retrieveByPK($this->getRequestParameter('id'));
	  	$region->setName($this->getRequestParameter('region'));
	  	$region->save();
	  	$this->setFlash('notice', 'Region Edited Successfuly');
  	}
  	$this->redirect('admin/regions');
  }

  public function executeAddregion(){
  	$c = new Criteria();
  	$c->add(RegionPeer::NAME, $this->getRequestParameter('region'));
  	$exregion = RegionPeer::doSelectOne($c);
  	if($exregion){
  		$this->setFlash('notice', 'Region could not be added. A Region with this name already exists.');
  	}else{
  		$region = new Region();
  		$region->setName($this->getRequestParameter('region'));
  		$region->save();
  		$this->setFlash('notice', 'Region <b>'.$region->getName().'</b> added successfully');
  	}
  	$this->redirect('admin/regions');
  }
  
  /* Branches */
  
  public function executeBranches(){
  	$c = new Criteria();
  	$c->addAscendingOrderByColumn(BranchPeer::NAME);
  	$this->branches = BranchPeer::doSelect($c); 
  }
  
  public function executeDeletebranch(){
  	$branchid = $this->getRequestParameter('id');
  	$c = new Criteria();
  	$c->add(UserPeer::BRANCH_ID, $branchid);
  	$ucount = UserPeer::doCount($c);
  	$exuser = UserPeer::doSelectOne($c);
  	if($exuser){
  		$this->setFlash('notice', 'Branch could not be deleted. <b>'.$ucount.'</b> users are from this branch.');
  	}else{
  		$branch = BranchPeer::retrieveByPK($branchid);
  		$branch->delete();
  		$this->setFlash('notice', 'Branch deleted successfully.');
  	}
  	$this->redirect('/admin/branches');
  }
  
  public function executeEditbranch(){
  	$branchid = $this->getRequestParameter('id');
  	$c = new Criteria();
  	$c->add(BranchPeer::NAME, $this->getRequestParameter('branch'));
  	$c->add(BranchPeer::ID, $branchid, Criteria::NOT_EQUAL);
  	$exbranch = BranchPeer::doSelectOne($c);
  	$c->clear();
  	$c->add(BranchPeer::CODE, $this->getRequestParameter('code'));
  	$c->add(BranchPeer::ID, $branchid, Criteria::NOT_EQUAL);
  	$excode = BranchPeer::doSelectOne($c);
  	if($exbranch){
  		$this->setFlash('notice', 'Brach could not be edited. A branch with same name already exists.');
  	}elseif($excode){
  		$this->setFlash('notice', 'Brach could not be edited. A branch with same code already exists.');
  	}else{
  		$branch = BranchPeer::retrieveByPK($branchid);
  		$branch->setName($this->getRequestParameter('branch'));
  		$branch->setCode($this->getRequestParameter('code'));
  		$branch->save();
  		$this->setFlash('notice', 'Bramch Edited successfully.');
  	}
  	$this->redirect('/admin/branches');
  }
  
  public function executeAddbranch(){
  	$c = new Criteria();
  	$c->add(BranchPeer::NAME, $this->getRequestParameter('branch'));
  	$exbranch = BranchPeer::doSelectOne($c);
  	$c->clear();
  	$c->add(BranchPeer::CODE, $this->getRequestParameter('code'));
  	$excode = BranchPeer::doSelectOne($c);
  	if($exbranch){
  		$this->setFlash('notice', 'Branch could not be added. A branch with this name already exists.');
  	}elseif($excode){
  		$this->setFlash('notice', 'Branch could not be added. A branch with this code already exists.');
  	}else{
  		$branch = new Branch();
  		$branch->setName($this->getRequestParameter('branch'));
  		$branch->setCode($this->getRequestParameter('code'));
  		$branch->save();
  		$this->setFlash('notice', 'Branch <b>'.$branch->getName().'</b> with code <b>'.$branch->getCode().'</b> added successfully.');
  	}
  	$this->redirect('/admin/branches');
  }
  
}