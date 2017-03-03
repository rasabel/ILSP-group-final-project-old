<?php
require_once ('map.java');
require_once ('..\User.php');
require_once ('notification.php');
require_once ('comment.php');
require_once ('hallLike.php');
require_once ('getDirection.php');
require_once ('accountSetting.java');
require_once ('organization.php');
require_once ('autentication.php');

/**
 * @author Ras Goal Gule
 * @version 1.0
 * @created 16-Feb-2017 12:22:49 PM
 */
class organiztion extends organization
{

	public $AKA;
	public $bussinessDetail;
	public $Email;
	public $id;
	public $name;
	public $phoneNo;
	public $service_time;
	public $serviceCatagories;
	public $Status;
	public $streetName;
	public $yearOfService;
	public $City;
	public $region;
	public $sub_city;
	public $m_map;
	public $m_User;
	public $m_notification;
	public $m_comment;
	public $m_hallLike;
	public $m_getDirection;
	public $m_accountSetting;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	/**
	 * 
	 * @param id
	 */
	public function dispalyOrg(int $id)
	{
	}

	/**
	 * 
	 * @param id
	 */
	public function viewProfile(int $id)
	{
	}

	/**
	 * 
	 * @param id
	 */
	private function updateProfile(int $id)
	{
	}

}
?>