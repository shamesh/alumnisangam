<?php include_component('home', 'leftmenu'); ?>
<?php include_component('home', 'messages'); ?>
<div class="page">
	<h3>Invites</h3>
	<div class="vspacer20">&nbsp;</div>
	<?php if($user): ?>
		<?php if($user->getIsinvited() == 4): ?>
			<div class="oddRow">
				<div class="centermsg">You are invited for Authorizer role. <?php echo link_to('accept', '/settings/acceptauth') ?>&nbsp;<?php echo link_to('Reject', '/settings/rejectauth') ?></div>
			</div>
		<?php else: ?>
			<div class="oddRow">
				<div class="centermsg">No invitations for your attention.</div>
			</div>
		<?php endif; ?>
	<?php endif; ?>
</div>



