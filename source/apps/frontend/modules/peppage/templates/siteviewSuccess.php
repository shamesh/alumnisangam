<?php include_component('peppage', 'sitetabs'); ?>

<div class="sitetabs">
	<?php  if (has_slot('sitetabs')): 
	 			include_slot('sitetabs');  
		   endif; 
	?>
</div>

<div class="pepbody">
	<?php echo $peppage->getContent(); ?>
</div>