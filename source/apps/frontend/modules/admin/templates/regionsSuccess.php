<?php include_component('home','leftmenu');
	include_component('home', 'messages');
?>

<div class="page">
	<h3>Regions</h3>
	<div class="vspacer20">&nbsp;</div>

	<?php $i=0;
		foreach($regions as $region): 
		$i++;
	?>
		<div class="<?php if($i%2 == 0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
			<div class="rglistleft"><?php echo $region->getName() ?></div>
			<div class="rglistright">
				<img src="/images/edit.png" alt="edit" style="cursor: pointer;" onclick="javascript:document.getElementById('editregion<?php echo $i; ?>').style.display='block';">
				<div style="float: left; margin-left:50px; margin-top: -20px;">
		  			<form name="delform" action="/admin/deleteregion.html" method="post" onsubmit="return confirm('Are you sure')">
						<input type="hidden" value="<?php echo $region->getId() ?>" name="id">
						<span style="padding-right: 10px;"><input type="image" src="/images/delete.png" alt="delete" style="cursor: pointer;"></span>
					</form>
				</div>
			</div>
			<div class="editregion" id="editregion<?php echo $i; ?>">
				<form action="/admin/editregion.html" name="editregion" method="post" onsubmit="return editvalidate('editname<?php echo $i; ?>')">
					<input type="hidden" value="<?php echo $region->getId(); ?>" name="id">
					<div class="vspacer10">&nbsp;</div>
						<div class="addRow">
						<div class="rowData">
						Region :&nbsp;&nbsp;<input type="text" name="region" id="editname<?php echo $i; ?>" value="<?php echo $region->getName() ?>">
						&nbsp;&nbsp;
						</div>
						<div class="rowImage">
							<input type="image" src="/images/done.png" alt="Done">&nbsp;&nbsp;
							<img src="/images/cancel.png" alt="cancel" onclick="javascript:document.getElementById('editregion<?php echo $i; ?>').style.display='none'" style="cursor: pointer;"></div>
						</div>
					<div class="vspacer10">&nbsp;</div>
				</form>
			</div>
		</div>
	<?php endforeach; ?>
	
	<div class="addregion" id="addregion">
		<form action="/admin/addregion.html" name="addregion" method="post" onsubmit="return validate()">
			<div class="vspacer10">&nbsp;</div>
				<div class="addRow">
				<div class="rowData">
					Region :&nbsp;&nbsp;<input type="text" name="region" id="addname">&nbsp;&nbsp;
				</div>
				<div class="rowImage">
					<input type="image" src="/images/add.png" alt="add">&nbsp;&nbsp;
					<img src="/images/cancel.png" alt="cancel" onclick="javascript:document.getElementById('addregion').style.display='none'" style="cursor: pointer;"></div>
				</div>
			<div class="vspacer10">&nbsp;</div>
		</form>
	</div>
	
	<div class="vspacer20">&nbsp;</div>
	<div class="formbuttons"><input type="image" src="/images/addregion.png" alt="Add Region" onclick="javascript:document.getElementById('addregion').style.display='block'"></div>
	<div class="vspacer20">&nbsp;</div>
	
	
	
</div>
<script type="text/javascript">
	function validate(){
		if(trim(document.getElementById('addname').value) == ''){
			alert("Please Enter a name");
			return false;
		}
	}
	function editvalidate(divid){
		if(trim(document.getElementById(divid).value) == ''){
			alert("Please Enter a name");
			return false;
		}
	}
	function trim(str, chars) {
		return ltrim(rtrim(str, chars), chars);
	}
	 
	function ltrim(str, chars) {
		chars = chars || "\\s";
		return str.replace(new RegExp("^[" + chars + "]+", "g"), "");
	}
	 
	function rtrim(str, chars) {
		chars = chars || "\\s";
		return str.replace(new RegExp("[" + chars + "]+$", "g"), "");
	}

</script>