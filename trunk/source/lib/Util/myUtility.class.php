<?php

class myUtility
{
	public function sendmail($senderEmail,$senderName,$fromEmail,$fromName,$replyto,$to,$subject,$body){
		$mail = new sfMail();
		$mail->initialize();
		$mail->setMailer(sfConfig::get('app_mail_server_type'));
		$mail->setHostname(sfConfig::get('app_mail_hostname'));
		$mail->setUsername(sfConfig::get('app_mail_username'));
		$mail->setPassword(sfConfig::get('app_mail_password'));
		$mail->setCharset(sfConfig::get('app_mail_character'));
		$mail->setSender($senderEmail,$senderName);
		$mail->setFrom($fromEmail,$fromName);
		$mail->addReplyTo($replyto);
		$mail->addAddress($to);
		$mail->setSubject($subject);
		$mail->setBody($body);
		$mail->send();
	}
	public function recursive_copy($dirsource, $dirdest)
	{
		if(is_dir($dirsource))$dir_handle=opendir($dirsource);
		mkdir($dirdest, 0750);
		while($file=readdir($dir_handle))
		{
			if($file!="." && $file!=".." && $file!=".svn")
			{
				if(!is_dir($dirsource."/".$file)) copy ($dirsource."/".$file, $dirdest."/".$file);
				else
				{
					$dirdest1 = $dirdest."/".$file;
					myUtility::recursive_copy($dirsource."/".$file, $dirdest1);
				}
			}
		}
		closedir($dir_handle);
		return true;
	}
	public function recursive_remove($dirsource)
	{
		if(is_dir($dirsource))$dir_handle=opendir($dirsource);
		while($file=readdir($dir_handle))
		{
			if($file!="." && $file!="..")
			{
				if(!is_dir($dirsource."/".$file)) unlink ($dirsource."/".$file);
				else
				{
					myUtility::recursive_remove($dirsource."/".$file);
				}
			}
		}
		closedir($dir_handle);
		rmdir($dirsource);
		return true;
	}

	
}
