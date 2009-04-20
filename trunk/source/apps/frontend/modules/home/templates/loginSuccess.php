<?php include_component('home', 'leftmenu'); ?>
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

	<?php echo form_tag('', array('name'=>'login','onSubmit'=>'return validate()')) ?>
<div class="page">
	<h3>Member Login</h3>
	<div class="centermsg">Please enter your login details to proceed.</div>
	<div class="vspacer20">&nbsp;</div>
	<?php if ($sf_flash->has('login')): ?>
	<div id="loginerrorMessages">
		<div id="message"><img src="/images/iconWarning.gif" />&nbsp;&nbsp;<?php echo $sf_flash->get('login')?></div>
	</div>
	<?php endif; ?>
	<div class="evenRow">
		<div class="formleftcol">
			<div class="formleftcoltext">User Id :</div>
		</div>
		<div class="formrightcol"><input type="text" name="username" style="width: 150px;" />.ITBHUGlobal.org</div>
	</div>
	<div class="evenRow">
		<div class="formleftcol">
			<div class="formleftcoltext">Password :</div>
		</div>
		<div class="formrightcol"><input type="password" name="password" style="width: 150px;" /></div>
	</div>

	<div class="signinbuttons"><input type="image" alt="Sign In" src="/images/signin.jpg"/></div>

	<div class="signinbuttons">
		<a href="/home/findme.html"><img src="/images/register.jpg" border="0"></a>
		<a href="/user/forgotpasswordform.html"><img src="/images/forgot.jpg" border="0"></a>
	</div>
</div>	
</form>
