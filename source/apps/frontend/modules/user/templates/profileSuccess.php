<?php include_component('home','leftmenu'); ?>
<?php /*
	for($i=0; $pk[$i] != 'end'; $i++){
		if($pk[$i] == 'head'): 
?>
			<label><b><?php echo $pv[$i] ?></b></label>
			<table border="1" style="margin-bottom: 15px;" width="60%">			
<?php
		elseif($pk[$i] == 'tail'):
?>
			</table>
<?php
		elseif($pv[$i] && $pv[$i]!='#'):
			echo "<tr> <th width=50%>".$pk[$i]."</th><td>".$pv[$i]."</td> </tr>";
			
		elseif($pv[$i] == '#'):
			echo "<tr> <th width=50%>".$pk[$i]."</th> <td></td> </tr>";
			
		endif;
	}

*/ ?>
<label><b>Personal Details</b></label>
<table border="1" style="margin-bottom: 15px;" width="60%">
<?php 

	for($i=0; $profilekeysPers[$i]!='tail'; $i++){
		if($pvPr[$i] && $pvPr[$i]!='#'):
			echo "<tr> <th width=50%>".$profilekeysPers[$i]."</th><td>".$pvPr[$i]."</td> </tr>";
			
		elseif($pvPr[$i] == '#'):
			echo "<tr> <th width=50%>".$profilekeysPers[$i]."</th> <td></td> </tr>";
			
		endif;
	}
?>
</table>