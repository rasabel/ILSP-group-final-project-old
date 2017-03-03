<?php
require_once ('currentLocation.php');
require_once ('registeration.php');
require_once ('request.php');

/**
 * @author Ras Goal Gule
 * @version 1.0
 * @created 16-Feb-2017 12:26:22 PM
 */
class User
{

	public $email;
	public $orgName;
	public $password;
	public $m_hallLike;
	public $m_currentLocation;
	public $m_registeration;
	public $m_request;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function main()
	{
	}

}
?>