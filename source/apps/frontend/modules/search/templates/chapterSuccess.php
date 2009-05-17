<?php
	include_component('home', 'leftmenu');
?>

<div class="page">
	<h3>Statistics : Chapter</h3>
	<div class="vspacer20">&nbsp;</div>
	<?php $i=1; $gtotal=0; ?>
	<div class="oddRow">
		<div class="statColC1"><b>Chapter</b></div>
		<div class="statColC2"><b>Region</b></div>
		<div class="statColC3">&nbsp;</div>
	</div>
	<?php foreach ($chapters as $chapter): $i++; ?>
	<div class="<?php if($i%2==0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
		<?php
			$c = new Criteria();
			$c->add(ChapterregionPeer::CHAPTER_ID, $chapter->getId());
			$cr = ChapterregionPeer::doSelectOne($c);
			
			$c->clear();
			$c->add(UserchapterregionPeer::CHAPTERREGION_ID, $cr->getId());
			$ucount = UserchapterregionPeer::doCount($c);
		?>
		<div class="statColC1"><?php echo $chapter->getName(); ?></div>
		<div class="statColC2"><?php echo $cr->getRegion()->getName(); ?></div>
		<div class="statColC3"><?php echo link_to($ucount, 'search/result?usertype=1&chapter='.$chapter->getId(), array('title'=>'Click here to see a list of users from '.$chapter->getName())); ?></div>
	</div>
	<?php endforeach; ?>
	<div class="vspacer20">&nbsp;</div>
</div>