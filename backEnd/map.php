<?php
require_once ('location.php');
require_once ('currentLocation.java');
require_once ('navigation.java');

/**
 * @author Ras Goal Gule
 * @version 1.0
 * @created 16-Feb-2017 12:24:13 PM
 */
class map extends currentLocation, location
{

	public $latitude;
	public $longtude;
	public $m_navigation;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getLocation()
	{
	}

	/**
	 * 
	 * @param location
	 */
	public function viewmap(int $location)
	{
	}

}
?>