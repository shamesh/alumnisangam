<?php

/**
 * Subclass for representing a row from the 'chapter' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Chapter extends BaseChapter
{
	public function getRegion(){
		$c = new Criteria();
		$c->add(ChapterregionPeer::CHAPTER_ID, $this->id);
		return ChapterregionPeer::doSelectOne($c)->getRegion();
	}
}
