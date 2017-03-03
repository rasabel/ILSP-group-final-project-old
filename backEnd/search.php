<?php
require_once ('..\User.php');
require_once ('location.php');
require_once ('user.php');
require_once ('organitation.php');
require_once ('service.php');
require_once ('servic_catagories.php');

/**
 * @author Ras Goal Gule
 * @version 1.0
 * @created 16-Feb-2017 12:25:08 PM
 */
class search extends location, user, organitation, service, servic_catagories
{

	public $catagoriesName;
	public $keyWord;
	public $m_User;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	/**
	 * 
	 * @param userInput
	 */
	public function search_by_key_word(string $userInput)
	{
	}

	/**
	 * 
	 * @param catagorries_Id
	 * @param userInput
	 */
	public function search_by_catagoriesl(int $catagorries_Id, string $userInput)
	{
	}

	/**
	 * 
	 * @param keyWord
	 */
	public function search_by_place(string $keyWord)
	{
	}

}
?>