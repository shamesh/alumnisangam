<?php

/**
 * Subclass for performing query and update operations on the 'role' table.
 *
 *
 *
 * @package lib.model
 */
class RolePeer extends BaseRolePeer
{
	public static function retrieveByName($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$criteria = new Criteria(RolePeer::DATABASE_NAME);
		$criteria->add(RolePeer::NAME, $pk);
		$v = RolePeer::doSelect($criteria, $con);
		return !empty($v) > 0 ? $v[0] : null;
	}
}
