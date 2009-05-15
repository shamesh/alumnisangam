<?php

class searchActions extends sfActions{

  public function executeAdvancesearch(){

  	$this->clearattrib();
  	$c = new Criteria();
  	$c->addAscendingOrderByColumn('name');
  	$branches = BranchPeer::doSelect($c);
	$options = array();
	$options[] = 'Select';
	foreach($branches as $branch){
		$options[$branch->getId()] = $branch->getName();
	}
	$this->broptions = $options;
		
	//Year of graduation
	$options = array();
	$options[] = 'Select';
	for($i=sfConfig::get('app_year_start'); $i<=sfConfig::get('app_year_end'); $i++){
		$options[$i] = $i;
	}
	$this->yroptions = $options; 
	
	//Chapter(s) affiliation
	$c = new Criteria();
	$c->addAscendingOrderByColumn('name');
	$chapters = ChapterPeer::doSelect($c);
	$options = array();
	$options[] = 'Select';
	foreach($chapters as $chapter){
		$options[$chapter->getId()] = $chapter->getName();
	}
	$this->choptions = $options;
	
	//User type
	$options = array();
    $options[0] = sfConfig::get('app_usertype_0');
    $options[1] = sfConfig::get('app_usertype_1');;
	$options[2] = sfConfig::get('app_usertype_2');;
	$this->useroptions = $options; 
	
	//Country
	$c = new Criteria();
	$c->addAscendingOrderByColumn('name');
	$countries = CountryPeer::doSelect($c);
	$options = array();
	$options[] = 'Select';
	foreach($countries as $country){
		$options[$country->getId()] = $country->getName();
		if($country->getName() === 'India'){
			$this->countryselected = $country->getId();
		}
	}
	$this->countryoptions = $options;
  }

  public function executeResult(){
  	$this->myid = $this->getUser()->getAttribute('userid');
  	$orgflag = 0;
  	if($this->getUser()->getAttribute('userid')){
  		$orgflag = 1;
  	}
  	
  	if( ($this->getUser()->getAttribute('lastsortparam') == $sortcriteria) && ($this->getUser()->getAttribute('lastsortact')) ){
  		$sorttype = $this->getUser()->getAttribute('lastsortact');
  	}else{
  		$sorttype = 123;
  	}
  	$sortcriteria = $this->getRequestParameter('sort');
  	if(!$sortcriteria){
  		$sortcriteria = $this->getUser()->getAttribute('assort');
  	}else{
  		$this->getUser()->setAttribute('assort', $sortcriteria);
  		if($this->getUser()->getAttribute('lastsortparam') == $sortcriteria){
  			if($this->getUser()->getAttribute('lastsortact') == 123){
  				$sorttype = 321;
  			}else{
  				$sorttype = 123;
  			}
  		}
  		$this->getUser()->setAttribute('lastsortparam', $sortcriteria);
  		$this->getUser()->setAttribute('lastsortact', $sorttype);
  	}
	$firstname = $this->getsets('firstname');
	$lastname = $this->getsets('lastname');
	$branchid = $this->getsetd('branch');
	$yearid = $this->getsetd('year');
	$chapterid = $this->getsetd('chapter');
	$usertypeid = $this->getsetd('usertype');
	$location = $this->getsets('location');
	$countryid = $this->getsetd('country');
	
	$this->br = $branchid;
	$this->yr = $yearid;
	$this->loc = $location;
	$this->cn = $countryid;
	$this->fname = $firstname;
	$this->lname = $lastname;
	$this->chap = $chapterid;
	$this->usertypeid = $usertypeid;
	
	$persjoin = 0;
	$chjoin = 0;
	
	$c = new Criteria();
	if($firstname || $lastname){
		$c->addJoin(UserPeer::ID, PersonalPeer::USER_ID);
		$persjoin = 1;
		if($firstname){
			$c->add(PersonalPeer::FIRSTNAME , $firstname);
		}
	 	if($lastname){
			$c->add(PersonalPeer::LASTNAME , $lastname);
		}
	}
	$this->privacyfilter($branchid, $orgflag, $c, 'user.BRANCH_ID', 'user.BRANCHFLAG');
	$this->privacyfilter($yearid, $orgflag, $c, 'user.GRADUATIONYEAR', 'user.GRADUATIONYEARFLAG');
	if($chapterid != 0){
		$c->addJoin(UserPeer::ID, UserchapterregionPeer::USER_ID);
		$c->addJoin(UserchapterregionPeer::CHAPTERREGION_ID, ChapterregionPeer::ID);
		$chjoin = 1;
		$c->add(ChapterregionPeer::CHAPTER_ID, $chapterid);
	}
	$c->add(UserPeer::USERTYPE, $usertypeid);
	if($location){
		$c->add(UserPeer::CURRENTLYAT, $location);
		if($orgflag){
			$c->add(UserPeer::CURRENTLYATFLAG, sfConfig::get('app_privacycode_me'), Criteria::NOT_EQUAL);
		}else{
			$c->add(UserPeer::CURRENTLYATFLAG, sfConfig::get('app_privacycode_world'), Criteria::EQUAL);
		}
	}
	//$this->privacyfilter($countryid, $orgflag, $c, 'address.COUNTRY', 'address.COUNTRYFLAG');
	if($countryid != 0){
		$c->add(AddressPeer::COUNTRY, $countryid);
		if($orgflag){
			$c->add(AddressPeer::COUNTRYFLAG, sfConfig::get('app_privacycode_me'), Criteria::NOT_EQUAL);
		}else{
			$c->add(AddressPeer::COUNTRYFLAG, sfConfig::get('app_privacycode_world'), Criteria::EQUAL);
		}
	}  
	
  	if($sortcriteria){
  		switch ($sortcriteria){
  			case "name" : if(!$persjoin){
  							$c->addJoin(UserPeer::ID, PersonalPeer::USER_ID);
  						  }
  						  $this->ascdesc($sorttype, 'personal.FIRSTNAME', $c);
  						break;
  			case "roll" : $this->ascdesc($sorttype, 'user.ROLL', $c);; 
  						break;
  			case "year" : $this->ascdesc($sorttype, 'user.GRADUATIONYEAR', $c);
  						break;
  			case "branch" : $this->ascdesc($sorttype, 'user.BRANCH_ID', $c);
  						break;
  			case "degree" : $this->ascdesc($sorttype, 'user.DEGREE_ID', $c);
  						break;
  			case "chapter" : if(!$chjoin){
  								$c->addJoin(UserPeer::ID, UserchapterregionPeer::USER_ID);
								$c->addJoin(UserchapterregionPeer::CHAPTERREGION_ID, ChapterregionPeer::ID);
								$c->addJoin(ChapterregionPeer::CHAPTER_ID, ChapterPeer::ID);
  							 }
  							 $this->ascdesc($sorttype, 'chapter.NAME', $c);
  						break;
  			case "reg" : $this->ascdesc($sorttype, 'user.ISLOCKED', $c);
  						break;
  			case "lastlogin" : $this->ascdesc($sorttype, 'user.LASTLOGIN', $c);
  				 		break;
  		}
  	}
  	
  	$pageoptions = array();
  	for ($i = sfConfig::get('app_pager_min'); $i <= sfConfig::get('app_pager_max'); $i += sfConfig::get('app_pager_step') ){
  		$pageoptions[$i] = "View ".$i." Results";
  	}
  	$this->pageoptions = $pageoptions;
  	
  	$maxresult = $this->getRequestParameter('maxresult');
  	if(!$maxresult){
  		$maxresult = $this->getUser()->getAttribute('maxresult');
  	}else{
  		$this->getUser()->setAttribute('maxresult', $maxresult);
  	}
  	if($maxresult){
  		$pager = new sfPropelPager('User', $maxresult);
  		$this->maxresult = $maxresult;
  	}else{
  		$pager = new sfPropelPager('User', sfConfig::get('app_pager_min'));
  	}
  	//echo $c->toString();	//for debugging
  	
  	$cr = new Criteria();
  	$cr->add(RolePeer::ASSIGNABLE, '1');
  	$cr->addAscendingOrderByColumn(RolePeer::DISPLAYNAME);
  	$roles = RolePeer::doSelect($cr);
  	$rolelist = array();
  	foreach($roles as $role){
  		$rolelist[$role->getId()] = $role->getDisplayname(); 
  	}
  	$this->rolelist = $rolelist;
  	
	$pager->setCriteria($c);
	$pager->setPage($this->getRequestParameter('page', 1));
	$pager->init();
	$this->pager = $pager;
	$this->getUser()->setAttribute('srpage', $this->getRequestParameter('page', 1));
	if(!$this->getUser()->getAttribute('resultcount')){
		$this->count = UserPeer::doCount($c);
		$this->getUser()->setAttribute('resultcount', $this->count);
	}else{
		$this->count = $this->getUser()->getAttribute('resultcount');
	}
  }
  
  protected function clearattrib(){
  	$this->getUser()->getAttributeHolder()->remove('sort');
  	$this->getUser()->getAttributeHolder()->remove('firstname');
  	$this->getUser()->getAttributeHolder()->remove('lastname');
  	$this->getUser()->getAttributeHolder()->remove('branch');
  	$this->getUser()->getAttributeHolder()->remove('year');
  	$this->getUser()->getAttributeHolder()->remove('chapter');
  	$this->getUser()->getAttributeHolder()->remove('usertype');
  	$this->getUser()->getAttributeHolder()->remove('location');
  	$this->getUser()->getAttributeHolder()->remove('country');
  	$this->getUser()->getAttributeHolder()->remove('lastsortact');
  	$this->getUser()->getAttributeHolder()->remove('lastsortparam');
  	$this->getUser()->getAttributeHolder()->remove('resultcount');
  	$this->getUser()->getAttributeHolder()->remove('maxresult');
  	$this->getUser()->getAttributeHolder()->remove('srpage');
  }
  
  protected function ascdesc($sort, $col, &$cp){
  	if($sort == 123){
  		$cp->addAscendingOrderByColumn($col);
  	}else{
  		$cp->addDescendingOrderByColumn($col);
  	}
  }

  protected function getsets($param){
  	$paramvalue = $this->getRequestParameter($param);
	if($paramvalue){
		$this->getUser()->setAttribute($param, $paramvalue);
	}else{
		$paramvalue = $this->getUser()->getAttribute($param);
	}
	return $paramvalue;
  }
  
  protected function getsetd($param){
  	$paramvalue = $this->getRequestParameter($param);
	if($paramvalue != 0){
		$this->getUser()->setAttribute($param, $paramvalue);
	}else{
		$paramvalue = $this->getUser()->getAttribute($param);
	}
	return $paramvalue;
  }
  
  protected function privacyfilter($value, $flag, &$ca, $addcriteria, $privacycriteria){
  	if($value != 0){
		$ca->add($addcriteria, $value);
		if($flag){
			$ca->add($privacycriteria, sfConfig::get('app_privacycode_me'), Criteria::NOT_EQUAL);
		}else{
			$ca->add($privacycriteria, sfConfig::get('app_privacycode_world'), Criteria::EQUAL);
		}
	}  
  }
  
  public function executeProfile(){
  	$this->user = UserPeer::retrieveByPK($this->getRequestParameter('id'));
  }

  public function executeBranchyear(){
  	$this->clearattrib();
	$this->yearstats = $this->userstat('user.GRADUATIONYEAR'); 
  	$this->branchstats = $this->userstat('user.BRANCH_ID');
  }
  
  public function executeBranch(){
  	$this->clearattrib();
  	$this->branchstats = $this->userstat('user.BRANCH_ID');
  }
  
  public function executeYear(){
  	$this->clearattrib();
  	$this->yearstats = $this->userstat('user.GRADUATIONYEAR');
  }
  
  protected function userstat($col){
  	$c = new Criteria();
  	$c->addGroupByColumn($col);
  	$c->addAscendingOrderByColumn($col);
  	return UserPeer::doSelect($c);
  }
  
  
}