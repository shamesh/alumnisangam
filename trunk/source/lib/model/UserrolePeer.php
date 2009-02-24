<?php

/**
 * Subclass for performing query and update operations on the 'userRole' table.
 *
 * 
 *
 * @package lib.model
 */ 
class UserrolePeer extends BaseUserrolePeer
{
	public static function retrieveByPKUser($pk,$user, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$criteria = new Criteria(UserrolePeer::DATABASE_NAME);
		$criteria->add(UserrolePeer::ROLE_ID, $pk);
		$criteria->add(UserrolePeer::USER_ID, $user);
		$v = UserrolePeer::doSelect($criteria, $con);
		return !empty($v) > 0 ? $v[0] : null;
	}
}
