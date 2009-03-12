<?php
 include_component('home','leftmenu');
 include_component('home','messages');;
?>
	<?php if ($sf_flash->has('searchnone')): ?>
	<div id="loginerrorMessages">
		<div id="message"><img src="/images/iconWarning.gif"/><?php echo $sf_flash->get('searchnone')?></div>
	</div>
	<?php endif; ?>

<?php echo form_tag('home/search'); ?>
<input type="hidden" value="<?php echo $mdl; ?>" name="mdl" id="mdl">
<input type="hidden" value="<?php echo $fnc; ?>" name="fnc" id="fnc">
<label><b>Search users for <?php echo $hdr; ?></b></label>
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
			
			