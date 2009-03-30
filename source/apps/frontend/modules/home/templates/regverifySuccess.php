<?php include_component('home','header');
include_component('home','messages');
?>
<div class="regverify">
<?php
	echo "Dear ".$personal->getFirstname()." ".$personal->getMiddlename()." ".$personal->getLastname().", please provide the following details. They will help our authorizers ascertain your identity.";
?>

<div>
<b>Note:</b> It is not necessary to provide all the details but please provide as much as you can. 
</div>
<div>
<b>Please note that if you leave all fields blank, your authorization process may take a very long time.</b>
</div>
<?php echo form_tag('home/regmail'); ?>
<input type="hidden" value="<?php echo $personal->getUserId(); ?>" name="userid">
	<div class="rvform">
		<div class="rvformfield">
			<label class="rvformLbl">Your Roll Number</label>
			<input class="rvformVal" type="text" name="roll">
		</div>
		<div class="rvformfield">
			<label class="rvformLbl">Your HAWA (think IT lingo)</label>
			<input class="rvformVal" type="text" name="hawa">
		</div>
		<div class="rvformfield">
			<label class="rvformLbl">City you are from</label>
			<input class="rvformVal" type="text" name="city">
		</div>
		<div class="rvformfield">
			<label class="rvformLbl">Who was the HoD at your time</label>
			<input class="rvformVal" type="text" name="hod">
		</div>
		<div class="rvformfield">
			<label class="rvformLbl">Who was the director at your time</label>
			<input class="rvformVal" type="text" name="director">
		</div>
		<div class="rvformfield">
			<label class="rvformLbl">Your favorite teacher</label>
			<input class="rvformVal" type="text" name="favteacher">
		</div>
		<div class="rvformfield">
			<label class="rvformLbl">Your favorite shop at Lanka</label>
			<input class="rvformVal" type="text" name="favlankashop">
		</div>
		<div class="rvformfield">
			<label class="rvformLbl">Current Email *</label>
			<input class="rvformVal" type="text" name="email">
		</div>		
		<div class="rvsubmit">
			<?php echo submit_tag('I answered as much as possible !!'); ?>
		</div>			
	</div>
</form>
</div>