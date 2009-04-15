<?php include_component('home','leftmenu'); ?>
<?php use_helper('Object') ?>
<div class="page">	
	<H3>Find yourself in Alumni Registry</H3>
	<div class="vspacer20">&nbsp;</div>
	<?php echo form_tag('home/records'); ?>
		<div class="evenRow">
			<div class="formleftcol">
				<div class="formleftcoltext">Branch<font color="red">*</font> :</div> 
			</div>
			<div class="formrightcol">
				<?php echo select_tag('branch', options_for_select($broptions), array(
					'include_blank' => true,
					))?>
			</div>
		</div>
		<div class="evenRow">
			<div class="formleftcol">
				<div class="formleftcoltext">Degree<font color="red">*</font> :</div> 
			</div>
			<div class="formrightcol">
				<?php echo select_tag('degree', options_for_select($dgoptions), array(
					'include_blank' => true,
					))?>
			</div>
		</div>
		<div class="evenRow">
			<div class="formleftcol">
				<div class="formleftcoltext">Year of graduation<font color="red">*</font> :</div> 
			</div>
			<div class="formrightcol">
				<select name="year" >
						<?php for($i= sfConfig::get('app_year_start'); $i <= sfConfig::get('app_year_end'); $i++): ?>
							<option><?php echo $i; ?></option>
						<?php endfor; ?>
				</select>
				(Current students write expected year of graduation)
			</div>
		</div>
		<div class="vspacer20">&nbsp;</div>
		<div class="formbuttons">
			<input type="image" alt="register" src="/images/findmyrecord.png" />
		</div>
		<div class="formfootnote"><font color="red">*</font>&nbsp; Required field.</div>
	</form>
</div>