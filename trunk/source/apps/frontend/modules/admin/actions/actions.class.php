<?php

class adminActions extends sfActions
{
  public function executeChapterlist()
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
    $chapter = new Chapter();
    $chapter->setName($this->getRequestParameter('chapter'));
    $chapter->save();
    
    $cr = new Chapterregion();
    $cr->setChapterId($chapter->getId());
    $cr->setRegionId($this->getRequestParameter('region'));
  	$cr->save();
  	
  	$this->setFlash('notice', 'Chapter <b>'.$chapter->getName().'</b> has been created successfully.');
  	$this->redirect('admin/chapterlist');
  }
}