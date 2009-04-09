<?php include_component('home','leftmenu'); ?>
<?php include_component('home', 'messages'); ?>

<?php
echo form_tag('user/sendinvite')
?>

<?php  echo "Invite fellow alumnus to join" ?>
<br><br>

<?php echo "Use this form to invite fellow alumnus to join ITBHUGlobal.org. Please provide information about the alumnus you wish to invite." ?>
<br><br>
<input type="hidden" id="userid" name="userid" value=<?php echo $userid ?>>


<div>
<label>Invitee Email: </label><input onblur="emailfieldhelp(this,1)" onclick="emailfieldhelp(this)" id="emailid" type="text" size="30" name="emailid" value="Please type an email address here">
</div>

<br><br>
<div>

<label>Subject: </label><input type="text" size="30" name="subject" value= "<?php echo $fullname ?> invites you to join the ITBHUGlobal.org team" >
</div>
<br><br>
<div>
<label style="float : left" >Message : </label><textarea cols="60" rows="15" name="message"  >Hi,

 <?php echo $fullname ; ?> (ITBHU alumnus Batch min 2002) has invited you to join the ITBHUGlobal.org Alumni team.

To register with ITBHUGlobal.org alumni database please click on the following url

https://www.itbhuglobal.org/register/

The features provided by the system include:

    - Publishing your information
    (Personal, Educational, Miscellaneous, Resume)

  - Email id with redirection facility.
  - Mailing lists for various chapters / departments etc.
  - Alumni search facility.
  - Registration Statistics
  - Mail Composer
  - Inviting a friend
  - Reaching out to other alumni

Please use the following link to learn more about these features.

  http://www.itbhuglobal.org/archives/000294.html

 ----
 Thanks,
 Administrator,
 ITBHUGlobal.org
 </textarea>
</div>
<br><br>
<?php echo submit_tag('send'); ?>
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
