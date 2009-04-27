<?php
	include_component('home', 'leftmenu');
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
		<!-- ***************************** PROFESSIONAL SECTION ***************************** -->
		<div class="vphead">Professional</div>
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
					<div class="vprowdata"><?php if($proftext): echo $proftext; endif; ?><?php if($professional->getFrom()): echo " (".date('jS M, y',$professional->getFrom())." to ".date('jS M, y',$professional->getTo()).")"; endif; ?></div>
				</div>
					<?php
			endforeach;
		?>
		<?php if(!$dataflag): $col++;?>
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
			</div>
		<?php endif; ?>
		<div class="<?php $col++; if($col%2==0): echo "evenRow"; else: echo "oddRow"; endif; ?>">
			<div class="vprowdataleft"><div class="vprowdatalefttext">Chapters Affiliated :</div></div>
		<?php $chapters = $user->getChapter();
				foreach ($chapters as $chapter):
		?>
					<div class="vprowdataright"><?php echo $chapter->getName().","; ?></div>
		<?php endforeach; ?>
		</div>
	<?php else: ?>
		<h3>Profile View</h3>
		<div class="vspacer20">&nbsp;</div>
		<div class="centermsg">Unfortunately, the page you are trying to access doesn't exist.<br> Please update your bookmarks.</div>
	<?php endif; ?>
	<div class="vspacer20">&nbsp;</div>
	<div class="formbuttons"><img src="/images/back.png" alt="Back" title="Go back to previous page" onclick="javascript:history.back(2)" style="cursor: pointer;"></div>
	<div class="vspacer10">&nbsp;</div>
</div>