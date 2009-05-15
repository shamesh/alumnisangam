<?php
	include_component('home', 'leftmenu');
?>
<div class="page">
	<h3>Statistics : Branch &amp; Year</h3>
	<div class="vspacer20">&nbsp;</div>
	<?php $i=0; $btotal = array(); $gtotal=0; $hrcount=sfConfig::get('app_headerrepeat_after')-1; ?>
	<?php /* 
	<div class="oddRow">
		<div class="statColTot">&nbsp;</div>
		<?php foreach ($branchstats as $branchstat): ?>
			<div class="statCol">
				<b>
				<?php echo link_to($branchstat->getBranch()->getCode(),'/search/result?usertype=1&branch='.$branchstat->getBranch()->getId()); 
					$btotal[$branchstat->getBrid()] = 0;
				?>
				</b>
			</div>
		<?php endforeach; ?>
		<div class="statColTot"><b>Year Total</b></div>
	</div>
	*/?>
	<?php foreach ($yearstats as $yearstat): $i++; $hrcount++;?>
		<?php if($hrcount%(sfConfig::get('app_headerrepeat_after')) == 0): ?>
			<div class="<?php if($i%2==0): echo 'evenRow'; else: echo 'oddRow'; endif; $i++; ?>">
				<div class="statColTot">&nbsp;</div>
				<?php foreach ($branchstats as $branchstat): ?>
					<div class="statCol">
						<b>
						<?php echo link_to($branchstat->getBranch()->getCode(),'/search/result?usertype=1&branch='.$branchstat->getBranch()->getId(), array('title'=>'Click here to see a list of users from '.$branchstat->getBranch()->getCode())); 
							$btotal[$branchstat->getBrid()] = 0;
						?>
						</b>
					</div>
				<?php endforeach; ?>
				<div class="statColTot"><b>Year Total</b></div>
			</div>
		<?php endif; ?>
		<div class="<?php if($i%2==0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
			<div class="statColTot">
				<b><?php echo link_to($yearstat->getYear(), 'search/result?usertype=1&year='.$yearstat->getYear(), array('title'=> 'Click here to see a list of users from year '.$yearstat->getYear())); ?></b>
			</div>
			<?php $ytotal = 0; 
				foreach ($branchstats as $branchstat): ?>
				<?php
					$c = new Criteria();
					$c->add(UserPeer::BRANCH_ID, $branchstat->getBrid());
					$c->add(UserPeer::GRADUATIONYEAR, $yearstat->getYear());
				?>
				<div class="statCol">
					<?php 
						$yb = UserPeer::doCount($c); 
						$ytotal+= $yb; 
						$btotal[$branchstat->getBrid()] += $yb; 
						$gtotal+=$yb;
						echo link_to($yb, 'search/result?usertype=1&branch='.$branchstat->getBrid().'&year='.$yearstat->getYear(), array('title'=>'Click here to see a list of users from '.$branchstat->getBranch()->getCode().' '.$yearstat->getYear().' batch'));	
					?>
				</div>
			<?php endforeach; ?>
			<div class="statColTot">
				<b><?php echo link_to($ytotal, 'search/result?usertype=1&year='.$yearstat->getYear(), array('title'=> 'Click here to see a list of users from year '.$yearstat->getYear())); ?></b>
			</div>
		</div>
	<?php endforeach; ?>
	<div class="<?php $i++; if($i%2==0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
		<div class="statColTot"><b>Branch Total</b></div>
		<?php foreach ($branchstats as $branchstat): ?>
			<div class="statCol">
				<b><?php echo link_to($btotal[$branchstat->getBrid()],'/search/result?usertype=1&branch='.$branchstat->getBranch()->getId(), array('title'=>'Click here to see a list of users from '.$branchstat->getBranch()->getCode().' branch'));?></b>
			</div>
		<?php endforeach; ?>
		<div class="statColGTot"><?php echo "(<b>Grand Total : ".$gtotal."</b>) "; ?></div>
	</div>
	<div class="vspacer20">&nbsp;</div>

</div>