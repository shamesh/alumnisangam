<?php include_component('home','leftmenu'); ?>
<?php 
	if($sf_user->hasCredential('admin')){
		$pr = $personal;
	}elseif($sf_user->hasCredential('auth')){
		$pr = $personalca;
	}elseif($sf_user->hasCredential('masterauth')){
		$pr = $personalma;
	}
?>	
<div class="page">
	<?php if($type !== 'new'): ?>
		<h3>Claimed profiles</h3>
	<?php else: ?>
		<h3>New Registrations</h3>
	<?php endif; ?>
	<div class="evenRow">
	<?php if ($sf_flash->has('newuseraction')): ?>
			<div id="loginerrorMessages">
				<div id="message"><img src="/images/iconWarning.gif"/><?php echo $sf_flash->get('newuseraction')?></div>
			</div>
	<?php endif; ?>
	</div>
<?php if($pr || $personaloa): ?>
	<?php echo form_tag('auth/managenewuser', array('name'=>'mnuser')); ?>
	<input type="hidden" name="ids" id="ids" value="">
	<input type="hidden" name="action1" id="action1" value="">
	<input type="hidden" name="from" id="from" value="pending">
	
		<div class="oddRow">
			<div class="appcol1">&nbsp;</div>
			<div class="appcol2"><b>Username</b></div>
			<div class="appcol3"><b>Name</b></div>
			<div class="appcol4"><b>Roll No</b></div>
			<div class="appcol5"><b>Enrolment No</b></div>
			<div class="appcol6"><b>Branch</b></div>
			<div class="appcol7"><b>Degree</b></div>
			<div class="appcol8">&nbsp;</div>
		</div>
		<?php $ii = 1;
		foreach($pr as $pers): 
			$ii++;
		?>
		<div class="<?php if($ii%2==0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
			<div class="appcol1"><input type="checkbox" name="<?php echo $pers->getUserId(); ?>" id="<?php echo $pers->getUserId(); ?>" ></div>
			<div class="appcol2"><?php echo $pers->getUser()->getUsername(); ?></div>
			<div class="appcol3"><?php echo $pers->getUser()->getFullname(); ?></div>
			<div class="appcol4"><?php echo $pers->getUser()->getRoll(); ?></div>
			<div class="appcol5"><?php echo $pers->getUser()->getEnrolment(); ?></div>
			<div class="appcol6">
				<?php if($pers->getUser()->getBranch()):?>
					<?php echo $pers->getUser()->getBranch()->getCode(); ?>
				<?php else: echo "&nbsp;" ?>
				<?php endif; ?>	
			</div>			
			<div class="appcol7">
				<?php if($pers->getUser()->getDegree()): ?>
					<?php echo $pers->getUser()->getDegree()->getName(); ?>
				<?php else: echo "&nbsp;" ?>
				<?php endif; ?>
			</div>
			<div class="appcol8">
				<font color="#0000FF" style="cursor: pointer">
					<span id="info<?php echo $ii; ?>" onclick="showClaimDetails('claimdetail<?php echo $ii ?>', 'info<?php echo $ii; ?>' )">Show Details</span>
				</font>
			</div>
		
			<div class="claimdetail" id="claimdetail<?php echo $ii; ?>">
				<?php if($pers->getUser()->getClaiminfo()): 
							$claimdata = $pers->getUser()->getClaiminfo();
				?>
						<div class="detRow">
							<div class="formleftcol">
								<div class="formleftcoltext">Email :</div>
							</div>
							<div class="formrightcol"><?php echo $claimdata->getUser()->getEmail() ?></div>
						</div>
						<div class="detRow">
							<div class="formleftcol">
								<div class="formleftcoltext">Roll :</div>
							</div>
							<div class="formrightcol"><?php echo $claimdata->getRoll() ?></div>
						</div>
						<div class="detRow">
							<div class="formleftcol">
								<div class="formleftcoltext">Hawa :</div>
							</div>
							<div class="formrightcol"><?php echo $claimdata->getHawa() ?></div>
						</div>
						<div class="detRow">
							<div class="formleftcol">
								<div class="formleftcoltext">City :</div>
							</div>
							<div class="formrightcol"><?php echo $claimdata->getCity() ?></div>
						</div>
						<div class="detRow">
							<div class="formleftcol">
								<div class="formleftcoltext">HoD :</div>
							</div>
							<div class="formrightcol"><?php echo $claimdata->getHod() ?></div>
						</div>
						<div class="detRow">
							<div class="formleftcol">
								<div class="formleftcoltext">Director :</div>
							</div>
							<div class="formrightcol"><?php echo $claimdata->getDirector() ?></div>
						</div>
						<div class="detRow">
							<div class="formleftcol">
								<div class="formleftcoltext">Favourite Teacher :</div>
							</div>
							<div class="formrightcol"><?php echo $claimdata->getTeacher() ?></div>
						</div>
						<div class="detRow">
							<div class="formleftcol">
								<div class="formleftcoltext">Favourite Lanka Shop :</div>
							</div>
							<div class="formrightcol"><?php echo $claimdata->getLankashop() ?></div>
						</div>
						<div class="detRow">
							<div class="formleftcol">
								<div class="formleftcoltext">Other :</div>
							</div>
							<div class="formrightcol"><?php echo $claimdata->getOther() ?></div>
						</div>
				<?php endif; ?>
			</div>
		</div>
		<?php endforeach; ?>
				
		<?php if($sf_user->hasCredential('auth') && $personaloa): ?>
			<?php foreach($personaloa as $pers): 
					$ii++;
			?>
				<div class="<?php if($ii%2==0): echo 'evenRow'; else: echo 'oddRow'; endif; ?>">
					<div class="appcol1"><input type="checkbox" name="<?php echo $pers->getUserId(); ?>" id="<?php echo $pers->getUserId(); ?>" ></div>
					<div class="appcol2"><?php echo $pers->getUser()->getUsername(); ?></div>
					<div class="appcol3"><?php echo $pers->getUser()->getFullname(); ?></div>
					<div class="appcol4"><?php echo $pers->getUser()->getRoll(); ?></div>
					<div class="appcol5"><?php echo $pers->getUser()->getEnrolment(); ?></div>
					<div class="appcol6">
						<?php if($pers->getUser()->getBranch()):?>
							<?php echo $pers->getUser()->getBranch()->getCode(); ?>
						<?php else: echo "&nbsp;" ?>
						<?php endif; ?>
					</div>					
					<div class="appcol7">
						<?php if($pers->getUser()->getDegree()): ?>
							<?php echo $pers->getUser()->getDegree()->getName(); ?>
						<?php else: echo "&nbsp;" ?>
						<?php endif;  ?>
					</div>
					<div class="appcol8">
						<font color="#0000FF" style="cursor: pointer">
						<span id="info<?php echo $ii; ?>" onmouseover="showClaimDetails('claimdetail<?php echo $ii ?>', 'info<?php echo $ii; ?>')" >Show Details</span>
						</font>
					</div>
				
					<div class="claimdetail" id="claimdetail<?php echo $ii; ?>">
						<?php if($pers->getUser()->getClaiminfo()): 
							$claimdata = $pers->getUser()->getClaiminfo();
						?>
							<div class="detRow">
								<div class="formleftcol">
									<div class="formleftcoltext">Roll :</div>
								</div>
								<div class="formrightcol"><?php echo $claimdata->getRoll() ?></div>
							</div>
							<div class="detRow">
								<div class="formleftcol">
									<div class="formleftcoltext">Hawa :</div>
								</div>
								<div class="formrightcol"><?php echo $claimdata->getHawa() ?></div>
							</div>
							<div class="detRow">
								<div class="formleftcol">
									<div class="formleftcoltext">City :</div>
								</div>
								<div class="formrightcol"><?php echo $claimdata->getCity() ?></div>
							</div>
							<div class="detRow">
								<div class="formleftcol">
									<div class="formleftcoltext">HoD :</div>
								</div>
								<div class="formrightcol"><?php echo $claimdata->getHod() ?></div>
							</div>
							<div class="detRow">
								<div class="formleftcol">
									<div class="formleftcoltext">Director :</div>
								</div>
								<div class="formrightcol"><?php echo $claimdata->getDirector() ?></div>
							</div>
							<div class="detRow">
								<div class="formleftcol">
									<div class="formleftcoltext">Favourite Teacher :</div>
								</div>
								<div class="formrightcol"><?php echo $claimdata->getTeacher() ?></div>
							</div>
							<div class="detRow">
								<div class="formleftcol">
									<div class="formleftcoltext">Favourite Lanka Shop :</div>
								</div>
								<div class="formrightcol"><?php echo $claimdata->getLankashop() ?></div>
							</div>
							<div class="detRow">
								<div class="formleftcol">
									<div class="formleftcoltext">Other :</div>
								</div>
								<div class="formrightcol"><?php echo $claimdata->getOther() ?></div>
							</div>
						<?php endif; ?>
					</div>			
			</div>	
		<?php endforeach; ?>
		<?php endif ?>	
</form>
<div class="vspacer20">&nbsp;</div>
<div class="formbuttons">
	<input type="image" src="/images/approve.png" name="approve" onclick="approvefn()" value="Approve" >
	&nbsp;&nbsp;
	<input type="image" src="/images/reject.png" name="reject" onclick="rejectfn()" value="Reject" >
</div>
<div class="vspacer20">&nbsp;</div>
<?php else: ?>
	<div class="centermsg">No more users waiting for your approval !!</div>
<?php endif; ?>
</div>
<script type="text/javascript">
	function approvefn(){
		mycheck();
		document.getElementById('action1').value = "approve";
		document.mnuser.submit();
	}
	
	function rejectfn(){
		mycheck();
		document.getElementById('action1').value = "reject";
		document.mnuser.submit();
	}
	function mycheck(){
		//document.getElementById('ids').value += id+',';
		document.getElementById('ids').value = '';
		var i=0;
		while(document.mnuser.elements[i])
		{
			var curElement = document.mnuser.elements[i];
			if((curElement.type == "checkbox") && (curElement.checked == true))
			{
				document.getElementById('ids').value += curElement.id+', ';
			}
			i++;
		} 
	}
	function showClaimDetails(detail, info){
		if(document.getElementById(info).innerHTML == "Show Details"){
			document.getElementById(detail).style.display = "block";
			document.getElementById(info).innerHTML = "Hide Details";
		}else if(document.getElementById(info).innerHTML == "Hide Details"){
			document.getElementById(detail).style.display = "none";
			document.getElementById(info).innerHTML = "Show Details";	
		}
	}
/*	function hideClaimDetails(detail){
		document.getElementById(detail).style.display = "none";
	}
	*/
</script>