<?php include_component('home','leftmenu');  ?>
<div class="displaySuccess">
<?php
echo "File uploaded successfully.<br><br>";
echo "=> ".$success." rows added successfully.<br><br>";
echo "=> ".count($ignored)." rows skipped due to error.<br><br>";
echo "=> ".count($exists)." rows already in the database.<br><br>";
?>
</div>
<div class = "displayMessages">

<?php 
	foreach ($log as $l){
	echo $l[0]." : ".$l[1]."<br><br>";
}
?>
</div>