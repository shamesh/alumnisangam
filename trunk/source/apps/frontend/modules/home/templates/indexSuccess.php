<?php include_component('home','leftmenu'); ?>
<?php use_helper('Object') ?>
<div class="registerhead">
<b>Register yourself in the alumni database</b>
<br /><br/>
<b>Note:</b> All faculty members who are alumni of the institute should select "Alumni" as a type option.
<br /><br/>
<b>IMPORTANT:</b>Do <b>NOT</b> write your middle/maiden names here.
Your ID will be FirstName.LastName@BBBYY.itbhuglobal.org, so filling in a long FirstName like "Animesh Kumar" and LastName as "Singh" could lead to an ID like Animesh.Kumar.Singh@BBBYY.itbhuglobal.org.
<br /><br />
</div>

<?php echo form_tag('home/regsearch'); ?>
<div class="rsform">
	<div class="rsforminput">
	
	<!--
		<div class="rsformrow">
			<label class="rsformLbl">Name:</label>
			<input class="rsformVal" type="text" name="name">
			<div class="rsformhelp">(First Name / Middle Name / Last Name)</div>
		</div>
		<div class="rsformrow">
			<label class="rsformLbl">Enrolment No:</label>
			<input class="rsformVal" type="text" name="enrol">
		</div>
		-->
		
		<div class="rsformrow">
			<label class="rsformLbl">Department:</label>
			<div class="rsformVal">
			<?php echo select_tag('branch', options_for_select($options), array(
			'include_blank' => true,
			))?>
			</div>
		</div>
		<div class="rsformrow">
			<label class="rsformLbl">Year of graduation:</label>
			<div class="rsformVal" >
			<select name="year" >
				<?php for($i=1923; $i<=2013; $i++): ?>
				<option><?php echo $i; ?></option>
				<?php endfor; ?>
			</select>
			</div>
		</div>
	<div class="rsformval">
		<div class="rsformrow">
		<label class="rsformLbl">&nbsp;</label>
		<input type="image" alt="register" src="/images/register.jpg"/>
		</div>
	</div>
		</div>
</div>
</form>
<?php  include_component('home','footer'); ?>
