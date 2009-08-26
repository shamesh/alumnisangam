<?php include_component('home','leftmenu'); ?>

<?php if ($sf_flash->has('newuseraction')): ?>
<div id="successMessages">
	<div id="message"><?php echo $sf_flash->get('newuseraction')?></div>
</div>
<?php endif; 

if($personal):
?>

<?php echo form_tag('user/managenewuser', array('name'=>'mnuser')); ?>
<input type="hidden" name="ids" id="ids" value="">
<input type="hidden" name="action1" id="action1" value="">
<input type="hidden" name="from" id="from" value="new">
<table border="solid">
	<tr>
		<th>Username</th>
		<th>Name</th>
		<th>Branch</th>
		<th>Year of Graduation</th>
		<th>Email Address</th>
		<th>&nbsp;</th>
	</tr>
	<?php foreach($personal as $pers): ?>
	<tr>
		<td><?php echo $pers->getUser()->getUsername(); ?></td>
		<td><?php echo $pers->getFirstname()." ".$pers->getMiddlename()." ".$pers->getLastname(); ?></td>
		
		<td>
		<?php if($pers->getUser()->getBranch()):?>
		<?php echo $pers->getUser()->getBranch()->getName(); ?>
		<?php endif; ?>
		</td>
		<td><?php echo $pers->getUser()->getGraduationyear(); ?></td>
		<td><?php echo $pers->getEmail(); ?></td>
		<td><input type="checkbox" name="<?php echo $pers->getUserId(); ?>" id="<?php echo $pers->getUserId(); ?>" ></td>
	</tr>
	<?php endforeach; ?>
</table>

</form>
<input type="button" name="approve" onclick="approvefn()" value="Approve" >
<input type="button" name="reject" onclick="rejectfn()" value="Reject" >
<?php else: ?>
<div>
<br><br>
No new registrations...
<br><br>
</div>
<?php endif; ?>


<script type="text/javascript">
	function approvefn(){
		mycheck();
		document.getElementById('action1').value = "approve";
		document.mnuser.submit();
	}
	function rejectfn(){
		mycheck();
		document.getElementById('action1').value = "reject";
		document.mnuser.submit();
	}
	function mycheck(){
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