<?php slot('sitetabs')?>

<ul class="peptablist">
<?php 
	foreach ($userpages as $userpage):
		$page = PeppagePeer::retrieveByPK($userpage->getPeppageId());
?>		
		<?php if($tabid == $page->getId()): ?>
			<li class="pepTabSel"><?php echo link_to($page->getTabname(), '/peppage/siteview?un='.$username.'&tid='.$page->getId()) ; ?></li>
		<?php else: ?>
			<li class="pepTab"><?php echo link_to($page->getTabname(), '/peppage/siteview?un='.$username.'&tid='.$page->getId()); ?></li>
		<?php endif; ?>
<?php	endforeach;
?>
</ul>	
<?php end_slot()?>