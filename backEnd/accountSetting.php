<?php
require_once ('user.php');
require_once ('Table3.php');

/**
 * @author Ras Goal Gule
 * @version 1.0
 * @created 16-Feb-2017 12:23:35 PM
 */
class accountSetting extends user, Table3
{

	public $orgId;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	/**
	 * 
	 * @param orgId
	 */
	public function changePassword(int $orgId)
	{
	}

	/**
	 * 
	 * @param orgId
	 */
	public function ActiveAccount(int $orgId)
	{
	}

	/**
	 * 
	 * @param orgId
	 */
	public function deActivate(int $orgId)
	{
	}

}
?>