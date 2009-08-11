<div class="mainMenu1">
<ul>
	<?php if($sf_user->hasCredential('user')):?>
		<li class="<?php if($fullaction == 'user*welcome'): echo "hmSelected2"; endif; ?>" >
			 <a class="submainMenu" href="/user/welcome.html" > Home </a>
		</li>
	<?php else: ?>
		<li class="<?php if($fullaction == 'home*login'): echo "hmSelected2"; endif; ?>" >
			<a class="submainMenu" href="/" > Home </a>
		</li>
	<?php endif; ?>
	
	
	<?php if($sf_user->hasCredential('user')):?>
		<li class="<?php if( ($modname == 'personal') || ($modname == 'professional') || ($modname == 'academic') || ($modname == 'address') ) : echo "hmSelected2"; endif; ?>" >
			<a class="submainMenu" href="/personal/show.html" > Profile </a>
			<ul>
				<li><a href="/personal/show.html">Personal Details</a></li>
				<li><a href="/professional/show.html">Professional Details</a></li>
				<li><a href="/professional/resume.html">Resume</a></li>
				<li><a href="/academic/show.html">Academic Details</a></li>
				<li><a href="/family/show.html">Family Details</a></li>
				<li><a href="/address/show.html">Contact Details</a></li>
				<li><a href="/personal/notes.html">Notes</a></li>
			</ul>
		</li>
	<?php endif; ?>
	
	<li class="<?php if($modname == 'search'): echo "hmSelected2"; endif; ?>">
		<a class="submainMenu" href="/search/advancesearch.html" > Search </a>
			<ul>
				<li><a href="/search/advancesearch.html">Advanced Search</a></li>
				<li><a href="/search/branchyear.html">Stats</a></li>
				<li><a href="/search/branchyear.html">Branch &amp; Year</a></li>
				<li><a href="/search/branch.html">Branch</a></li>
				<li><a href="/search/year.html">Year</a></li>
				<li><a href="/search/chapter.html">Chapter</a></li>
			</ul>
	</li>
	
	<?php if($sf_user->hasCredential('user')):?>
		<li class="<?php if($modname == 'friend'): echo "hmSelected2"; endif; ?>">
			<a class="submainMenu" href="/friend/friends.html" > Friends </a>
			<ul>
				<li><a href="/friend/friends.html">Friends</a></li>
				<li><a href="/friend/followings.html">Followings</a></li>
			</ul>
		</li>
	<?php endif; ?>
	
	<?php if($sf_user->hasCredential('user')):?>
		<li class="<?php if($modname == 'settings'): echo "hmSelected2"; endif; ?>">
			<a class="submainMenu" href="/settings/changepassword.html" > Settings </a>
			<ul>
				<li><a href="/settings/changepassword.html">Change Password</a></li>
				<li><a href="/settings/invites.html">Invites</a></li>
				<li><a href="/settings/contactsettings.html">Contact Settings</a></li>
			</ul>
		</li>
	<?php endif; ?>
	
	<?php if($sf_user->hasCredential('user')):?>
		<li class="<?php if($modname == 'peppage'): echo "hmSelected2"; endif; ?>">
			<a class="submainMenu" href="/peppage/index.html" > PeP </a>
			<ul>
				<li><a href="/peppage/index.html">PEP</a></li>
			</ul>
		</li>
	<?php endif; ?>
	
	<?php if($sf_user->hasCredential('admin')):?>
		<li class="<?php if($modname == 'admin'): echo "hmSelected2"; endif; ?>">
			<a class="submainMenu" href="/admin/chapters.html" > Admin </a>
			<ul>
				<li><a href="/admin/chapters.html">Chapter</a></li>
				<li><a href="/admin/userroles/type/admin.html">User Roles</a></li>
				<?php if($fullaction === 'admin*userroles'): ?>
					<li><a href="/admin/userroles/type/admin.html">Admin</a></li>
					<li><a href="/admin/userroles/type/auth.html">Authorizers</a></li>
					<li><a href="/admin/userroles/type/masterauth.html">Master Authorizers</a></li>
				<?php endif; ?>
				<li><a href="/admin/regions.html">Region</a></li>
				<li><a href="/admin/branches.html">Branch</a></li>
				<li><a href="/admin/badges.html">Badge</a></li> 
				<li><a href="/admin/bulkuploadform.html">Bulk Upload</a></li>
			</ul>
		</li>
	<?php endif; ?>
	<?php if( ($sf_user->hasCredential('admin')) || ($sf_user->hasCredential('auth'))): ?>
		<li class="<?php if($modname == 'auth'): echo "hmSelected2"; endif; ?>">
			<a class="submainMenu" href="/auth/pendinglist.html" > Authorization </a>
			<ul>
				<li><?php echo link_to('Claimed Profile('.$claimed.')', 'auth/pendinglist'); ?></li>
				<li><?php echo link_to('New Registration('.$newreg.')', 'auth/newregister'); ?></li>
			</ul>
		</li>
	<?php endif; ?>

</ul>
</div>
<div class="logininfo">
<?php if($sf_user->hasCredential('user')):?>
	You are logged in as '<b><?php echo $sf_user->getAttribute('username'); ?></b>' (<?php echo link_to('Logout', 'home/logout') ?>)
<?php else: ?>
	Welcome <b>Guest</b>&nbsp;
<?php endif; ?>
</div>
