<?php slot('tabsection')?>

	<ul>
		<li class="first"></li>
		<?php if($current == 'Login'): ?>
		<li class="currentfirst"></li>
		<li class="currenttab">
		<?php if($sf_user->hasCredential('admin')):?>
		<?php echo link_to('Logout','home/logout')?>
		<?php else:?>
		Login
		<?php endif; ?>
		</li>
		<li class="currentlast"></li>
		<?php else:?>
		<li class="noncurrentfirst"></li>
		<li class="noncurrenttab">
		<?php if($sf_user->getAttribute('username')):?>
		<?php echo link_to('Logout','home/logout')?>
		<?php else:?>
		<?php echo link_to('Login','home/admin')?>
		<?php endif; ?>
		<li class="noncurrentlast"></li>
		<?php endif; ?>
		<?php if($current == 'Register'): ?>
		<li class="currentfirst"></li>
		<li class="currenttab"></li>
		<li class="currentlast"></li>
		<?php else:?>
		<li class="noncurrentfirst"></li>
		<li class="noncurrenttab">
		<?php echo link_to('Register','company/create')?>
		</li>
		<li class="noncurrentlast"></li>
		<?php endif; ?>
	</ul>
	<?php if($sf_user->getAttribute('username') ): ?>
	<div style="font-weight: bolder;font-size: 14px;">Welcome <font color="blue"> <?php echo $sf_user->getAttribute('username') ?></font></div>
	<?php else:?>
	<div style="font-weight: bolder; font-size: 14px; color: blue; text-align: left;">Welcome Guest!</div>
	<? endif; ?>
<?php end_slot()?>
