<?php include_component('home', 'messages');?>
<?php include_component('home', 'leftmenu');?>

<?php if ($sf_flash->has('forgotpassword')): ?>
<div id="loginerrorMessages" style="width:600px;">
	<div id="message"><img src="/images/iconInformation.gif"/><?php echo $sf_flash->get('forgotpassword')?></div>
</div>
<?php endif; ?>

<?php echo form_tag('user/forgotpassword', 'multipart=true') ?>
<div>
<label>Enter your registered Email: </label>
<?php echo input_tag('email', array('size' => 30));

echo submit_tag('Go');


?>



</div>

</form>