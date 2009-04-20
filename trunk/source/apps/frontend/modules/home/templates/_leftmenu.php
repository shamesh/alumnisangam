<?php slot('leftmenu')?>
	<?php $lmflag = 1; ?>
	<?php if( ($modname == 'personal') || ($modname == 'professional') || ($modname == 'academic') || ($modname == 'address') ) : ?>
		<?php $lmflag = 0; ?>
		<div class="leftmenuitem"><a href="/personal/show.html" >Personal Details</a></div>
		<div class="leftmenuitem"><a href="/professional/show.html">Professional Details</a></div>
		<div class="leftmenuitem"><a href="#">Resume</a></div>
		<div class="leftmenuitem"><a href="/academic/show.html">Academic Details</a></div>
		<div class="leftmenuitem"><a href="/address/show.html">Contact Details</a></div>
	<?php endif; ?>

	<?php if($modname == 'settings'): ?>
		<?php $lmflag = 0; ?>
		<div class="leftmenuitem"><a href="/settings/changepassword.html">Change Password</a></div>
		<div class="leftmenuitem"><a href="/settings/invites.html">Invites</a></div>
	<?php endif; ?>
	
	<?php if($modname == 'peppage'): ?>
		<?php $lmflag = 0; ?>
		<div class="leftmenuitem"><a href="/peppage/index.html">PEP</a></div>
	<?php endif; ?>
	
	<?php if($modname == 'search'): ?>
		<?php $lmflag = 0; ?>
		<div class="leftmenuitem"><a href="/search/advancesearch.html">Advanced Search</a></div>
		<div class="leftmenuitem"><a href="/search/advancesearch.html">Branch &amp; Year</a></div>
		<div class="leftmenuitem"><a href="/search/advancesearch.html">Branch</a></div>
		<div class="leftmenuitem"><a href="/search/advancesearch.html">Year</a></div>
		<div class="leftmenuitem"><a href="/search/advancesearch.html">Chapter</a></div>
	<?php endif; ?>
	
	<?php if($modname == 'friend'): ?>
		<?php $lmflag = 0; ?>
		<div class="leftmenuitem"><a href="/friend/myfriends.html">My Friends</a></div>
		<div class="leftmenuitem"><a href="/friend/invites.html">Open Invites</a></div>
		<div class="leftmenuitem"><a href="/friend/requests.html">Open Requests</a></div>
	<?php endif; ?>
	
	<?php if($modname == 'communications'): ?>
		<?php $lmflag = 0; ?>
		<div class="leftmenuitem"><a href="/mag/index.html">Mailing Groups</a></div>
		<div class="leftmenuitem"><a href="http://localhost:80/phpBB3/index.php?sid=<?php // echo $sf_user->getAttribute('bbsid'); ?>">Forum</a></div>
		<div class="leftmenuitem"><a href="/home/searchform/m/user/f/invite/h/<?php echo "Invite Fellow Alumnus" ?>.html">Invite Fellow Alumnus</a></div>
	<?php endif; ?>

	<?php if($modname == 'auth'): ?>
		<?php $lmflag = 0; ?>
		<div class="leftmenuitem"><?php echo link_to('Claimed Profile('.$claimed.')', 'auth/pendinglist'); ?></div>
		<div class="leftmenuitem"><?php echo link_to('New Registration('.$newreg.')', 'auth/newregister'); ?></div>
	<?php endif; ?>

	<?php if($modname == 'admin'): ?>
		<?php $lmflag = 0; ?>
		<div class="leftmenuitem"><a href="#">User Roles</a></div>
		<div class="leftmenuitem"><a href="/admin/chapterlist.html">Chapter</a></div>
		<div class="leftmenuitem"><a href="/region/list.html">Region</a></div>
		<div class="leftmenuitem"><a href="/branch/list.html">Branch</a></div>
		<div class="leftmenuitem"><a href="/degree/list.html">Degree</a></div>
		<div class="leftmenuitem"><a href="/badge/list.html">Badge</a></div>
		<div class="leftmenuitem"><a href="/home/bulkuploadform.html">Bulk Upload</a></div>
		<div class="leftmenuitem"><a href="#">Invite Authoriser</a></div>
		<div class="leftmenuitem"><a href="/home/searchform/m/user/f/emailform/o/m/h/<?php echo "Mass Email" ?>.html ">Mass Email</a></div>
	<?php endif; ?>

	<?php if( ($fullaction == 'user*welcome') || $lmflag): ?>
			<a href="http://www.itbhu.ac.in" target="_blank"><img src="/images/itbhu-logobig.gif"/></a>
	        <div class="leftImageBottom">Constituent <a href="http://www.jee.iitb.ac.in/" target="_blank">IIT-JEE</a></div>
	<?php endif; ?>
<?php end_slot()?>

