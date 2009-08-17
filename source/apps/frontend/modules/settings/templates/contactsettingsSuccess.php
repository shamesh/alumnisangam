<?php
	include_component('home', 'leftmenu');
	include_component('home', 'messages');
?>
<div class="page">
	<h3>Monthly Newsletter</h3>
	<div class="vspacer20">&nbsp;</div>
		<div class="oddRow">
		<?php echo form_tag('settings/submitcontactsettings') ?>
		<div class="centermsg">
			<input type="checkbox" name="mail" value="1" <?php if($flags && $flags->getMail()){ echo "CHECKED";} ?>  /> Donot Bug me.
			<input type="checkbox" name="newsletter" value="1" <?php if($flags && $flags->getNewsletter()){ echo "CHECKED";} ?>  /> Subscribe nresletter.
			<div align="center" >  <input type="submit"  value="Submit"> </div>
		</div>
		</form>
	</div>
</div>