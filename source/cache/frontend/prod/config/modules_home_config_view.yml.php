<?php
// auto-generated by sfViewConfigHandler
// date: 2009/02/24 11:45:41
$context  = $this->getContext();
$response = $context->getResponse();


  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (!$context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Alumni Sangam', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('description', 'Alumni Sangam Web Portal', false, false);
  $response->addMeta('keywords', 'Alumni Sangam, ITBHU, V2,', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('itbhu', '', array ());
  $response->addStylesheet('typo', '', array ());
  $response->addStylesheet('globalmenu', '', array ());
  $response->addJavascript('itbhu');
  $response->addJavascript('prototype');

