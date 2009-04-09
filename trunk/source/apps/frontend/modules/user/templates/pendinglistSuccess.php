<?php include_component('home','leftmenu'); ?>

<?php if ($sf_flash->has('newuseraction')): ?>
<div id="loginerrorMessages">
	<div id="message"><img src="/images/iconWarning.gif"/><?php echo $sf_flash->get('newuseraction')?></div>
</div>
<?php endif; ?>

	<?php 
		if($sf_user->hasCredential('admin')){
			$pr = $personal;
		}elseif($sf_user->hasCredential('auth')){
			$pr = $personalca;
		}elseif($sf_user->hasCredential('masterauth')){
			$pr = $personalma;
		}
	?>	

<?php if($pr || $personaloa): ?>

<?php echo form_tag('user/managenewuser', array('name'=>'mnuser')); ?>
<input type="hidden" name="ids" id="ids" value="">
<input type="hidden" name="action1" id="action1" value="">
<input type="hidden" name="from" id="from" value="pending">
<table border="solid">
	<tr>
		<th>Username</th>
		<th>Name</th>
		<th>Degree</th>
		<th>Branch</th>
		<th>Enrolment No.</th>
		<th>Roll No.</th>
		<th>&nbsp;</th>
	</tr>

	<?php foreach($pr as $pers): ?>
		<tr>
			<td><?php echo $pers->getUser()->getUsername(); ?></td>
			<td><?php echo $pers->getFirstname()." ".$pers->getMiddlename()." ".$pers->getLastname(); ?></td>
			<?php if($pers->getUser()->getDegree()): ?>
			<td><?php echo $pers->getUser()->getDegree()->getName(); ?></td>
			<?php endif;  if($pers->getUser()->getBranch()):?>
			<td><?php echo $pers->getUser()->getBranch()->getName(); ?></td>
			<?php endif; ?>
			<td><?php echo $pers->getUser()->getEnrolment(); ?></td>
			<td><?php echo $pers->getUser()->getRoll(); ?></td>
			<td><input type="checkbox" name="<?php echo $pers->getUserId(); ?>" id="<?php echo $pers->getUserId(); ?>" ></td>
		</tr>
	<?php endforeach; ?>
	<?php if($sf_user->hasCredential('auth') && $personaloa): ?>
		<?php foreach($personaloa as $pers): ?>
			<tr>
				<td><?php echo $pers->getUser()->getUsername(); ?></td>
				<td><?php echo $pers->getFirstname()." ".$pers->getMiddlename()." ".$pers->getLastname(); ?></td>
				<?php if($pers->getUser()->getDegree()): ?>
				<td><?php echo $pers->getUser()->getDegree()->getName(); ?></td>
				<?php endif;  if($pers->getUser()->getBranch()):?>
				<td><?php echo $pers->getUser()->getBranch()->getName(); ?></td>
				<?php endif; ?>
				<td><?php echo $pers->getUser()->getEnrolment(); ?></td>
				<td><?php echo $pers->getUser()->getRoll(); ?></td>
				<td><input type="checkbox" name="<?php echo $pers->getUserId(); ?>" id="<?php echo $pers->getUserId(); ?>" ></td>
			</tr>
	<?php endforeach; ?>
	<?php endif ?>	
</table>

</form>
<input type="button" name="approve" onclick="approvefn()" value="Approve" >
<input type="button" name="reject" onclick="rejectfn()" value="Reject" >
<?php else: ?>
<div>
<br><br>
No more pending users...
<br><br>
</div>
<?php endif; ?>


<script type="text/javascript">
	function approvefn()
	{
		mycheck();
		document.getElementById('action1').value = "approve";
		document.mnuser.submit();
	}
	
	function rejectfn()
	{
		mycheck();
		document.getElementById('action1').value = "reject";
		document.mnuser.submit();
	}
	function mycheck()
	{
		//document.getElementById('ids').value += id+',';
		document.getElementById('ids').value = '';
		var i=0;
		while(document.mnuser.elements[i])
		{
			var curElement = document.mnuser.elements[i];
			if((curElement.type == "checkbox") && (curElement.checked == true))
			{
				document.getElementById('ids').value += curElement.id+', ';
			}
			i++;
		} 
	}
	
</script>