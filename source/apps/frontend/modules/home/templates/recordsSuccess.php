<?php include_component('home','leftmenu'); ?>
<div class="page">
	<h3><?php echo $degreename." ".$branchname.", ".$year." Batch" ?></h3>
	<?php 	
	if($regusers):
	?>
		<div style="float:left; padding-left: 225px; font-weight: bold; padding-top: 15px;">
			<div class="rsleft">Roll #</div>
			<div class="rsmiddle">Name</div>
		</div>
		<?php 
		$i=1;	
		foreach($regusers as $reguser):
			if($i%2 == 0){
				$row = "evenRow";	
			}else{
				$row = "oddRow";
			}
			$i++;
		?>
			<div class="<?php echo $row;?>">
				<div style="float:left; padding-left: 225px;">
					<div class="rsleft"><?php echo $reguser->getRoll(); ?></div>
					<div class="rsmiddle"><?php echo $reguser->getFullname(); ?></div>
					<div class="rsright"><a href="/home/getmyaccount/id/<?php echo $reguser->getId()?>.html"><input type="image" src="/images/thisisme.png"></a></div>
				</div>
			</div>
	    <?php
		endforeach;
		?>
		<div class="formbuttons"><a href="/home/getmyaccount/newuser/1.html"><input type="image" src="/images/imnothere.png"></a></div>
	<?php 
	else:
	?>
		<div class="vspacer20">&nbsp;</div>
		<div class="formbuttons"><font color="red"><b>Sorry!! No matching records found</b></font></div>
		<div class="vspacer20">&nbsp;</div>
		<div class="formbuttons"><a href="/home/getmyaccount/newuser/1.html"><input type="image" src="/images/imnothere.png"></a></div>
	<?php
	endif; 
	?>
</div>
