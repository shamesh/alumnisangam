<?php slot('leftmenu')?>
	<div class="leftmenuitem"><a href="/personal/show.html">Personal Details</a></div>
	<div class="leftmenuitem"><a href="/professional/show.html">Professional Details</a></div>
	<div class="leftmenuitem"><a href="#">Resume</a></div>
	<div class="leftmenuitem"><a href="/academic/show.html">Academic Details</a></div>
	<div class="leftmenuitem"><a href="/address/show.html">Contact Details</a></div>
	

<div class="menuheader">Settings</div>
	<div class="leftmenuitem"><a href="/user/changepassword.html">Change Password</a></div>
	<div class="leftmenuitem"><a href="/peppage/index.html">PEP</a></div>
<div class="menuheader">Communication</div>
	<div class="leftmenuitem"><a href="/user/invite.html">Invite Fellow Alminus</a></div>
	<div class="leftmenuitem"><a href="/home/searchform/m/user/f/lorform/h/<?php echo "Location Remark" ?>.html">LoR</a></div>
	<!--
	href="/home/searchform.html?m=user&f=lorform" 
	-->
	<div class="leftmenuitem"><a href="/mag/index.html">Mailing Groups</a></div><!--
	<div class="leftmenuitem"><a href="http://localhost:80/phpBB3/index.php?sid=<?php // echo $sf_user->getAttribute('bbsid'); ?>">Forum</a></div>
	--><div class="leftmenuitem"><a href="/home/searchform/m/user/f/profile/h/<?php echo "Profile" ?>.html">View Profile</a></div>
	<div class="leftmenuitem"><a href="/home/searchform/m/user/f/emailform/o/s/h/<?php echo "Email for user" ?>.html ">Email for user</a></div>
	<div class="leftmenuitem"><a href="/home/searchform/m/user/f/invite/h/<?php echo "Invite Fellow Alumnus" ?>.html">Invite Fellow Alumnus</a></div>
	
	
	
	
	<div class="menuheader">Locate</div>
		<?php if($sf_user->hasCredential('admin')): ?>
		<div class="leftmenuitem"><a href="/user/dbsearchform/m/user/f/emailform/o/m/h/<?php echo "Search for admin" ?>.html">Search Alumni Database</a></div>
		<?php elseif($sf_user->hasCredential('user')):?> 
		<div class="leftmenuitem"><a href="/user/dbsearchform/m/user/f/emailform/o/s/h/<?php echo "Search for user" ?>.html">Search Alumni Database</a></div>
	    <?php endif ; ?>
	
	<?php if($sf_user->hasCredential('admin')): ?>
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
	<div class="leftmenuitem"><?php echo link_to('Claimed Profile('.$claimed.')', 'user/pendinglist'); ?></div>
	<div class="leftmenuitem"><?php echo link_to('New Registration('.$newreg.')', 'user/newregister'); ?></div>
	
	<?php endif;?>
<?php end_slot()?>

