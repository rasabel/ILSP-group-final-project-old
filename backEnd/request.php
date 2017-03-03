<?php
require_once ('requested.php');
require_once ('registeration.java');
require_once ('admin.php');

/**
 * @author Ras Goal Gule
 * @version 1.0
 * @created 16-Feb-2017 12:22:23 PM
 */
class request extends requested
{

	public $id;
	public $name;
	public $email;
	public $autorization_paper;
	public $m_registeration;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	/**
	 * 
	 * @param id
	 * @param name
	 * @param email
	 */
	public function respond(int $id, string $name, string $email)
	{
	}

	/**
	 * 
	 * @param request_id
	 */
	public function acceptRequest(int $request_id)
	{
	}

	/**
	 * 
	 * @param request_id
	 */
	public function rejectRequest(int $request_id)
	{
	}

	/**
	 * 
	 * @param request_id
	 */
	public function viewRequest(int $request_id)
	{
	}

	/**
	 * 
	 * @param email
	 * @param orgName
	 */
	public function sendRequest(string $email, name $orgName)
	{
	}

}
?>