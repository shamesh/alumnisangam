<?php include_component('home','leftmenu');
	include_component('home', 'messages');
?>

<div class="page">
	<h3>Badges</h3>
	<div class="vspacer20">&nbsp;</div>

	<?php $i=0;
		foreach($badges as $badge): 
		$i++;
	?>
		<div class="<?php if($i%2 == 0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
			<div class="rglistleft"><?php echo $badge->getName() ?></div>
			<div class="rglistright">
				<img src="/images/edit.png" alt="edit" style="cursor: pointer;" onclick="javascript:document.getElementById('editbadge<?php echo $i; ?>').style.display='block';">
				<div style="float: left; margin-left:50px; margin-top: -20px;">
		  			<form name="delform" action="/admin/deletebadge.html" method="post" onsubmit="return confirm('Are you sure')">
						<input type="hidden" value="<?php echo $badge->getId() ?>" name="id">
						<span style="padding-right: 10px;"><input type="image" src="/images/delete.png" alt="delete" style="cursor: pointer;"></span>
					</form>
				</div>
			</div>
			<div class="editbadge" id="editbadge<?php echo $i; ?>">
				<form action="/admin/editbadge.html" name="editbadge" method="post" onsubmit="return editvalidate('editname<?php echo $i; ?>')">
					<input type="hidden" value="<?php echo $badge->getId(); ?>" name="id">
					<div class="vspacer10">&nbsp;</div>
						<div class="addRow">
						<div class="rowData">
						badge :&nbsp;&nbsp;<input type="text" name="badge" id="editname<?php echo $i; ?>" value="<?php echo $badge->getName() ?>">
						&nbsp;&nbsp;
						</div>
						<div class="rowImage">
							<input type="image" src="/images/done.png" alt="Done">&nbsp;&nbsp;
							<img src="/images/cancel.png" alt="cancel" onclick="javascript:document.getElementById('editbadge<?php echo $i; ?>').style.display='none'" style="cursor: pointer;"></div>
						</div>
					<div class="vspacer10">&nbsp;</div>
				</form>
			</div>
		</div>
	<?php endforeach; ?>
	
	<div class="addbadge" id="addbadge">
		<form action="/admin/addbadge.html" name="addbadge" method="post" onsubmit="return validate()">
				<div class="addRow" style="margin-top: 10px;">
				<div class="rowData">
					badge :&nbsp;&nbsp;<input type="text" name="badge" id="addname">&nbsp;&nbsp;
				</div>
				<div class="rowImage">
					<input type="image" src="/images/add.png" alt="add">&nbsp;&nbsp;
					<img src="/images/cancel.png" alt="cancel" onclick="javascript:document.getElementById('addbadge').style.display='none'" style="cursor: pointer;"></div>
				</div>
		</form>
	</div>
	
	<div class="vspacer20">&nbsp;</div>
	<div class="formbuttons"><input type="image" src="/images/addbadge.png" alt="Add badge" onclick="javascript:document.getElementById('addbadge').style.display='block'"></div>
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