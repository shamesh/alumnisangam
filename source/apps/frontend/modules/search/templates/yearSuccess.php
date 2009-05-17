<?php
	include_component('home', 'leftmenu');
?>

<div class="page">
	<h3>Statistics : Year</h3>
	<div class="vspacer20">&nbsp;</div>
	<?php $i=0; $gtotal=0; ?>
	<?php foreach ($yearstats as $yearstat): $i++; ?>
	<div class="<?php if($i%2==0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
		<div class="statColY1"><?php echo $yearstat->getYear(); ?></div>
			<?php
				$c = new Criteria();
				$c->add(UserPeer::GRADUATIONYEAR, $yearstat->getYear());
				$currentcount = UserPeer::doCount($c);
				$gtotal += $currentcount;
			?>
		<div class="statColY2"><?php echo link_to($currentcount, 'search/result?usertype=1&year='.$yearstat->getYear(), array('title'=>'Click here to see a list of users from '.$yearstat->getYear())); ?></div>
	</div>
	<?php endforeach; ?>
	<div class="<?php $i++; if($i%2==0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
		<div class="statColY1"><b>Total</b></div>
		<div class="statColY2"><b><?php echo $gtotal; ?></b></div>
	</div>
	<div class="vspacer20">&nbsp;</div>
</div>