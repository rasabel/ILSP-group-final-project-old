<?php
require_once ('accountSetting.java');
require_once ('user.php');
require_once ('requested.php');
require_once ('autentication.java');

/**
 * @author Ras Goal Gule
 * @version 1.0
 * @created 16-Feb-2017 12:21:32 PM
 */
class admin extends user, requested
{

	private $userID;
	public $m_accountSetting;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	/**
	 * 
	 * @param userid
	 */
	public function blockAccount(int $userid)
	{
	}

	/**
	 * 
	 * @param userId
	 */
	public function deletAccount(int $userId)
	{
	}

}
?>