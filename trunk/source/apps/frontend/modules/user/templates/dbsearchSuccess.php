
<?php
 include_component('home','leftmenu');
 include_component('home','messages');
?>

<?php
echo form_tag('user/emailform')
?>
<input type="hidden" id="selectedid" name="selectedid">
<input type="hidden" value="<?php echo $option; ?>" name="o" id="option">
<form id="myform">

<input type="radio" value="Regular" align="middle" name="mailtype"/>Regular
<br><br>
<input type="radio" value="Regular" align="middle" name="mailtype"/>Special Notice (Include those who have disabled email redirection)
<br><br>

<br><br>
<?php echo submit_tag('Mail all Persons'); ?>
<br><br>
<?php if($flag ==1): echo "Select At least one field...";
	  elseif($results):
	  
?>
<?php echo 'search found '.$count.' results'; ?>
<br><br>

<table border="2">

<tr>
<th>
<a id="namesort", href="/user/dbsearch.html" >Name</a>
</th>
<th>
<a>Department</a>
</th>
<th>
<a>User Type</a>
</th>
<th>
<a>Year of Graduation</a>
</th>
<th>
<a>chapter</a>
</th>
<th>
<?php if ($option == 'm') : ?>
mail

<input type="checkbox" name="checkall" id="checkall" onchange="check('userid[]', this)"  >
<?php else :  ?>
chose one
<?php endif ; ?>
</th>

</tr>
 
<?php
	  foreach($results as $rs):
?>
<tr>
<td><?php echo $rs->getFullname();  ?></td>

<td><?php 
	if($rs->getBranch()){
	echo $rs->getBranch()->getName(); 
	}
?></td>
<td><?php
	if($rs->getUsertype() == 0){
		
	echo " Student"; 
	}
	elseif($rs->getUsertype() == 1){
		echo " Alumni"; 
	}
    elseif($rs->getUsertype() == 2){
		echo " Faculty"; 
	}
	?></td>
<td><?php
	if($rs->getGraduationyear()){
		
	echo $rs->getGraduationyear(); 
	}
	?></td>
<td><?php
	$c = new Criteria();
	$c->add(UserchapterregionPeer::USER_ID, $rs->getId());
	$ucrs = UserchapterregionPeer::doSelect($c);
	
	$chapterlist = '';
	foreach ($ucrs as $ucr){
		if(!$chapterlist){
			$chapterlist = $ucr->getChapterregion()->getChapter()->getName(); 
		}else{
			$chapterlist .= ', '.$ucr->getChapterregion()->getChapter()->getName();
		}
	}
	echo $chapterlist;
	?></td>

<?php if ($option == 's'): ?>
<td><input type="radio" name="option" id="<?php echo $rs->getId() ?>" onclick="checkmeradio(<?php echo $rs->getId() ?>)"></td>
<?php elseif ($option == 'm') : ?>
<td><input type="checkbox" id="<?php echo $rs->getId() ?>" value="<?php echo $rs->getId() ?>" name="userid[]" onclick="checkmechkbx(<?php echo $rs->getId() ?>)"  ></td>
<?php else :  ?>
<td><input type="radio" name="option2" id="<?php echo $rs->getId() ?>" onclick="checkme(<?php echo $rs->getId() ?>)"></td>
<?php endif ; ?>
<!--<input type="checkbox" id="<?php echo $rs->getId() ?>" value="<?php echo $rs->getId() ?>" name="userid[]" onclick="checkme(<?php echo $rs->getId() ?>)"  >



-->
</tr>

<?php endforeach; 

 else: echo "Sorry!! No maching results found...";

	endif; 
	?>

</table>
<br><br>
<?php echo submit_tag('Mail Persons', array( 'id'=>'commit', 'disabled' => 'disabled' )); ?>
</form>
<script type="text/javascript">

function check(chkbxgrpname, me){
  if (me.checked){
  	checkall(chkbxgrpname);
  }else{
  	uncheckall(chkbxgrpname);
  }
}

function checkall(chkbxgrpname){
	var ch = document.getElementsByName(chkbxgrpname);
	for(var i=0; ch[i]; i++){
		ch[i].checked = true;
	}
	document.getElementById('commit').disabled = false;
}

function uncheckall(chkbxgrpname){
	var ch = document.getElementsByName(chkbxgrpname);
	for(var i=0; ch[i]; i++){
		ch[i].checked = false;
	}
	document.getElementById('commit').disabled = true;
}

function checkmeradio(id)
{
	
	document.getElementById('selectedid').value = id;
	document.getElementById('commit').disabled = false;
}
function checkmechkbx(id)
{
	
    var flag = 0 ;
	var ch = document.getElementsByName('userid[]');
	for(var i=0; ch[i]; i++){
		if(ch[i].checked){
		  flag = 1;
		}
	}
	if (flag == 0){
		
		document.getElementById('commit').disabled = true;
	}else{
		
		document.getElementById('commit').disabled = false;
	}
}

function func(){
alert('hi!');
}
</script>
