<?php
 include_component('home','leftmenu');
 include_component('home','messages');
?>
<?php if($sf_user->hasCredential('admin')): $admin=1; else: $admin=0; endif; ?>
<div class="page">
		<input type="hidden" id="selectedid" name="selectedid">
		
		<!-- <div class="srtopleft">Search : <b><?php // echo $count; ?></b> Results</div>	-->
		<div class="srtopright"><?php echo select_tag('maxresult', options_for_select($pageoptions, $maxresult), array(
			'include_blank' => true, 'onChange'=>'changepagesize()',
			))?></div>
		<div class="vspacer20">&nbsp;</div>
		<?php if($count): ?>
			<div class="oddRow">
				<div class="srcol1"><?php if ($admin): ?><input type="checkbox" name="checkall" id="checkall" onchange="check('userid[]', this)"><?php else: ?>&nbsp;<?php endif; ?></div>
				<div class="srcol2"><b><?php echo link_to('Name', '/search/result?sort=name') ?></b></div>
				<div class="srcol3"><b><?php echo link_to('Roll', '/search/result?sort=roll') ?></b></div>
				<div class="srcol4"><b><?php echo link_to('Year', '/search/result?sort=year') ?></b></div>
				<div class="srcol5"><b><?php echo link_to('Branch', '/search/result?sort=branch') ?></b></div>
				<div class="srcol6"><b><?php echo link_to('Degree', '/search/result?sort=degree') ?></b></div>
				<div class="srcol7"><b>Chapter(s)</b></div>
				<div class="srcol8"><b><?php echo link_to('Reg', '/search/result?sort=reg') ?></b></div>
				<div class="srcol9"><b><?php echo link_to('Last Login', '/search/result?sort=lastlogin') ?></b></div>
				<div class="srcol10"><b>Action</b></div>
			</div>
			<?php $rt=0; foreach ($pager->getResults() as $rs): $rt++;?>
				<?php 
					$cf = new Criteria();
/*					$cf->add(UserPeer::ID, $rs->getId());
					$cf->addJoin(UserPeer::ID, UserfriendPeer::USER_ID);
					$cf->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
					$cf->add(FriendPeer::USER_ID, $myid);
*/
					$cf->add(UserfriendPeer::USER_ID, $rs->getId());
					$cf->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
					$cf->add(FriendPeer::USER_ID, $myid);
					$frienduser = UserPeer::doSelectOne($cf);
					if($br && ($rs->getBranchflag() == 2) ){
						if(!$frienduser){
							$rt--;
							continue;
						}
					}
					if($yr && ($rs->getGraduationyearflag() == 2)){
						if(!$frienduser){
							$rt--;
							continue;
						}
					}
					if($loc && ($rs->getCurrentlyatflag() == 2)){
						if(!$frienduser){
							$rt--;
							continue;
						}
					} 
				?>
				<div class="<?php if($rt%2==0): echo 'oddRow'; else: echo 'evenRow'; endif; ?>">
					<div class="srcol1"><?php if ($admin): ?>  
											<input type="checkbox" id="<?php echo $rs->getId() ?>" value="<?php echo $rs->getId() ?>" name="userid[]" onclick="checkmechkbx('userid[]')"  >
										<?php else: ?>
											<input type="radio" name="option" id="<?php echo $rs->getId() ?>" onclick="checkmeradio(<?php echo $rs->getId() ?>)">
										<?php endif; ?></div>
					<div class="srcol2"><?php echo link_to($rs->getFullname(), 'search/profile?id='.$rs->getId());?></div>
					<div class="srcol3"><?php echo $rs->getRoll(); ?></div>
					<div class="srcol4"><?php echo $rs->getGraduationyear(); ?></div>
					<div class="srcol5"><?php echo $rs->getBranchcode(); ?></div>
					<div class="srcol6"><?php echo $rs->getDegree()->getName(); ?></div>
					<div class="srcol7"><?php $c = new Criteria();
											  $c->add(UserchapterregionPeer::USER_ID, $rs->getId());
										 	  $ucrs = UserchapterregionPeer::doSelect($c);
										 	  $chapterlist = '';
											  foreach ($ucrs as $ucr){
											  	if(!$chapterlist){
													$chapterlist = $ucr->getChapterregion()->getChapter()->getName(); 
												}else{
													$chapterlist .= ', '.$ucr->getChapterregion()->getChapter()->getName();
												}
											  }
											  echo $chapterlist;?></div>
					<div class="srcol8"><?php if($rs->getIslocked()): echo "No"; else: echo "Yes"; endif; ?></div>
						<?php 	if($rs->getLastlogin()):
									$datetime = date_create($rs->getLastlogin());
									$logindate = date_format($datetime, 'jS M \'y');
								else:
									$logindate = "NA"; 
								endif;  
						?>
					<div class="srcol9"><?php echo $logindate; ?></div>
					<div class="srcol10">
						<a href="/user/lorform/id/<?php echo $rs->getId() ?>.html"><img src="/images/lor.png" alt="lor" title="Location Remark for <?php echo trim($rs->getFullname()) ?>"></a>
						<?php if($rs->getEmail()): ?>
						<a href="/user/composemail/id/<?php echo $rs->getId() ?>.html"><img src="/images/mail.png" alt="mail" title="Send Mail to <?php echo trim($rs->getFullname()) ?>"></a>
						<?php else: ?>
							<img src="/images/mailgray.png" alt="no mail" title="<?php echo trim($rs->getFullname()) ?>have not specified email">
						<?php endif; ?>
						<?php   $c = new Criteria();
								$c->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
								$c->add(UserfriendPeer::USER_ID, $myid);
								$c->add(FriendPeer::USER_ID, $rs->getId());
								$isMyReq = FriendPeer::doSelectOne($c);
								$c = new Criteria();
								$c->addJoin(UserfriendPeer::FRIEND_ID, FriendPeer::ID);
								$c->add(UserfriendPeer::USER_ID, $rs->getId());
								$c->add(FriendPeer::USER_ID, $myid);
								$isOthReq = FriendPeer::doSelectOne($c);
						?>
						<?php if($isMyReq): ?>
							<img src="/images/prvfriendsGray.gif" alt="Mark friend" title="<?php echo "You have already marked ".$rs->getFullname()." as a friend."; ?>">
						<?php else: ?>
							<a href="/friend/add/id/<?php echo $rs->getId() ?>.html"><img src="/images/prvfriends.gif" alt="add friend" title="<?php if($isOthReq): echo trim($rs->getFullname())." have marked you as friend. Click to mark as friend."; else: echo "Mark ".$rs->getFullname()." as a friend."; endif; ?>"></a>
						<?php endif; ?>
						<?php if($admin && (!$rs->getIslocked())): ?>
							<img src="/images/role.png" alt="role" title="Assign Role" style="cursor: pointer;" onclick="javascript: document.getElementById('addrole<?php echo $rs->getId(); ?>').style.display='block'">
						<?php endif; ?>
					</div>
					<div class="addRole" id="addrole<?php echo $rs->getId(); ?>">
						<form method="post" action="/admin/assignrole.html" name="assignrole">
						<div class="addRow" style="margin-top: 10px;">
							<div class="rowData">
								<?php echo select_tag('role', options_for_select($rolelist), array('style'=>'margin-top:-15px;') ) ?> &nbsp;&nbsp;&nbsp;
								<input type="image" src="/images/done.png" alt="done" title="Assign this role">&nbsp;&nbsp;&nbsp;
								<img src="/images/cancel.png" alt="cancel" title="Cancel"  style="cursor: pointer;" onclick="javascript: document.getElementById('addrole<?php echo $rs->getId(); ?>').style.display='none'">
								<input type="hidden" name="assignee" value="<?php echo $rs->getId() ?>">
							</div>
						</div>
						</form>
					</div>
				</div>
			<?php endforeach; ?>
			<div class="vspacer20">&nbsp;</div>
			<div id="pager">
				<?php if ($pager->haveToPaginate()): ?> 
					<?php echo link_to('<img src="/images/first.png"/>', 'search/result?page=1') ?>
					<?php echo link_to('<img src="/images/prev.png"/>', 'search/result?page='.$pager->getPreviousPage()) ?>
					<?php foreach ($pager->getLinks() as $page): ?>
						<b><?php echo link_to_unless($page == $pager->getPage(), $page, 'search/result?page='.$page,'class="pageno"') ?></b>
						<?php echo ($page != $pager->getCurrentMaxLink()) ? '&nbsp;' : '' ?> 
					<?php endforeach; ?>
					<?php echo link_to('<img src="/images/next.png"/>', 'search/result?page='.$pager->getNextPage()) ?>
					<?php echo link_to('<img src="/images/last.png"/>', 'search/result?page='.$pager->getLastPage()) ?>
				<?php endif; ?>
			</div>
		<?php else: ?>
			<div class="centermsg">
				No result(s) found. You searched for <b><?php echo sfConfig::get('app_usertype_'.$usertypeid) ?></b> with following options:
				<center>
				<br>First Name: <?php if($fname): echo "<b>".$fname."</b>"; else: echo '<i>any</i>'; endif; ?>
				<br>Last Name: <?php if($lname): echo "<b>".$lname."</b>"; else: echo '<i>any</i>'; endif; ?>
				<br>Branch: <?php if($br): echo "<b>".BranchPeer::retrieveByPK($br)->getName()."</b>"; else: echo '<i>any</i>'; endif; ?>
				<br>Year: <?php if($yr): echo "<b>".$yr."</b>"; else: echo '<i>any</i>'; endif; ?>
				<br>Chapter: <?php if($chap): echo "<b>".ChapterPeer::retrieveByPK($chap)->getname()."</b>"; else: echo '<i>any</i>'; endif; ?>
				<br>Location: <?php if($loc): echo "<b>".$loc."</b>"; else: echo '<i>any</i>'; endif; ?>
				<br>Country: <?php if($cn): echo "<b>".CountryPeer::retrieveByPK($cn)->getname()."</b>"; else: echo '<i>any</i>'; endif; ?>
				</center>
				</div>
		<?php endif; ?>
	<div class="vspacer20">&nbsp;</div>	
		<div class="centermsg">Note: Number of results may vary from actual statistics due to privacy settings.</div>
	<div class="vspacer10">&nbsp;</div>
</div>


<script type="text/javascript">
/* on click : master check box */
function check(chkbxgrpname, me){
  if (me.checked){
  	checkall(chkbxgrpname);
  }else{
  	uncheckall(chkbxgrpname);
  }
}
/* called by check fn */
function checkall(chkbxgrpname){
	var ch = document.getElementsByName(chkbxgrpname);
	for(var i=0; ch[i]; i++){
		ch[i].checked = true;
	}
}
/* called by check fn */
function uncheckall(chkbxgrpname){
	var ch = document.getElementsByName(chkbxgrpname);
	for(var i=0; ch[i]; i++){
		ch[i].checked = false;
	}
}
/* on click : radio button */
function checkmeradio(id){
	document.getElementById('selectedid').value = id;
}
/* on click : checkbox */
function checkmechkbx(chkbxgrpname)
{
	var ch = document.getElementsByName(chkbxgrpname);
	var flag = 1;
	for(var i=0; ch[i]; i++){
		if(!ch[i].checked){
			flag = 0;
		}
	}
	if(flag){
		document.getElementById('checkall').checked = true;
	}else{
		document.getElementById('checkall').checked = false;
	}
}
/* on change : results per page dropdown */
function changepagesize(){
	var maxresult = document.getElementById('maxresult').value;
	location.href = '/search/result/maxresult/'+maxresult+'.html';
}

</script>