<?php
	include_component('home', 'leftmenu');
	include_component('home', 'messages');
?>
<div class="page">
	<?php if($user): ?>
		<div class="profileimage">
			<?php if($user->getPersonal()->getImage()): ?>
				<img src="<?php echo $user->getPersonal()->getImage(); ?>" width="100px;" height="100px;">
			<?php else: ?>
				<img src="<?php echo sfConfig::get('app_profile_dummyimage') ?>" width="100px;" height="100px;">
			<?php endif; ?> 
		</div>
		<div class="profilename"><?php echo $user->getPersonal()->getSalutation()." ".$user->getFullname(); ?></div>
		<div class="profilename">
			<?php echo $user->getDegree()->getName().", ".$user->getBranch()->getCode()." ".$user->getYear(); ?>
		</div>
		
		<!-- *********************** Email LoR ***************************** -->
		<?php if($user->getIslocked() == sfConfig::get('app_islocked_unclaimed')): ?>
			<div class="centermsg" style="background-color: highlight; color: white; font-weight: bold;">This ID is still unclaimed. Do you know the location of this person ?</div>
			<div style="margin-left: 360px;">
				<form method="post" action="/user/lor.html">
					<input type="hidden" name="type" value="email">
					<input type="hidden" name="for" value="<?php echo $user->getId(); ?>">
					<input type="image" src="/images/premail.png" alt="Post Remark" title="Post Remark - Current Email" style="cursor: pointer; float: left; margin-top: 2px;" >
				</form>
			</div>
		<?php endif; ?>
		
		<!-- ********************** Badges Section ********************* -->
		<div class="vphead">Badges</div>
		<div class="evenRow">
			<form method="post" action="/user/lor.html">
				<input type="hidden" name="type" value="badge">
				<input type="hidden" name="for" value="<?php echo $user->getId(); ?>">
				<input type="image" src="/images/prbadge.png" alt="Post Remark" title="Post Remark - Badge" style="cursor: pointer; float: left; margin-top: 2px;" >
			</form>
		</div>
		<div class="oddRow">
			<div class="centermsg"><?php if($badges): echo $badges; else: echo sfConfig::get('app_profile_blankSection'); endif; ?></div>
		
			<?php $bgremarks = $user->getRemarks(sfConfig::get('app_lor_badge')); 
				foreach ($bgremarks as $bgremark):
			?>
				<div class="smallremark">
					<?php echo $bgremark->getData(); ?>&nbsp;&nbsp;&nbsp;&nbsp; -<b><?php echo $bgremark->getUser()->getFullname(); ?></b>
				</div>		
			<?php endforeach; ?>
		</div>		
		<!-- ***************************** CONTACT SECTION ***************************** -->
		<div class="vphead">Contact</div>
		<?php $col = 0; $dataflag = 0;
			$addresses = $user->getAddress();
			foreach($addresses as $address){
				$dataflag = 1;
				?>
				<div class="<?php $col++; if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
					<div class="vpsubhead"><?php echo "(".sfConfig::get('app_address_'.$address->getType()).")" ?></div>
				</div>
				<div class="<?php $col++; if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
					<div class="vprowdata"><?php echo $address->getAddress().", ".$address->getCity().", ".$address->getState().", ".$address->getCountry()." - ".$address->getPostalcode() ?></div>
				</div>
				<div class="<?php $col++; if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
					<div class="vprowdata1"><?php echo "<b>Ph : </b>".$address->getPhone1().", ".$address->getPhone2() ?></div>
					<div class="vprowdata2"><?php echo "<b>Cell : </b>".$address->getCellphone() ?></div>
					<?php if($address->getType() === '1'): ?>
						<div class="vprowdata3"><?php echo "<b>Fax : </b>".$address->getFax() ?></div>
					<?php endif; ?>
				</div>
				<?php
			}
		?>
		<?php if(!$dataflag): $col++;?>
			<div class="<?php if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
				<div class="centermsg"><?php echo sfConfig::get('app_profile_blankSection') ?></div>
			</div>
		<?php endif; ?>		
		
		<!-- ***************************** PROFESSIONAL SECTION ***************************** -->
		<div class="vphead">Professional</div>
		<div class="evenRow">
			<form method="post" action="/user/lor.html">
				<input type="hidden" name="type" value="employer">
				<input type="hidden" name="for" value="<?php echo $user->getId(); ?>">
				<input type="image" src="/images/premployer.png" alt="Post Remark" title="Post Remark - Current Employer" style="cursor: pointer; float: left;" >
			</form>
			<form method="post" action="/user/lor.html">
				<input type="hidden" name="type" value="position">
				<input type="hidden" name="for" value="<?php echo $user->getId(); ?>">
				<input type="image" src="/images/prposition.png" alt="Post Remark" title="Post Remark - Current Position" style="cursor: pointer; float: left; margin-left: 5px;">
			</form>			
		</div>
		<?php $col = 0;
			$dataflag = 0;
			$professionals = $user->getProfessional();
			foreach ($professionals as $professional):
				$profflag = 0;
				if( ($professional->getEmployer() && ($professional->getEmployer() !== sfConfig::get('app_privacy_message')))){
					$profflag += 1;
				}
				if(($professional->getPosition() && ($professional->getPosition() !== sfConfig::get('app_privacy_message'))) ){
					$profflag +=2;
				}
				$proftext = '';
				switch($profflag){
					case 1: $proftext = "At <b>".$professional->getEmployer()."</b>"; $col++; $dataflag=1; break;
					case 2: $proftext = "<b>".$professional->getPosition()."</b>"; $col++; $dataflag=1; break;
					case 3: $proftext = "<b>".$professional->getPosition()."</b> at <b>".$professional->getEmployer()."</b>"; $col++; $dataflag=1; break;
				}
		?>
				<div class="<?php if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
					<div class="vprowdata"><?php if($proftext): echo $proftext; endif; ?><?php if($professional->getFromdate()): echo " (".date('jS M, y',$professional->getFromdate())." to ".date('jS M, y',$professional->getTodate()).")"; endif; ?></div>
				</div>
					<?php
			endforeach;
		?>
		<?php $col++; ?>
			<?php
				$eremarks = $user->getRemarks(sfConfig::get('app_lor_employer'));
				foreach ($eremarks as $eremark):
			?>
			
			<div class="<?php if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
				<div class="smallremark">
					<?php echo "<i>Current Employer</i> : ".$eremark->getData() ?>&nbsp;&nbsp;&nbsp;&nbsp;- <b><?php echo $eremark->getUser()->getFullname() ?></b>
				</div>
			</div>
			<?php endforeach; ?>
			<?php
				$premarks = $user->getRemarks(sfConfig::get('app_lor_position'));
				foreach ($premarks as $premark):
			?>
			<div class="<?php if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
				<div class="smallremark">
					<?php echo "<i>Current Position</i> : ".$premark->getData() ?>&nbsp;&nbsp;&nbsp;&nbsp;- <b><?php echo $premark->getUser()->getFullname() ?></b>
				</div>
			<?php endforeach; ?>			
			</div>
		<?php if(!$dataflag): ?>
			<div class="<?php if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
				<div class="centermsg"><?php echo sfConfig::get('app_profile_blankSection') ?></div>
			</div>
		<?php endif; ?>
		<!-- ***************************** ACADEMIC SECTION ***************************** -->
		<div class="vphead">Academic</div>
		<?php $col = 0; $dataflag = 0;
			$academics = $user->getAcademic();
			foreach ($academics as $academic){
				$col++;
				$dataflag = 1;
				?>
				<div class="<?php if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
				<?php
					echo "<div class=\"vprowdata\"><b>".$academic->getDegree()."</b> (<b><i>".$academic->getDepartment()."</i></b>) from <b>".$academic->getInstitute()."</b> in <b>".$academic->getYear()."</b></div>";
				?>
				</div>
				<?php
			}
		
		?>
		<?php if(!$dataflag): $col++;?>
			<div class="<?php if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
				<div class="centermsg"><?php echo sfConfig::get('app_profile_blankSection') ?></div>
			</div>
		<?php endif; ?>

				
		<!-- ***************************** PERSONAL SECTION ***************************** -->		
		<div class="vphead">Personal</div>
		<?php 
			$personal = $user->getPersonal();
			if($personal){
				$persarray = array( array("Maiden Name", "IT-BHU Name", "Gender", "DoB", "LinkedIn", "Website", "Hobbies", "Marital Status"),
								array("getMaidenname", "getItbhuname", "getGender", "getDob", "getLinkedin", "getWebsite", "getHobbies", "getMaritalstatus")
							);
			}
			$family = $user->getFamily();
			if($family){
				$famarray = array( array("Date of Marriage", "Spouse Name", "Spouse Employer", "Spouse Title", "Children"),
								array("getDom", "getSpousename", "getSpouseemployer", "getSpousetitle", "getChildren")
							);
			}
		?>
		<?php $col = 0; $dataflag = 0;
			for($i=0; $persarray[0][$i]; $i++):
				if( ($personal->$persarray[1][$i]()) && ($personal->$persarray[1][$i]() !== sfConfig::get('app_privacy_message')) ):
					$col++;
					$dataflag = 1;
					?>
					<div class="<?php if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
						<div class="vprowdataleft"><div class="vprowdatalefttext"><?php echo $persarray[0][$i] ?> :</div></div>
						<div class="vprowdataright"><?php if($persarray[1][$i] === "getDob"): echo date('jS M Y', $personal->$persarray[1][$i]()); else: echo $personal->$persarray[1][$i](); endif; ?></div>
						<?php if($persarray[1][$i] === 'getLinkedin'): ?>
							<form method="post" action="/user/lor.html">
								<input type="hidden" name="type" value="linkedin">
								<input type="hidden" name="for" value="<?php echo $user->getId(); ?>">
								<input type="image" src="/images/lor.png" alt="LoR" title="Post Remark - LinkedIn" style="cursor: pointer; float: left; margin-left: 5px;">
							</form>	
							<?php $liremarks = $user->getRemarks(sfConfig::get('app_lor_linkedin')); 
								foreach ($liremarks as $liremark):
							?>
								<div class="smallremark">
									<?php echo $liremark->getData(); ?>&nbsp;&nbsp;&nbsp;&nbsp; -<b><?php echo $liremark->getUser()->getFullname(); ?></b>
								</div>		
							<?php endforeach; ?>
							
						<?php endif; ?>
					</div>
					<?php
				endif;
			endfor;
		?>
		<?php 
			for($i=0; $famarray[0][$i]; $i++):
				if( ($family->$famarray[1][$i]()) && ($family->$famarray[1][$i]() !== sfConfig::get('app_privacy_message')) ):
					$col++;
					$dataflag = 1;
					?>
					<div class="<?php if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
						<div class="vprowdataleft"><div class="vprowdatalefttext"><?php echo $famarray[0][$i] ?> :</div></div>
						<div class="vprowdataright"><?php if($famarray[1][$i] === "getDom"): echo date('jS M Y', $family->$famarray[1][$i]()); else: echo $family->$famarray[1][$i](); endif; ?></div>
					</div>
					<?php
				endif;
			endfor;
		?>
		<?php if(!$dataflag): $col++;?>
			<div class="<?php if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
				<div class="centermsg"><?php echo sfConfig::get('app_profile_blankSection') ?></div>
			</div>
		<?php endif; ?>
		<!-- ***************************** MISC SECTION ***************************** -->
		<div class="vphead">Miscellaneous</div>
		<?php $col = 0; ?>
		<?php if($user->getRoll() && ($user->getRoll() !== sfConfig::get('app_privacy_message'))): ?>
			<div class="<?php $col++; if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
				<div class="vprowdataleft"><div class="vprowdatalefttext">Roll No :</div></div>
				<div class="vprowdataright"><?php echo $user->getRoll(); ?></div>
			</div>
		<?php endif; ?>
		<?php if($user->getDegreeId() && ($user->getDegreeId() !== sfConfig::get('app_privacy_message'))): ?>
			<div class="<?php $col++; if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
				<div class="vprowdataleft"><div class="vprowdatalefttext">Degree :</div></div>
				<div class="vprowdataright"><?php echo $user->getDegree()->getName(); ?></div>
			</div>
		<?php endif; ?>	
		<?php if($user->getGraduationyear() && ($user->getGraduationyear() !== sfConfig::get('app_privacy_message'))): ?>
			<div class="<?php $col++; if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
				<div class="vprowdataleft"><div class="vprowdatalefttext">Graduation Year :</div></div>
				<div class="vprowdataright"><?php echo $user->getGraduationyear(); ?></div>
			</div>
		<?php endif; ?>
		<?php if($user->getCurrentlyat() && ($user->getCurrentlyat() !== sfConfig::get('app_privacy_message'))): ?>
			<div class="<?php $col++; if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
				<div class="vprowdataleft"><div class="vprowdatalefttext">Current Location :</div></div>
				<div class="vprowdataright"><?php echo $user->getCurrentlyat(); ?></div>
				<form method="post" action="/user/lor.html">
					<input type="hidden" name="type" value="location">
					<input type="hidden" name="for" value="<?php echo $user->getId(); ?>">
					<input type="image" src="/images/lor.png" alt="LoR" title="Post Remark - Current Location" style="cursor: pointer; float: left; margin-left: 5px;">
				</form>	
				
					<?php $locRemarks = $user->getRemarks(sfConfig::get('app_lor_location')); 
						foreach ($locRemarks as $locremark):
					?>
						<div class="smallremark">
							<?php echo $locremark->getData(); ?>
							 &nbsp;&nbsp;&nbsp;&nbsp;<b>- <?php echo $locremark->getUser()->getFullname(); ?></b>
						</div>
					<?php endforeach; ?>
			</div>
		<?php endif; ?>
		<div class="<?php $col++; if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
			<div class="vprowdataleft"><div class="vprowdatalefttext">Chapters Affiliated :</div></div>
			<div class="vprowdataright">
		<?php $chapters = $user->getChapter();
				foreach ($chapters as $chapter):
					echo $chapter->getName().",";
				endforeach; 
		?>
			</div>
		</div>
		<!-- ************************ General Remarks ********************************** -->
		<div class="vphead">Remarks</div>
		<div class="evenRow">
			<form method="post" action="/user/lor.html">
				<input type="hidden" name="type" value="general">
				<input type="hidden" name="for" value="<?php echo $user->getId(); ?>">
				<input type="image" src="/images/prgeneral.png" alt="Post Remark" title="Post Remark - General" style="cursor: pointer;">
			</form>
		</div>
		<div class="oddRow">
		<?php 
			$remarkflag = 0;
			$remarks = $user->getRemarks(sfConfig::get('app_lor_general'));
			foreach ($remarks as $remark):
				$remarkflag = 1;
		?>
		<?php $col = 0; ?>
			<div class="<?php $col++; if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
				<div class="vprowdataremark">
					<?php echo $remark->getData(); ?>
					 &nbsp;&nbsp;&nbsp;&nbsp;<b>- <?php echo $remark->getUser()->getFullname(); ?></b>
				</div>
			</div>
		<?php
			endforeach;
			if(!$remarkflag){
				echo '<div class="centermsg">'.sfConfig::get('app_profile_blankSection').'</div>';
			}
		?>
		</div>
	<?php else: ?>
		<h3>Profile View</h3>
		<div class="vspacer20">&nbsp;</div>
		<div class="centermsg">Unfortunately, the page you are trying to access doesn't exist.<br> Please update your bookmarks.</div>
	<?php endif; ?>
	<div class="vspacer20">&nbsp;</div>
	<div class="formbuttons"><a href="/search/result.html"><img src="/images/back.png" alt="Back" title="Go back to previous page" style="cursor: pointer;"></a></div>
	<div class="vspacer10">&nbsp;</div>
</div>