<?php include_component('home', 'leftmenu');?>

<div class="page">
	<h3>Welcome</h3>
	<div class="vspacer20">&nbsp;</div>
	<div class="oddRow">
		<?php echo $user->getPersonal()->getSalutation()." ".$user->getFullname(); ?>
	</div>
</div>