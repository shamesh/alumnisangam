<?php include_component('home','leftmenu');
	include_component('home', 'messages');
?>

<div class="page">
	<h3>Branches</h3>
	<div class="vspacer20">&nbsp;</div>

	<?php $i=0;
		foreach($branches as $branch): 
		$i++;
	?>
		<div class="<?php if($i%2 == 0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
			<div class="brlistleft"><?php echo $branch->getCode(); ?></div>
			<div class="brlistmiddle"><?php echo $branch->getName(); ?></div>
			<div class="brlistright">
				<img src="/images/edit.png" alt="edit" style="cursor: pointer;" onclick="javascript:document.getElementById('editbranch<?php echo $i; ?>').style.display='block';">
				<div style="float: left; margin-left:50px; margin-top: -20px;">
		  			<form name="delform" action="/admin/deletebranch.html" method="post" onsubmit="return confirm('Are you sure')">
						<input type="hidden" value="<?php echo $branch->getId() ?>" name="id">
						<span style="padding-right: 10px;"><input type="image" src="/images/delete.png" alt="delete" style="cursor: pointer;"></span>
					</form>
				</div>
			</div>
			<div class="editbranch" id="editbranch<?php echo $i; ?>">
				<form action="/admin/editbranch.html" name="editbranch" method="post" onsubmit="return editvalidate('editname<?php echo $i; ?>', 'editcode<?php echo $i; ?>')">
					<input type="hidden" value="<?php echo $branch->getId(); ?>" name="id">
					<div class="vspacer10">&nbsp;</div>
						<div class="addRow">
						<div class="rowData">
						Branch Name :&nbsp;&nbsp;<input type="text" name="branch" id="editname<?php echo $i; ?>" value="<?php echo $branch->getName() ?>">
						&nbsp;&nbsp;Branch Code :&nbsp;&nbsp;<input type="text" name="code" id="editcode<?php echo $i; ?>" value="<?php echo $branch->getCode() ?>">&nbsp;&nbsp;
						</div>
						<div class="rowImage">
							<input type="image" src="/images/done.png" alt="Done">&nbsp;&nbsp;
							<img src="/images/cancel.png" alt="cancel" onclick="javascript:document.getElementById('editbranch<?php echo $i; ?>').style.display='none'" style="cursor: pointer;"></div>
						</div>
					<div class="vspacer10">&nbsp;</div>
				</form>
			</div>
		</div>
	<?php endforeach; ?>
	
	<div class="addbranch" id="addbranch">
		<form action="/admin/addbranch.html" name="addbranch" method="post" onsubmit="return validate()">
			<div class="vspacer10">&nbsp;</div>
				<div class="addRow">
				<div class="rowData">
					Branch Name :&nbsp;&nbsp;<input type="text" name="branch" id="addname">&nbsp;&nbsp;
					Branch Code :&nbsp;&nbsp;<input type="text" name="code" id="addcode">&nbsp;&nbsp;
				</div>
				<div class="rowImage">
					<input type="image" src="/images/add.png" alt="add">&nbsp;&nbsp;
					<img src="/images/cancel.png" alt="cancel" onclick="javascript:document.getElementById('addbranch').style.display='none'" style="cursor: pointer;"></div>
				</div>
			<div class="vspacer10">&nbsp;</div>
		</form>
	</div>
	
	<div class="vspacer20">&nbsp;</div>
	<div class="formbuttons"><input type="image" src="/images/addregion.png" alt="Add branch" onclick="javascript:document.getElementById('addbranch').style.display='block'"></div>
	<div class="vspacer20">&nbsp;</div>
	
	
	
</div>
<script type="text/javascript">
	function validate(){
		if(trim(document.getElementById('addname').value) == ''){
			alert("Please Enter a name");
			return false;
		}else if(trim(document.getElementById('addcode').value) == ''){
			alert("Please Enter a Code");
			return false;
		}
	}
	function editvalidate(nameid, codeid){
		if(trim(document.getElementById(nameid).value) == ''){
			alert("Please Enter a name");
			return false;
		}else if(trim(document.getElementById(codeid).value) == ''){
			alert("Please Enter a code");
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