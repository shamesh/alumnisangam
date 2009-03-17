<?php include_component('home','header'); ?>

<?php 
if($regusers):
echo form_tag('home/regverify', array('name'=>'regverify'));
?>
	<table border="solid 1px #000000">
	  <tr>
	    <th>Select</th>
	    <th>Name</th>
	    <th>Enrolment No</th>
	    <th>Graduation Year</th>
	    <th>Branch</th>
	  </tr>
<?php	foreach($regusers as $reguser):
		$cp = new Criteria();
		$cp->add(PersonalPeer::USER_ID, $reguser->getId());
		$personal = PersonalPeer::doSelectOne($cp);
		
		$cb = new Criteria();
		$cb->add(BranchPeer::ID, $reguser->getBranchId());
		$branch = BranchPeer::doSelectOne($cb);
?>
		  <tr>
		    <td><input type="radio" name="regradio" id="<?php echo $reguser->getId(); ?>" value="<?php echo $reguser->getId(); ?>" onclick="claim()"></td>
		    <td><?php echo $personal->getFirstname().' '.$personal->getMiddlename().' '.$personal->getLastname();?></td>
		    <td><?php echo $reguser->getEnrolment(); ?></td>
		    <td><?php echo $reguser->getGraduationyear(); ?></td>
		    <td><?php if($branch): echo $branch->getName(); endif; ?></td>
		  </tr>
<?php
		endforeach;
?>
</table>
<?php
	echo submit_tag('Hey! This is me', array('disabled'=>true));
	echo button_to('I\'m Not Here', 'home/registernewform');
?>
</form>
<?php else:
	echo "Sorry!! No matching records found.";
	?><br><?php
	echo button_to('I\'m Not Here', 'home/registernewform');
	
endif; 
?>
<?php  include_component('home','footer'); ?>
<script type="text/javascript">
function claim()
{
	document.regverify.commit.disabled = false;
}



</script>