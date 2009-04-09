<?php include_component('home','footer'); ?>
<script language="javascript">
<!--
function validate(){
  if (document.login.username.value == "")
  { alert("User Id field cannot be empty"); return false;}
  if (document.login.password.value == "")
  { alert("Password field cannot be empty"); return false;}
}
-->
</script>

	<?php echo form_tag('home/login', array('name'=>'login','onSubmit'=>'return validate()')) ?>
	
	<div class="loginhead">
		<b>Member Login</b>
		<br />Please enter your login details to proceed.
	</div>
	
	<?php if ($sf_flash->has('login')): ?>
	<div id="loginerrorMessages">
		<div id="message"><img src="/images/iconWarning.gif"/><?php echo $sf_flash->get('login')?></div>
	</div>
	<?php endif; ?>
	<table style="padding-top: 50px; font-family: ariel; font-size: 12px; padding-bottom: 15px;">
	<tr>
	<td width="120px;">User Id:</td>
	<td><input type="text" name="username" style="width: 150px;" />.ITBHUGlobal.org</td>
	</tr>
	<tr>
	<td>Password:</td>
	<td><input type="password" name="password" style="width: 150px;" /></td>
	</tr>

	<tr>
	<td>&nbsp;</td>
	<td><input type="image" alt="Sign In" src="/images/signin.jpg"/></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	<td>
		<a href="/home/index.html"><img src="/images/register.jpg" border="0"></a> &nbsp;&nbsp;
		<a href="/user/forgotpasswordform.html"><img src="/images/forgot.jpg" border="0"></a> &nbsp; &nbsp;
	</td>
	
	</tr>
	</table>

	
	</form>
