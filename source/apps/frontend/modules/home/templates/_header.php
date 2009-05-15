<ul class="headermenu">
	<?php if($sf_user->hasCredential('user')):?>
		<li class="<?php if($fullaction == 'user*welcome'): echo "hmSelected"; endif; ?>" >
			<?php echo link_to('Home', '/user/welcome');?>
		</li>
	<?php else: ?>
		<li class="<?php if($fullaction == 'home*login'): echo "hmSelected"; endif; ?>" >
			<?php echo link_to('Home', '/');?>
		</li>
	<?php endif; ?>
	
	
	<?php if($sf_user->hasCredential('user')):?>
		<li class="<?php if( ($modname == 'personal') || ($modname == 'professional') || ($modname == 'academic') || ($modname == 'address') ) : echo "hmSelected"; endif; ?>" >
			<?php echo link_to('Profile', 'personal/show');?>
		</li>
	<?php endif; ?>
	
	<li class="<?php if($modname == 'search'): echo "hmSelected"; endif; ?>">
		<?php echo link_to('Search', 'search/advancesearch');?>
	</li>
	
	<?php if($sf_user->hasCredential('user')):?>
		<li class="<?php if($modname == 'friend'): echo "hmSelected"; endif; ?>">
			<?php echo link_to('Friends', 'friend/friends');?>
		</li>
	<?php endif; ?>
	
	<?php if($sf_user->hasCredential('user')):?>
		<li class="<?php if($modname == 'settings'): echo "hmSelected"; endif; ?>">
			<?php echo link_to('Settings', 'settings/changepassword');?>
		</li>
	<?php endif; ?>
	
	<?php if($sf_user->hasCredential('user')):?>
		<li class="<?php if($modname == 'peppage'): echo "hmSelected"; endif; ?>">
			<?php echo link_to('PeP', '/peppage/index');?>
		</li>
	<?php endif; ?>
	
	<?php if($sf_user->hasCredential('admin')):?>
		<li class="<?php if($modname == 'admin'): echo "hmSelected"; endif; ?>">
			<?php echo link_to('Admin', '/admin/chapters');?>
		</li>
	<?php endif; ?>
	<?php if( ($sf_user->hasCredential('admin')) || ($sf_user->hasCredential('auth'))): ?>
		<li class="<?php if($modname == 'auth'): echo "hmSelected"; endif; ?>">
			<?php echo link_to('Authorization', '/auth/pendinglist');?>
		</li>
	<?php endif; ?>

</ul>
<div class="logininfo">
<?php if($sf_user->getAttribute('username')): ?>
	You are logged in as '<b><?php echo $sf_user->getAttribute('username'); ?></b>' (<?php echo link_to('Logout', 'home/logout') ?>)
<?php else: ?>
	Welcome <b>Guest</b>&nbsp;
<?php endif; ?>
</div>

<!--  class="hmSelected" -->