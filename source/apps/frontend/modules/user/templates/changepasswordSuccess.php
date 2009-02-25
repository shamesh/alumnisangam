<?php include_component('home', 'leftmenu');
	
	if ($sf_flash->has('changepassword')): ?>
	<div id="loginerrorMessages">
		<div id="message"><img src="/images/iconInformation.gif"/><?php echo $sf_flash->get('changepassword')?></div>
	</div>
	<?php endif; 
echo form_tag('user/changepassword')

?>
<div>
<?php
	echo label_for('oldpassword','Old Password: ');
	echo input_password_tag('oldpassword', '' , array('size'=> 30));
?>
<br>
<?php
	echo label_for('newpassword','New Password: ');
	echo input_password_tag('newpassword', '', array('size'=> 30));
?>
<br>
<?php
	echo label_for('confirmpassword','Confirm Password: ');
	echo input_password_tag('confirmpassword','', array('size'=> 30));
?>
<br>
</div>
<?php echo submit_tag('Update Password') ?>
</form>
