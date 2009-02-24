<?php

class uniqueusernameValidator extends sfValidator
{    
  public function initialize($context, $parameters = null)
  {
    parent::initialize($context);
    return true;
  }
 
  public function execute(&$value, &$error)
  {
  	$id = $this->getContext()->getRequest()->getParameter('id');
    $name = $value;
    $c = new Criteria();
    $c->add(UserPeer::USERNAME, $name);
    $user = UserPeer::doSelectOne($c);
    if($user)
    {
    	if($id && $id == $user->getId()){
    		return true;
    	}
    	$error = 'Username '.$user->getUsername().' already Exist.';
    	return false;
    }
	return true;
  }
}
?>