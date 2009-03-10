<?php include_component('home','leftmenu'); ?>

<input type="hidden" id="selectedid" name="selectedid">
<table border="1">
<?php if($flag ==1): echo "Select At least one field...";
	  elseif($results):
	  foreach($results as $rs):
?>

<tr>
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
--><td><input type="radio" id="<?php echo $rs->getId() ?>" onclick="checkme(<?php echo $rs->getId() ?>)"></td>

<?php endforeach;

	else: echo "Sorry!! No maching results found...";

	endif;
?>
</table>


<script type="text/javascript">
function checkme(id)
{
	document.getElementById('selectedid').value = id;
}
</script>