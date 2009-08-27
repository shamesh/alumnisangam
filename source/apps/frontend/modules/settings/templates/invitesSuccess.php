<?php include_component('home', 'leftmenu'); ?>
<?php include_component('home', 'messages'); ?>
<div class="page">
	<h3>Invites</h3>
	<div class="vspacer20">&nbsp;</div>
	<?php if($user): ?>
		<?php if($user->getIsinvited() == 4): ?>
			<div class="oddRow">
				<div class="centermsg">You are invited for Authorizer role.
					<div class="authImages">
						<a href="/settings/acceptauth.html"><img src="/images/accept.png"></a>&nbsp;&nbsp;
						<a href="/settings/rejectauth.html"><img src="/images/reject_small.png"></a>
					</div> 
				</div>
			</div>
		<?php else: ?>
			<div class="oddRow">
				<div class="centermsg">No invitations for your attention.</div>
			</div>
		<?php endif; ?>
	<?php endif; ?>
</div>



