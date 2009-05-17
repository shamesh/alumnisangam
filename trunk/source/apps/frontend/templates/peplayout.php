
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>
<?php include_title() ?>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
	<body onload="loadmenu()">
		<noscript>
			<center>
				<div id="noScript"><img src="/images/iconWarning.gif" /> JavaScript must
				be enabled in order for you to use Alumni Sangam.<br />
				However, it seems JavaScript is either disabled or not supported by your
				browser. <br />
				To use Alumni Sangam, enable JavaScript by changing your browser options.<br />
				</div>
			</center>
		</noscript>
		<div class="container">
			<div class="pepcontentMain">
				<?php echo $sf_data->getRaw('sf_content') ?>
			
				<!--
				<div class="footermark">
					<div class="footBg"><img src="/images/spacer.gif" /></div>
				</div>
				<div class="footer">
					<div class="footertext">Copyright &copy; 2008 - 2009 by ITBHU Global Alumni Association, Institute of Technology, Banaras Hindu University, Varanasi 221005 INDIA </div>
				</div>
				-->
			</div>
		</div>
	</body>
</html>
