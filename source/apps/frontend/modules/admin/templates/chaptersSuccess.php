<?php include_component('home','leftmenu');
	include_component('home', 'messages');
?>

<div class="page">
	<h3>Chapters</h3>
	<div class="vspacer20">&nbsp;</div>
	<div class="oddRow">
		<div class="listleft"><b>Chapter</b></div>
		<div class="listright"><b>Region</b></div>
	</div>
	<?php $i = 1; 
		foreach ($chapters as $chapter): 
		$i++;
	?>
	<div class="<?php if($i%2==0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
	      <div class="listleft"><?php echo $chapter->getName() ?></div>
	      <div class="listright"><?php echo $chapter->getRegion()->getName() ?></div>
	      <span style="padding-right: 10px;"><img src="/images/edit.png" alt="edit" style="cursor: pointer;" onclick="javascript:document.getElementById('editchapter<?php echo $i; ?>').style.display='block';"></span>
	      <div style="float: right; margin-top: -21px;">
				<form name="delform" action="/admin/deletechapter.html" method="post" onsubmit="return confirm('Are you sure')">
					<input type="hidden" value="<?php echo $chapter->getId() ?>" name="id">
					<span style="padding-right: 10px;"><input type="image" src="/images/delete.png" alt="Delete" style="cursor: pointer;"></span>
				</form>
			</div>
			<div class="editchapter" id="editchapter<?php echo $i; ?>">
				<form action="/admin/editchapter.html" name="editchapter" method="post" onsubmit="return editvalidate('editname<?php echo $i; ?>')">
					<input type="hidden" value="<?php echo $chapter->getId(); ?>" name="id">
					<div class="vspacer10">&nbsp;</div>
						<div class="addRow">
						<div class="rowData">
						Chapter :&nbsp;&nbsp;<input type="text" name="chapter" id="editname<?php echo $i; ?>" value="<?php echo $chapter->getName() ?>">&nbsp;&nbsp;&nbsp;&nbsp;Region :&nbsp;&nbsp;<?php echo select_tag('region', options_for_select($regionOptions, $chapter->getRegion()->getId()) ) ?>
						&nbsp;&nbsp;
						</div>
						<div class="rowImage">
							<input type="image" src="/images/done.png" alt="Done">&nbsp;&nbsp;
							<img src="/images/cancel.png" alt="cancel" onclick="javascript:document.getElementById('editchapter<?php echo $i; ?>').style.display='none'" style="cursor: pointer;"></div>
						</div>
					<div class="vspacer10">&nbsp;</div>
				</form>
			</div>
	</div>
	<?php endforeach; ?>
	
	<div class="addchapter" id="addchapter">
		<form action="/admin/addchapter.html" name="addchapter" method="post" onsubmit="return validate()">
				<div class="addRow" style="margin-top: 10px">
				<div class="rowData">
				Chapter :&nbsp;&nbsp;<input type="text" name="chapter" id="addname">&nbsp;&nbsp;&nbsp;&nbsp;Region :&nbsp;&nbsp;<?php echo select_tag('region', options_for_select($regionOptions) ) ?>
				&nbsp;&nbsp;
				</div>
				<div class="rowImage">
					<input type="image" src="/images/add.png" alt="add">&nbsp;&nbsp;
					<img src="/images/cancel.png" alt="cancel" onclick="javascript:document.getElementById('addchapter').style.display='none'" style="cursor: pointer;"></div>
				</div>
		</form>
	</div>
	
	<div class="vspacer20">&nbsp;</div>
	<div class="formbuttons"><input type="image" src="/images/addchapter.png" alt="Add Chapter" onclick="javascript:document.getElementById('addchapter').style.display='block'"></div>
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