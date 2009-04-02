

<?php include_component('home','leftmenu'); ?>
<?php echo form_tag($mdl.'/'.$fnc) ?>
<input type="hidden" id="selectedid" name="selectedid">
<input type="hidden" value="<?php echo $option; ?>" name="o" id="option">

<form id="myform">

<table border="1">
<?php if($flag ==1): echo "Select At least one field...";
	  elseif($results):
  foreach($results as $rs): ?>
<tr>
<td><?php echo $rs->getFullname(); ?></td>
<td><?php echo "Year: ".$rs->getGraduationyear(); ?></td>

<td><?php 
	if($rs->getBranch()){
	echo "Branch: ".$rs->getBranch()->getName(); 
	}
?></td>
<td><?php
	if($rs->getDegree()){
	echo "Degree: ".$rs->getDegree()->getName(); 
	}
	?></td>
<!--<td><?php /*
	$chapter = ChapterPeer::retrieveByPK($chapterid);
	if($chapter){
	echo "Chapter: ".$chapter->getName(); 
	}
	else{
		echo "none";
	}
	*/ ?></td>
-->


<?php if ($option == 's'): ?>
<td><input type="radio" name="option" id="<?php echo $rs->getId() ?>" onclick="checkmeradio(<?php echo $rs->getId() ?>)"></td>
<?php elseif ($option == 'm') : ?>
<td><input type="checkbox" id="<?php echo $rs->getId() ?>" value="<?php echo $rs->getId() ?>" name="userid[]" onclick="checkmechkbx(<?php echo $rs->getId() ?>)"  ></td>
<?php else :  ?>
<td><input type="radio" name="option2" id="<?php echo $rs->getId() ?>" onclick="checkme(<?php echo $rs->getId() ?>)"></td>
<?php endif ; ?>
<?php endforeach;

	else: echo "Sorry!! No maching results found...";

	endif;
?>


<tr>

<?php if ($option == 'm') : ?>
<!--<td><input type="button" name="CheckAll" value="Check All" onClick="SetAllCheckBoxes('myForm', 'userid[]', true)"></td>
-->
<td><input type="button" name="checkAll" value="All" onClick="checkall('userid[]')"></td>
<!--<td><input type="button" name="UnCheckAll" value="Uncheck All" onClick="uncheckAll(myform)"></td>
-->
<td><input type="button" name="uncheckAll" value="None" onClick="uncheckall('userid[]')"></td>
<?php endif ; ?>
</tr>
</table>
<?php echo submit_tag('Continue', array( 'id'=>'commit', 'disabled' => 'disabled' )) ?>
</form>

<script type="text/javascript">

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



</script>