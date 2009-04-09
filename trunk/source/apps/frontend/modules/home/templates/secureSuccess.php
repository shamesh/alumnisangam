<?php include_component('home','footer'); ?>
<?php use_stylesheet('/css/screen.css', 'last') ?>
<div id="error404">
<div class="sfTMessageContainer sfTAlert"> 
  <?php echo image_tag('/images/icons/lock48.png', array('alt' => 'page not found', 'class' => 'sfTMessageIcon', 'size' => '48x48')) ?>
  <div class="sfTMessageWrap">
    <h1>Permission Denied</h1>
    <h5>This page is in a restricted area.</h5>
  </div>
</div>
<dl class="sfTMessageInfo">
  <dt>You do not have proper credentials to access this page</dt>
  <dd>Even though you have already logged in , this page requires special credentials that you currently don't have</dd>

  <dt>How to access this page</dt>
  <dd>You must ask a site administrator to grant you some special credentails.</dd>

  <dt>What's next</dt>
  <dd>
    <ul class="sfTIconList">
      <li class="sfTLinkMessage"><a href="javascript:history.go(-1)">Back to previous page</a></li>
      <li class="sfTLinkMessage"><?php echo link_to('Go to Homepage', '@homepage') ?></li>
    </ul>
  </dd>
</dl>
</div>

