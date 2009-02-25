<?php
class uniqueuserValidator extends sfValidator
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
		$c->add(UserPeer::USERNAME	, $name);
		$user = UserPeer::doSelectOne($c);
		$condition=true;
		if($user)
		{
			if($id && $id == $user->getId()){
				$condition=true;
			}else{
				$error = 'User '.$user->getUsername().' already Exist.';
				$condition=false;
			}
		}

		$roles=RolePeer::doSelect(new Criteria());
		$found=false;
		foreach($roles as $role){
			if($this->getContext()->getRequest()->getParameter($role->getName(),0)==1){
				$found=true;
			}
		}
		if(!$found){
			$error = 'Please select atleast one role';
			$condition=false;
		}
		return $condition;
	}
}