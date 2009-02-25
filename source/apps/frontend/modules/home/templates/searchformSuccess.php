<?php
 include_component('home','leftmenu');
 include_component('home','messages');;
?>
<?php echo form_tag('home/search'); ?>
<div>
Degree: <?php echo select_tag('degree', options_for_select($dgoptions), array(
			'include_blank' => true,
			))?>			
</div>
<div>
Year: <?php echo select_tag('year', options_for_select($yroptions), array(
			'include_blank' => true,
			))?>			
</div>
<div>
Branch: <?php echo select_tag('branch', options_for_select($broptions), array(
			'include_blank' => true,
			))?>
</div>	
<div>		
Chapter: <?php echo select_tag('chapter', options_for_select($choptions), array(
			'include_blank' => true,
			))?>
</div>			
<div>


</div>
<?php echo submit_tag('Search'); ?>

</form>
			