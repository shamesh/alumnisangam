<?php include_component('home','leftmenu'); ?>
<?php include_component('home', 'messages'); ?>

<?php echo form_tag('user/lor', array('onSubmit'=>'return validate()', 'name'=>'lorform')) ?>
<input type="hidden" id="lorfor" name="lorfor" value="<?php echo $lorForId; ?>">
<div class="page">
	<h3>Location Remark</h3>
	<div class="vspacer20">&nbsp;</div>
	<div class="centermsg">Enter the latest details about <b><?php echo $fullname ?></b></div>
	<div class="vspacer20">&nbsp;</div>
	<div class="evenRow">
		<div class="formleftcol"><div class="formleftcoltext">Email :</div></div><div class="formrightcol"><input type="text" size="30" name="email"></div>
	</div>
	<div class="oddRow">
		<div class="formleftcol"><div class="formleftcoltext">Location :</div></div><div class="formrightcol"><input type="text" size="30" name="location"></div>
	</div>
	<div class="evenRow">
		<div class="formleftcol"><div class="formleftcoltext">Employer :</div></div><div class="formrightcol"><input type="text" size="30" name="employer"></div>
	</div>
	<div class="oddRow">
		<div class="formleftcol"><div class="formleftcoltext">Position :</div></div><div class="formrightcol"><input type="text" size="30" name="position"></div>
	</div>
	<div class="evenRow">
		<div class="formleftcol"><div class="formleftcoltext">Linked In :</div></div><div class="formrightcol"><input type="text" size="30" name="linkedin"></div>
	</div>
	<div class="oddRow">
		<div class="formleftcol"><div class="formleftcoltext">Any other comment :</div></div><div class="formrightcol"><textarea cols="23" rows="3" name="general" ></textarea></div>
	</div>
	<div class="vspacer20">&nbsp;</div>
	<div class="formbuttons"><input type="image" src="/images/submit.png" alt="submit" /></div>
	<div class="vspacer20">&nbsp;</div> 
</div>
</form>
<script type="text/javascript">
	function validate(){
		if(document.lorform.email.value=='' && document.lorform.location.value=='' && document.lorform.employer.value=='' && document.lorform.position.value=='' && document.lorform.linkedin.value=='' && document.lorform.general.value==''){
			alert("Please fill at least one field");
			return false;
		}
	}
</script>