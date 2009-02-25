<?php include_component('home','leftmenu'); ?>


<?php if($flag ==1): echo "Select At least one field...";
	  elseif($results):
	  foreach($results as $rs):
?>

<div>
<?php echo "Year: ".$rs->getGraduationyear(); ?>
</div>

<div>
<?php 
	if($rs->getBranch()){
	echo "Branch: ".$rs->getBranch()->getName(); 
	}
?>
</div>

<div>
<?php
	if($rs->getDegree()){
	echo "Degree: ".$rs->getDegree()->getName(); 
	}
	?>
</div>

<div>
<?php 
	$chapter = ChapterPeer::retrieveByPK($chapterid);
	if($chapter){
	echo "Chapter: ".$chapter->getName(); 
	}
	?>
</div>

<div>
<?php // echo "Currently At: ".$rs->getCurrentlyat(); ?>
</div>
<?php endforeach;

	else: echo "Sorry!! No maching results found...";

	endif;
?>
