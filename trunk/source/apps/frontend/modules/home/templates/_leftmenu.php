<?php slot('leftmenu')?>

	<?php if( ($modname == 'personal') || ($modname == 'professional') || ($modname == 'academic') || ($modname == 'address') ) : ?>
		<div class="leftmenuitem"><a href="/personal/show.html" >Personal Details</a></div>
		<div class="leftmenuitem"><a href="/professional/show.html">Professional Details</a></div>
		<div class="leftmenuitem"><a href="#">Resume</a></div>
		<div class="leftmenuitem"><a href="/academic/show.html">Academic Details</a></div>
		<div class="leftmenuitem"><a href="/address/show.html">Contact Details</a></div>
	<?php endif; ?>

	<?php if($modname == 'settings'): ?>
		<div class="leftmenuitem"><a href="/settings/changepassword.html">Change Password</a></div>
		<div class="leftmenuitem"><a href="/settings/invites.html">Invites</a></div>
	<?php endif; ?>
	
	<?php if($modname == 'peppage'): ?>
		<div class="leftmenuitem"><a href="/peppage/index.html">PEP</a></div>
	<?php endif; ?>
	
	<?php if($modname == 'search'): ?>
			<div class="leftmenuitem"><a href="/search/advancesearch.html">Advanced Search</a></div>
			<div class="leftmenuitem"><a href="/search/advancesearch.html">Branch &amp; Year</a></div>
			<div class="leftmenuitem"><a href="/search/advancesearch.html">Branch</a></div>
			<div class="leftmenuitem"><a href="/search/advancesearch.html">Year</a></div>
			<div class="leftmenuitem"><a href="/search/advancesearch.html">Chapter</a></div>
	<?php endif; ?>
	
	<?php if($modname == 'communications'): ?>
		<div class="leftmenuitem"><a href="/home/searchform/m/user/f/lorform/h/<?php echo "Location Remark" ?>.html">LoR</a></div>
		<div class="leftmenuitem"><a href="/mag/index.html">Mailing Groups</a></div>
		<div class="leftmenuitem"><a href="http://localhost:80/phpBB3/index.php?sid=<?php // echo $sf_user->getAttribute('bbsid'); ?>">Forum</a></div>
		<div class="leftmenuitem"><a href="/home/searchform/m/user/f/profile/h/<?php echo "Profile" ?>.html">View Profile</a></div>
		<div class="leftmenuitem"><a href="/home/searchform/m/user/f/emailform/o/s/h/<?php echo "Email for user" ?>.html ">Email for user</a></div>
		<div class="leftmenuitem"><a href="/home/searchform/m/user/f/invite/h/<?php echo "Invite Fellow Alumnus" ?>.html">Invite Fellow Alumnus</a></div>
	<?php endif; ?>

	<?php if($modname == 'auth'): ?>
		<div class="leftmenuitem"><?php echo link_to('Claimed Profile('.$claimed.')', 'user/pendinglist'); ?></div>
		<div class="leftmenuitem"><?php echo link_to('New Registration('.$newreg.')', 'user/newregister'); ?></div>
	<?php endif; ?>

	<?php if($modname == 'admin'): ?>
		<div class="menuheader">Admin</div>	
		<div class="leftmenuitem"><a href="#">Role</a></div>
		<div class="leftmenuitem"><a href="/chapter/list.html">Chapter</a></div>
		<div class="leftmenuitem"><a href="/region/list.html">Region</a></div>
		<div class="leftmenuitem"><a href="/branch/list.html">Branch</a></div>
		<div class="leftmenuitem"><a href="/degree/list.html">Degree</a></div>
		<div class="leftmenuitem"><a href="/badge/list.html">Badge</a></div>
		<div class="leftmenuitem"><a href="/home/bulkuploadform.html">Bulk Upload</a></div>
		<div class="leftmenuitem"><a href="#">Invite Authoriser</a></div>
		<div class="leftmenuitem"><a href="/home/searchform/m/user/f/emailform/o/m/h/<?php echo "Mass Email" ?>.html ">Mass Email</a></div>
	    <div class="menuheader">Authorization</div>		
	<?php endif; ?>

	<?php if($fullaction == 'user*welcome'): ?>
			<a href="http://www.itbhu.ac.in" target="_blank"><img src="/images/itbhu-logobig.gif"/></a>
	        <div class="leftImageBottom">Constituent <a href="http://www.jee.iitb.ac.in/" target="_blank">IIT-JEE</a></div>
	<?php endif; ?>
<?php end_slot()?>

