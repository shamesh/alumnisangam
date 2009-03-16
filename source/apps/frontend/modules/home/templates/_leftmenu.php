<?php slot('leftmenu')?>
	<?php if(!$sf_user->getAttribute('username')):
			echo link_to('Login', 'home/login'); 
	 	  else:
			echo $sf_user->getAttribute('username');echo "  (";echo link_to('Logout', 'home/logout');echo ")";  
		  endif;
		?>

<div class="menuheader">Profile</div>
	<div class="leftmenuitem"><a href="/personal/show.html">Personal Details</a>(<a href="/personal/edit.html">edit</a>)</div>
	<div class="leftmenuitem"><a href="/professional/show.html">Professional Details</a>(<a href="/professional/edit.html">edit</a>)</div>
	<div class="leftmenuitem"><a href="#">Resume</a>(<a href="#">edit</a>)</div>
	<div class="leftmenuitem"><a href="/academic/show.html">Academic Details</a>(<a href="/academic/edit.html">edit</a>)</div>
	<!--<div class="leftmenuitem"><a href="/address/show.html">Contact Details</a>(<a href="/address/edit.html">edit</a>)</div>
	--><div class="leftmenuitem"><a href="#">Contact Details</a>(<a href="#">edit</a>)</div>

<div class="menuheader">Settings</div>
	<div class="leftmenuitem"><a href="/user/changepassword.html">Change Password</a></div>
<div class="menuheader">Communication</div>
	<div class="leftmenuitem"><a href="/home/searchform/m/user/f/lorform/h/<?php echo "Location Remark" ?>.html">LoR</a></div>
	<div class="leftmenuitem"><a href="/mag/index.html">Mailing Groups</a></div>
	<div class="leftmenuitem"><a href="http://localhost:80/phpBB3/index.php?sid=<?php echo $sf_user->getAttribute('bbsid'); ?>">Forum</a></div>
	<div class="leftmenuitem"><a href="/home/searchform/m/user/f/profile/h/<?php echo "Profile" ?>.html">View Profile</a></div>
	
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
	
<div class="menuheader">Authorization</div>		
	<div class="leftmenuitem"><?php echo link_to('Claimed Profile('.$claimed.')', 'user/pendinglist'); ?></div>
	<div class="leftmenuitem"><?php echo link_to('New Registration('.$newreg.')', 'user/newregister'); ?></div>
	<?php endif;?>
<?php end_slot()?>

