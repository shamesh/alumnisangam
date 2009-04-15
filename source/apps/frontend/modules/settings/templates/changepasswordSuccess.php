<?php include_component('home', 'leftmenu'); ?>
<script type="text/javascript">
<!--
function validate(){
	if( (document.cp.oldpassword.value == '') || (document.cp.newpassword.value == '') || (document.cp.confirmpassword.value == '') ){
		alert("Please fill in all the required fields");
		return false;
	}
	if((document.cp.newpassword.value != document.cp.confirmpassword.value)){
		alert("Passwords do not match")
	}
}
-->
</script>
<div class="page">
	<h3>Change Password</h3>
	<div class="vspacer20">&nbsp;</div>
	<?php echo form_tag('settings/changepassword', array('onSubmit'=>'return validate()', 'name'=>'cp')) ?>
	<?php if ($sf_flash->has('changepassword')): ?>
		<div id="loginerrorMessages">
			<div id="message"><img src="/images/iconWarning.gif"/><?php echo $sf_flash->get('changepassword')?></div>
		</div>
	<?php endif; ?>
	<div class="evenRow">
		<div class="formleftcol">
			<div class="formleftcoltext">Current Password<font color="red">*</font> :</div>
		</div>
		<div class="formrightcol"><?php echo input_password_tag('oldpassword', '' , array('size'=> 30)); ?></div>
	</div>
	
	<div class="evenRow">
		<div class="formleftcol">
			<div class="formleftcoltext">New Password<font color="red">*</font> :</div>
		</div>
		<div class="formrightcol"><?php echo input_password_tag('newpassword', '', array('size'=> 30)); ?></div>
	</div>
	
	<div class="evenRow">
		<div class="formleftcol">
			<div class="formleftcoltext">Re-Type Password<font color="red">*</font> :</div>
		</div>
		<div class="formrightcol"><?php echo input_password_tag('confirmpassword','', array('size'=> 30)); ?></div>
	</div>	
	<div class="vspacer20">&nbsp;</div>
	<div class="formbuttons"><input type="image" src="/images/update.png" alt="update"></div>
	<div class="vspacer10">&nbsp;</div>
<div style="float: left;"><font color="red">*</font>&nbsp;Required Fields.</div>
</div>
</form>
