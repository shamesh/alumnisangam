<?php
	if($rid):
		echo select_tag('chapter', options_for_select($chapterlist), array('onchange'=>'getsubmit()'));
	else:
		echo "";
	endif; 
?>

