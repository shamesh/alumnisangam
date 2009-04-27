<?php include_component('home','leftmenu'); ?>
<?php
// auto-generated by sfPropelCrud
// date: 2009/02/10 08:16:08
?>
<div class="page">
	<div class="profileimage">
		<?php if($personal->getImage()): ?>
				<img src="<?php echo $personal->getImage(); ?>" width="100px;" height="100px;">
		<?php else: ?>
				<img src="<?php echo sfConfig::get('app_profile_dummyimage') ?>" width="100px;" height="100px;">
		<?php endif; ?> 
	</div>
	<div class="editbutton">
		<a href='/personal/edit/id/<?php echo $personal->getId() ?>.html'>Edit</a>
		
	</div>
	<div class="profilename">
		<?php echo $personal->getSalutation().' '.$personal->getFirstname().' '.$personal->getMiddlename().' '.$personal->getLastname() ?>
	</div>
	
	<div class="oddRow">
		<div class="rowdataleft"><div class="rowdatalefttext">Maiden Name :</div></div>
		<div class="rowdatamiddle"><?php echo $personal->getMaidenname() ?></div>
		<div class="rowdataright"><img title="<?php echo sfConfig::get('app_privacytitle_'.$personal->getMaidennameflag()) ?>" src="/images/<?php echo sfConfig::get('app_privacyicon_'.$personal->getMaidennameflag()) ?>"></div>
	</div>
	<div class="evenRow">
		<div class="rowdataleft"><div class="rowdatalefttext">IT-BHU Name :</div></div>
		<div class="rowdatamiddle"><?php echo $personal->getItbhuname() ?></div>
		<div class="rowdataright"><img title="<?php echo sfConfig::get('app_privacytitle_'.$personal->getItbhunameflag()) ?>" src="/images/<?php echo sfConfig::get('app_privacyicon_'.$personal->getItbhunameflag()) ?>"></div>
	</div>
	<div class="oddRow">
		<div class="rowdataleft"><div class="rowdatalefttext">Gender :</div></div>
		<div class="rowdatamiddle"><?php echo $personal->getGender() ?></div>
		<div class="rowdataright"><img title="<?php echo sfConfig::get('app_privacytitle_'.$personal->getGenderflag()) ?>" src="/images/<?php echo sfConfig::get('app_privacyicon_'.$personal->getGenderflag()) ?>"></div>
	</div>
	<div class="evenRow">
		<div class="rowdataleft"><div class="rowdatalefttext">Birthday :</div></div>
		<div class="rowdatamiddle"><?php echo $personal->getDob() ?></div>
		<div class="rowdataright"><img title="<?php echo sfConfig::get('app_privacytitle_'.$personal->getDobflag()) ?>" src="/images/<?php echo sfConfig::get('app_privacyicon_'.$personal->getDobflag()) ?>"></div>
	</div>
	<div class="oddRow">
		<div class="rowdataleft"><div class="rowdatalefttext">Marital Status :</div></div>
		<div class="rowdatamiddle"><?php echo $personal->getMaritalstatus() ?></div>
		<div class="rowdataright"><img title="<?php echo sfConfig::get('app_privacytitle_'.$personal->getMaritalstatusflag()) ?>" src="/images/<?php echo sfConfig::get('app_privacyicon_'.$personal->getMaritalstatusflag()) ?>"></div>
	</div>
	<div class="evenRow">
		<div class="rowdataleft"><div class="rowdatalefttext">Email :</div></div>
		<div class="rowdatamiddle"><?php echo $personal->getEmail() ?></div>
		<div class="rowdataright"><img title="<?php echo sfConfig::get('app_privacytitle_'.$personal->getEmailflag()) ?>" src="/images/<?php echo sfConfig::get('app_privacyicon_'.$personal->getEmailflag()) ?>"></div>
	</div>
	<div class="oddRow">
		<div class="rowdataleft"><div class="rowdatalefttext">Website :</div></div>
		<div class="rowdatamiddle"><?php echo $personal->getWebsite() ?></div>
		<div class="rowdataright"><img title="<?php echo sfConfig::get('app_privacytitle_'.$personal->getWebsiteflag()) ?>" src="/images/<?php echo sfConfig::get('app_privacyicon_'.$personal->getWebsiteflag()) ?>"></div>
	</div>
	<div class="evenRow">
		<div class="rowdataleft"><div class="rowdatalefttext">Linked In :</div></div>
		<div class="rowdatamiddle"><?php echo $personal->getLinkedin() ?></div>
		<div class="rowdataright"><img title="<?php echo sfConfig::get('app_privacytitle_'.$personal->getLinkedinflag()) ?>" src="/images/<?php echo sfConfig::get('app_privacyicon_'.$personal->getLinkedinflag()) ?>"></div>
	</div>
	
</div>

<div class="vspacer20">&nbsp;</div>
<?php if($lors): ?>
<div class="oddRow">
	<div class="lorhead">Did you changed your Linked In address ???</div>
	<div class="lorrejectall"><?php echo link_to('<img src="/images/rejectall.gif">', '/personal/lorrejectall') ?></div>
		<?php $temp=0;
		foreach($lors as $lor): ?>
			<?php if($temp == 0): ?>
				<div class="lorrow">
			<?php else: ?>
				<div class="lorrow1">
			<?php endif; ?> 
					<div class="smallimage">
							<?php if($lor->getPersonal()->getImage()): ?>
								<img src="<?php echo $lor->getPersonal()->getImage(); ?>" width="35px;" height="35px;">
							<?php else: ?>
								<img src="/uploads/profilepic/userDummy.jpg" width="35px;" height="35px;">
							<?php endif; ?> 
					</div>	
					<div class="lormsg1">
						<?php echo $lor->getPersonal()->getFirstname(); ?>
					</div>
					<div class="lormsg2">
						says your Linked In profile is at :
					</div>
					<div class="loraccept">
						<?php echo link_to('Accept', '/personal/loraccept?lorid='.$lor->getId()) ?>
					</div>
					<div class="lormsg3">
						<?php echo $lor->getData() ?>
					</div>
					<div class="lorreject">
						<?php echo link_to('Reject', '/personal/lorreject?lorid='.$lor->getId()) ?>
					</div>
				</div>
	<?php $temp++;
	endforeach; ?>
</div>
<?php endif; ?>
<div class="vspacer20">&nbsp;</div>
<?php if($glors): ?>
<div class="oddRow">
	<div class="lorhead">Remarks </div>
	<div class="lorrejectall"><?php echo link_to('<img src="/images/rejectall.gif">', '/personal/lorrejectall?a=g') ?></div>
		<?php $temp = 0; 
		foreach($glors as $lor): ?>
			<?php if($temp ==0): ?>
				<div class="lorrow">
			<?php else: ?>
				<div class="lorrow1">
			<?php endif; ?> 
					<div class="smallimage">
							<?php if($lor->getPersonal()->getImage()): ?>
								<img src="<?php echo $lor->getPersonal()->getImage(); ?>" width="35px;" height="35px;">
							<?php else: ?>
								<img src="<?php echo sfConfig::get('app_profile_dummyimage') ?>" width="35px;" height="35px;">
							<?php endif; ?> 
					</div>	
					<div class="lormsg1">
						<?php echo $lor->getPersonal()->getFirstname(); ?>
					</div>
					<div class="lormsg2">
						says :
					</div>
					<div class="lorreject">
						<?php echo link_to('Reject', '/personal/lorreject?a=g&lorid='.$lor->getId()) ?>
					</div>
					<div class="lormsg3">
						<?php echo $lor->getData() ?>
					</div>
				</div>
	<?php $temp++; 
	endforeach; ?>
</div>
<?php endif; ?>
