<?php
?>
<?php include_component('home', 'leftmenu'); ?>
<?php use_helper('Object') ?>
<div class="page">
	<h3>Resume</h3>
	<?php echo form_tag('professional/saveresume', array('name'=>'resumeform')) ?>
	<input type="hidden" value="<?php echo $userid ?>" name="userid">
	<input type="hidden" value="<?php echo $resume->getId() ?>" name="id">
	<input type="hidden" value="0" id="pdf" name="pdf">
	<div class="vspacer20">&nbsp;</div>
	<div class="oddRow" style="text-align: center;">
		<?php echo object_textarea_tag($resume, 'getContent', array (
		  	'rich' => 'fck',
			'height' => 495,
			'width'	=> 650,
			'onkeypress' => 'savestatus()',
		)) ?>	
	</div>
	<div class="vspacer20">&nbsp;</div>
	<div class="formbuttons">
	<input type="image" src="/images/update.png" alt="Update">
	<input type="image" src="/images/getpdf.png" alt="Get PDF" title="Get Resume in PDF format" onclick="setparam()">
	</div>
	<div class="vspacer10">&nbsp;</div>
	</form>
</div>


<script type="text/javascript">
	function setparam(){
		document.getElementById('pdf').value = '1';
		document.resumeform.submit();
	}

</script>