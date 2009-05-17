<?php slot('sitetabs')?>
	<?php foreach ($userpages as $userpage):
			$page = PeppagePeer::retrieveByPK($userpage->getPeppageId());
	?>		
		<?php if($tabid == $page->getId()): ?>
			<div class="pepleftselect">
				<a href="<?php echo '/peppage/siteview?un='.$username.'&tid='.$page->getId() ?>">
					<?php echo $page->getTabname(); ?>
				</a>
			</div>
		<?php else: ?>
			<div class="pepleftmenuitem">
				<?php echo link_to($page->getTabname(), '/peppage/siteview?un='.$username.'&tid='.$page->getId()); ?>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>
<?php end_slot()?>