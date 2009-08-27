<?php include_component('home', 'leftmenu');?>

<div class="page">
	<h3>Welcome</h3>
	<div class="vspacer20">&nbsp;</div>
	<div class="oddRow">
		<?php echo $user->getPersonal()->getSalutation()." ".$user->getFullname(); ?>
	</div>
	<div class="evenRow">
		<a href="http://192.168.1.209:80/phpBB3/">Forum @ phpBB3</a>
		
	</div>
	<?php if($user): ?>
		<?php if($user->getIsinvited() == 4): ?>
			<div class="oddRow">
			<div>The invitation to be an authorizer is pending <?php echo link_to('Click here to authorize', '/settings/invites') ?> </div>
			</div>
		<?php endif; ?>
	<?php endif; ?>
</div>