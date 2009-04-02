<?php include_component('home','leftmenu'); ?>
<?php include_component('home', 'messages'); ?>

<?php
echo form_tag('user/sendmail')
?>

<input type="hidden" id="userid" name="userid" value=<?php echo $userid ?>>
<input type="hidden" id="o" name="o" value="<?php echo $option; ?>">
<?php if($option == 's'): ?>
<label>Write an email to : <b><?php echo $fullname ?></b></label>
<?php elseif($option == 'm'): ?>
<label>Write an email to the selected <b><?php echo $count ?> users</b></label>
<?php else : ?>
<label>Write an email to : <b><?php echo $fullname ?></b></label>
<div>
<label>to : 
<?php for ($i = 0; $i<$count ; $i++) : ?>
<?php echo 'name'.$i ; ?>
<?php echo $fullnames[$i]; ?>
<? endfor; ?>

</label>
</div>
<?php endif; ?>

<div>
<label>Subject: </label><input type="text" size="30" name="subject">
</div>

<div>
<label>Email body : </label><textarea cols="30" rows="5" name="letter" ></textarea>
</div>

<?php echo submit_tag('send'); ?>
</form>

