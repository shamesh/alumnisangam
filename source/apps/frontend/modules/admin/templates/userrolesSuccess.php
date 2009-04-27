<?php
	include_component('home', leftmenu);
	include_component('home', 'messages');
?>

<div class="page">
	<h3><?php echo sfConfig::get('app_rolename_'.$type) ?></h3>
	<div class="vspacer20">&nbsp;</div>
	<?php $i=0; 
		foreach ($userroles as $userrole): 
		$i++; ?>
			<div class="<?php if($i%2 == 0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
				<div class="urcol1"><?php echo $userrole->getUser()->getUsername(); ?></div>
				<div class="urcol2"><?php echo link_to($userrole->getUser()->getFullname(), '/search/profile?id='.$userrole->getUserId()); ?></div>
				<div class="urcol3"><?php echo $userrole->getUser()->getGraduationyear(); ?></div>
				<div class="urcol4"><a href="/admin/revokerole/type/<?php echo $type ?>/id/<?php echo $userrole->getUserId() ?>.html"><img src="/images/revoke.png" alt="Revoke"></a></div>
			</div>
	<?php endforeach; ?>
</div>