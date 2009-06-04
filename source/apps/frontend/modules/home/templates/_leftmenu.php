<?php slot('leftmenu')?>
	<?php $lmflag = 1; ?>
	<?php if( ($modname == 'personal') || ($modname == 'professional') || ($modname == 'academic') || ($modname == 'address') ) : ?>
		<?php $lmflag = 0; ?>
		<div class="<?php if($fullaction==='personal*show'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/personal/show.html" >Personal Details</a></div>
		<div class="<?php if(($modname==='professional') && ($actname != 'resume')): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/professional/show.html">Professional Details</a></div>
		<div class="<?php if($fullaction==='professional*resume'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/professional/resume.html">Resume</a></div>
		<div class="<?php if($modname==='academic'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/academic/show.html">Academic Details</a></div>
		<div class="<?php if($modname==='address'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/address/show.html">Contact Details</a></div>
		<div class="<?php if($fullaction==='personal*notes'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/personal/notes.html">Notes</a></div>
	<?php endif; ?>

	<?php if($modname == 'settings'): ?>
		<?php $lmflag = 0; ?>
		<div class="<?php if($fullaction==='settings*changepassword'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/settings/changepassword.html">Change Password</a></div>
		<div class="<?php if($fullaction==='settings*invites'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/settings/invites.html">Invites</a></div>
	<?php endif; ?>
	
	<?php if($modname == 'peppage'): ?>
		<?php $lmflag = 0; ?>
		<div class="<?php if($modname==='peppage'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/peppage/index.html">PEP</a></div>
	<?php endif; ?>
	
	<?php if($modname == 'search'): ?>
		<?php $lmflag = 0; ?>
		<div class="<?php if($fullaction==='search*advancesearch'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/search/advancesearch.html">Advanced Search</a></div>
		<div class="<?php if( ($fullaction==='search*branchyear') || ($fullaction==='search*branch') || ($fullaction==='search*year') ): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/search/branchyear.html">Stats</a></div>
		<?php // if( !($fullaction==='search*advancesearch')&&($modname == 'search')): ?>
			<div class="<?php if($fullaction==='search*branchyear'): echo 'leftsubselect'; else: echo 'leftsubmenuitem'; endif; ?>"><a href="/search/branchyear.html">Branch &amp; Year</a></div>
			<div class="<?php if($fullaction==='search*branch'): echo 'leftsubselect'; else: echo 'leftsubmenuitem'; endif; ?>"><a href="/search/branch.html">Branch</a></div>
			<div class="<?php if($fullaction==='search*year'): echo 'leftsubselect'; else: echo 'leftsubmenuitem'; endif; ?>"><a href="/search/year.html">Year</a></div>
			<div class="<?php if($fullaction==='search*chapter'): echo 'leftsubselect'; else: echo 'leftsubmenuitem'; endif; ?>"><a href="/search/chapter.html">Chapter</a></div>
		<?php // endif; ?>
	<?php endif; ?>
	
	<?php if($modname == 'friend'): ?>
		<?php $lmflag = 0; ?>
		<div class="<?php if($fullaction==='friend*friends'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/friend/friends.html">Friends</a></div>
		<div class="<?php if($fullaction==='friend*followings'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/friend/followings.html">Followings</a></div>
	<?php endif; ?>
	
	<?php if($modname == 'communications'): ?>
		<?php $lmflag = 0; ?>
		<div class="leftmenuitem"><a href="/mag/index.html">Mailing Groups</a></div>
		<div class="leftmenuitem"><a href="http://localhost:80/phpBB3/index.php?sid=<?php // echo $sf_user->getAttribute('bbsid'); ?>">Forum</a></div>
		<div class="leftmenuitem"><a href="/home/searchform/m/user/f/invite/h/<?php echo "Invite Fellow Alumnus" ?>.html">Invite Fellow Alumnus</a></div>
	<?php endif; ?>

	<?php if($modname == 'auth'): ?>
		<?php $lmflag = 0; ?>
		<div class="<?php if($fullaction==='auth*pendinglist'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><?php echo link_to('Claimed Profile('.$claimed.')', 'auth/pendinglist'); ?></div>
		<div class="<?php if($fullaction==='auth*newregister'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><?php echo link_to('New Registration('.$newreg.')', 'auth/newregister'); ?></div>
	<?php endif; ?>

	<?php if($modname == 'admin'): ?>
		<?php $lmflag = 0; ?>
		<div class="<?php if($fullaction==='admin*chapters'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/admin/chapters.html">Chapter</a></div>
		<div class="<?php if($fullaction==='admin*userroles'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/admin/userroles/type/admin.html">User Roles</a></div>
		<?php if($fullaction === 'admin*userroles'): ?>
			<div class="<?php if($roletype==='admin'): echo 'leftsubselect'; else: echo 'leftsubmenuitem'; endif; ?>"><a href="/admin/userroles/type/admin.html">Admin</a></div>
			<div class="<?php if($roletype==='auth'): echo 'leftsubselect'; else: echo 'leftsubmenuitem'; endif; ?>"><a href="/admin/userroles/type/auth.html">Authorizers</a></div>
			<div class="<?php if($roletype==='masterauth'): echo 'leftsubselect'; else: echo 'leftsubmenuitem'; endif; ?>"><a href="/admin/userroles/type/masterauth.html">Master Authorizers</a></div>
		<?php endif; ?>
		<div class="<?php if($fullaction==='admin*regions'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/admin/regions.html">Region</a></div>
		<div class="<?php if($fullaction==='admin*branches'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/admin/branches.html">Branch</a></div>
		<!--
			<div class="leftmenuitem"><a href="/degree/list.html">Degree</a></div>
		-->
		<div class="<?php if($fullaction==='admin*badges'): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/admin/badges.html">Badge</a></div> 
		<div class="<?php if(($fullaction==='admin*bulkuploadform') ||($fullaction==='admin*bulkupload')): echo 'leftselect'; else: echo 'leftmenuitem'; endif; ?>"><a href="/admin/bulkuploadform.html">Bulk Upload</a></div>
		<!--
			<div class="leftmenuitem"><a href="#">Invite Authoriser</a></div>
			<div class="leftmenuitem"><a href="/home/searchform/m/user/f/emailform/o/m/h/<?php //echo "Mass Email" ?>.html ">Mass Email</a></div>
		-->
	<?php endif; ?>

	<?php if( ($fullaction == 'user*welcome') || $lmflag): ?>
			<a href="http://www.itbhu.ac.in" target="_blank"><img src="/images/itbhu-logobig.gif"/></a>
	        <div class="leftImageBottom">Constituent <a href="http://www.jee.iitb.ac.in/" target="_blank">IIT-JEE</a></div>
	<?php endif; ?>
<?php end_slot()?>

