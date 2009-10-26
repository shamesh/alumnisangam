
<?php echo form_tag('user/sendinvite','name=indexform multipart=true, method=post')?>
<?php include_component('home','leftmenu'); ?>
<?php include_component('home','messages'); ?>
<div class="page">
<div class="centermsg">
<?php  echo "Invite fellow alumnus to join" ?>
<br><br>

<?php echo "Use this form to invite fellow alumnus to join ITBHUGlobal.org. Please provide information about the alumnus you wish to invite." ?>
<br><br>
</div>
<input type="hidden" id="userid" name="userid" value=<?php echo $userid ?>>
<input type="hidden" id="toemail" name="toemail" value=<?php echo $email?>>
<input type="hidden" id="subject" name="subject" value="Invite to be friend">
<?php echo input_hidden_tag('id',$personal->getId());?>
</div>
<table>
	<tr>
		<td>Invitee Email&nbsp;<span style="color: rgb(255, 0, 0);"><strong>*</strong></span>&nbsp;:</td>
		<td><input id="emailid" type="text" size="30" name="emailid" value="<?php echo $senderemail?>"></td>
	</tr>
	<tr>
		<td>Invitee Name&nbsp;<span style="color: rgb(255, 0, 0);"><strong>*</strong></span>&nbsp;:</td>
		<td><input  id="emailsender" type="text" size="30" name="emailsender" value="<?php echo $fullname?>"></td>
	</tr>
	<tr>
		<td valign="top">Message :</td>
		<td><textarea cols="59" rows="15" name="message" id="message"  >
 </textarea></td>
	</tr>
</table>

	<div class="formbuttons">
			<input type="image" src="/images/submit.png" alt="Send" title="Send">
			
		</div>
	








</form>
<script>
 function emailfieldhelp(inp,blur){
 
   if(blur && inp.value == ''){
      inp.value = 'Please type an email address here'  ;
       }
 	if(!blur && (inp.value == 'Please type an email address here')){
 		inp.value = '';
 	}
 
 
 }
</script>
