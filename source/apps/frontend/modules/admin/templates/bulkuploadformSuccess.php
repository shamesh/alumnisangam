<?php
	include_component('home','leftmenu');
	
?>

<div class="page">
	<h3>Bulk Upload</h3>
	<div class="vspacer20">&nbsp;</div>
	<?php echo form_tag('admin/bulkupload', 'name=indexform multipart=true, method=post');?>
	<div class="oddRow">
	<?php include_component('home','messages'); ?>
		<div class="centermsg">
			Select a File: 
			<?php
				echo input_file_tag('csvfile', array('size'=>40));
				echo submit_tag('Upload');
			?>
		</div>
	</div>
	</form>
	<div class="vspacer20">&nbsp;</div>
</div>
