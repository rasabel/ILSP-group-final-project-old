<?php
require_once ('location.php');

/**
 * @author Ras Goal Gule
 * @version 1.0
 * @created 16-Feb-2017 12:24:31 PM
 */
class navigation extends location, location
{

	public $latitude;
	public $longtude;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	/**
	 * 
	 * @param lati
	 * @param long
	 */
	public function getDirection(int $lati, int $long)
	{
	}

	public function getOption()
	{
	}

}
?>