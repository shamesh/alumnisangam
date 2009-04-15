<?php include_component('home', 'leftmenu');?>
<?php include_component('home', 'messages');?>
<script language="javascript">
<!--
function validate(){
  if (document.fp.forgotemail.value == "")
  { alert("Email field cannot be empty"); return false;}
}
-->
</script>
<?php echo form_tag('user/forgotpassword', array( 'multipart'=>'true', 'name'=>'fp','onSubmit'=>'return validate()')) ?>
<div class="page">
	<h3 style="margin-bottom: 40px;">Forgot Password</h3>
	<div class="oddRow">
		<div class="formleftcol" style="padding-left: 50px;">
			<div class="formleftcoltext">Enter your registered Email :</div>
		</div>
		<div class="formrightcol"><?php echo input_tag('forgotemail', array('size' => 30));?></div>
	</div>
	<div class="vspacer20">&nbsp;</div>
	<div class="formbuttons" ><?php echo submit_tag('submit', array('src'=>'/images/submit.png', 'type'=>'image', 'alt'=>'submit')); ?></div>
</div>
</form>
