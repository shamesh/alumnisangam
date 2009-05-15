<?php
	include_component('home', 'leftmenu');
?>

<div class="page">
	<h3>Statistics : Branch</h3>
	<div class="vspacer20">&nbsp;</div>
	<?php $i=0; $gtotal=0; ?>
	<?php foreach ($branchstats as $branchstat): $i++; ?>
	<div class="<?php if($i%2==0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
		<div class="statColB1"><?php echo $branchstat->getBranch()->getName()." (".$branchstat->getBranch()->getCode().") " ?></div>
			<?php
				$c = new Criteria();
				$c->add(UserPeer::BRANCH_ID, $branchstat->getBrid());
				$currentcount = UserPeer::doCount($c);
				$gtotal += $currentcount;
			?>
		<div class="statColB2"><?php echo link_to($currentcount, 'search/result?usertype=1&branch='.$branchstat->getBranch()->getId(), array('title'=>'Click here to see a list of users from '.$branchstat->getBranch()->getCode())); ?></div>
	</div>
	<?php endforeach; ?>
	<div class="<?php $i++; if($i%2==0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
		<div class="statColB1"><b>Total</b></div>
		<div class="statColB2"><b><?php echo $gtotal; ?></b></div>
	</div>
	<div class="vspacer20">&nbsp;</div>
</div>