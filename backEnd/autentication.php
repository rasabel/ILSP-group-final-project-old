<?php
require_once ('user.php');
require_once ('..\User.php');
require_once ('Table2.php');

/**
 * @author Ras Goal Gule
 * @version 1.0
 * @created 16-Feb-2017 12:22:10 PM
 */
class autentication extends user, Table2
{

	public $email;
	public $password;
	public $m_User;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	/**
	 * 
	 * @param email
	 * @param password
	 */
	public function login(string $email, string $password)
	{
	}

	/**
	 * 
	 * @param orgId
	 */
	public function logout(session $orgId)
	{
	}

	/**
	 * 
	 * @param email
	 */
	public function resetPassword(string $email)
	{
	}

}
?>