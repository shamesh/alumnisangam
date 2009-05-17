<?php include_component('home','leftmenu'); ?>
<?php include_component('home', 'messages'); ?>

<?php echo form_tag('user/sendmail')?>
<input type="hidden" id="toid" name="toid" value=<?php echo $toid ?>>

<div class="page">
	<h3>Compose Mail</h3>
	<div class="vspacer20">&nbsp;</div>
	<div class="evenRow">
		<div class="mailleftcol"><div class="mailleftcoltext">To :</div></div>
		<div class="mailrightcol">
			<?php 
				if($toid){
					echo $user->getFullname();
					echo "<input type='hidden' name='type' value='one'>";
				}else{
					echo "Send mail to ".$count." Users"; 
					echo "<input type='hidden' name='type' value='bulk'>";
				}
			?>
		</div>
	</div>
	<div class="evenRow">
		<div class="mailleftcol"><div class="mailleftcoltext">Subject :</div></div>
		<div class="mailrightcol"><input type="text" name="subject" style="width: 450px"></div>
	</div>
	<div class="evenRow">
		<div class="mailleftcol"><div class="mailleftcoltext">Body :</div></div>
		<div class="mailrightcol"><textarea rows="15" style="width: 450px" name="mailbody"></textarea></div>
	</div>
	<div class="vspacer20">&nbsp;</div>
	<div class="formbuttons"><input type="image" alt="Send" src="/images/send.png"></div>
	<div class="vspacer10">&nbsp;</div>
</div>
</form>