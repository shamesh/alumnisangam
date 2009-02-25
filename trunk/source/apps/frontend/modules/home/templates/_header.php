<?php slot('header')?>
<ul class="menulist1">
	<?php if($sf_user->hasCredential('admin')):?>
	<li>
		<?php echo link_to('HOME', 'home/adminmenu');?>
	</li>
	<?php endif; ?>
	<?php if($sf_user->hasCredential('admin')): ?>
	<li><?php echo link_to('USER', 'user'); ?></li>
	<?php endif ?>
	<li>
	<?php if(!$sf_user->hasCredential('admin')): ?> 
		<?php echo link_to('LOGIN', 'home/admin') ?>
	<?php else: ?>
		<?php echo link_to('LOGOUT', 'home/logout') ?>
	<?php endif ?>
	</li>
</ul>
<?php end_slot()?>
