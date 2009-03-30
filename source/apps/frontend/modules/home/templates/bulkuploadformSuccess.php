<?php
include_component('home','leftmenu');
include_component('home','messages');
?>
<?php
echo form_tag('home/bulkupload', 'name=indexform multipart=true, method=post');
?>
Select a File: 
<?php
echo input_file_tag('csvfile', array('size'=>30));
echo submit_tag('Upload');
?>

</form>
