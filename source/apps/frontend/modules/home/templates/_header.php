<ul class="headermenu">
	<?php if($sf_user->hasCredential('user')):?>
	<li class="hmSelected">
		<?php echo link_to('Profile', 'personal/show');?>
	</li>
	<li>
		<?php echo link_to('Search', 'user/dbsearchform');?>
	</li>
	<li>
		<?php echo link_to('Settings', 'user/changepassword');?>
	</li>
	<?php endif; ?>
	<?php if($sf_user->hasCredential('admin')):?>
	<li>
		<?php echo link_to('Admin', 'chapter/list');?>
	</li>
	<li>
		<?php echo link_to('Authorization', '#');?>
	</li>
	<?php endif; ?>
</ul>
<div class="logininfo">
	You are logged in as '<b><?php echo $sf_user->getAttribute('username'); ?></b>' (<?php echo link_to('Logout', 'home/logout') ?>)
</div>