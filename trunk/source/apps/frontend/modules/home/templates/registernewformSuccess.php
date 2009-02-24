<?php include_component('home','messages'); ?>
<?php include_component('home','header'); ?>
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

<?php echo form_tag('home/registernew'); ?>
<div class="rsform">
	<div class="rsforminput">
			<div class="rsformrow">
			<label class="rsformLbl">Username:</label>
			<input class="rsformVal" type="text" name="username">
		</div>
		<div class="rsformrow">
			<label class="rsformLbl">First Name:</label>
			<input class="rsformVal" type="text" name="firstname">
		</div>
		<div class="rsformrow">
			<label class="rsformLbl">Middle Name:</label>
			<input class="rsformVal" type="text" name="middlename">
		</div>
						<div class="rsformrow">
			<label class="rsformLbl">Last Name:</label>
			<input class="rsformVal" type="text" name="lastname">
		</div>
		<div class="rsformrow">
			<label class="rsformLbl">Email Address:</label>
			<input class="rsformVal" type="text" name="email">
		</div>
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
