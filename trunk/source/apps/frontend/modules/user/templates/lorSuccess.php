<?php
	include_component('home', 'leftmenu');
?>

<div class="page">
	<h3>Remarks</h3>
	<div class="vspacer20">&nbsp;</div>
	<div class="centermsg">
		Please indicate a remark on the 
		<b><?php echo sfConfig::get('app_lortext_'.$type); ?></b>
		of <b><?php echo $foruser->getFullname(); ?></b> of <?php echo $foruser->getDegree()->getName().", ".$foruser->getBranch()->getCode()." ".$foruser->getYear()." batch." ?>
	</div>
	<div class="vspacer20">&nbsp;</div>
	<form method="post" action="/user/lorsubmit.html">
		<div class="oddRow">
			<input type="hidden" name="type" value="<?php echo $type ?>">
			<input type="hidden" name="toid" value="<?php echo $toid ?>">
			<div style="width: 400px; float: left; text-align: right; padding-top: 4px;">
				<?php echo sfConfig::get('app_lortext_'.$type)." : "; ?>
			</div>
			<div style="width: 250px; float: left; margin-left: 10px;"><input type="text" width="30" name="lorvalue"></div>
		</div>
		<div class="vspacer20">&nbsp;</div>
		<div class="formbuttons">
			<input type="image" src="/images/submit.png" alt="submit" title="Submit">
			<a href="/search/profile/id/<?php echo $toid ?>.html">
				<img src="/images/back.png" alt="back" title="Back">
			</a>
		</div>
		<div class="vspacer20">&nbsp;</div>	
		
	</form>
</div>