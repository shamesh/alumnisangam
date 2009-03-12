<?php include_component('home','leftmenu'); ?>
<?php include_component('home', 'messages'); ?>

<?php
echo form_tag('user/lor')
?>

<input type="hidden" id="lorfor" name="lorfor" value="<?php echo $lorForId; ?>">

<label>Enter the latest details about <b><?php echo $fullname ?></b></label>
<div>
<label>Location: </label><input type="text" size="30" name="location"> 
</div>
<div>
<label>Employer: </label><input type="text" size="30" name="employer">
</div>
<div>
<label>Position: </label><input type="text" size="30" name="position">
</div>
<div>
<label>Linked In: </label><input type="text" size="30" name="linkedin">
</div>
<div>
<label>Any other comment: </label><textarea cols="30" rows="5" name="general" ></textarea>
</div>

<?php echo submit_tag(); ?>
</form>

