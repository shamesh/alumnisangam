<?php 
	//getting phpBB db connection
	$con = sfContext::getInstance()->getDatabaseConnection('v2bb');
	//setting the variables
	$sid = trim($sf_user->getAttribute('bbsid'));
	
	$cookiePrefixQuery = "select config_value as cv from phpbb_config where config_name = 'cookie_name'";
	$cPrefixRslt = $con->executeQuery($cookiePrefixQuery);
	while($cPrefixRslt->next()){
		$cPrefix = $cPrefixRslt->getString('cv'); 
	}
	//setting cookies	
	sfContext::getInstance()->getResponse()->setCookie($cPrefix.'_sid', $sid, 0, '/');
	sfContext::getInstance()->getResponse()->setCookie($cPrefix.'_k', '.', 0, '/');
	sfContext::getInstance()->getResponse()->setCookie($cPrefix.'_u', '53', 0, '/');
	sfContext::getInstance()->getResponse()->setCookie('style_cookie', 'null', 0, '/');

?>
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
  <div class="mainDiv">
  	<div class="globalheader">
    	<?php include_component('home','globalheader'); ?>
    </div>
    <div class="header">
      <?php include_component('home','header'); ?>
    </div>
    <div class="content">
      <div class="leftmenu">
        <div class="leftmenucontent">
          <?php if (has_slot('leftmenu')):?>
          	<?php include_slot('leftmenu') ?>
          <?php endif;?>
        </div>
      </div>
      <div class="contentMain"> <?php echo $sf_data->getRaw('sf_content') ?> </div>
    </div>
    <div class="footermark"> 
      <div class="footBg"><img src="/images/spacer.gif" /></div>
    </div>
  </div>
  <div class="footer">
    <div class="footertext">Copyright &copy; 2008 - 2009 by ITBHU Global Alumni Association, Institute of Technology, Banaras Hindu University, Varanasi 221005 INDIA    <?php echo link_to('HOME','/user/welcome'); ?>&nbsp; <?php echo link_to('Search','home/searchform'); ?>&nbsp; <?php echo link_to('Pep preview','peppage/siteview?un='.$sf_user->getAttribute('username')); ?>&nbsp;</div>
  </div>
</div>
</body>
</html>
