<?php
require_once 'DBC.php';

function GetAdmin($username, $password)
{
	$result=array();
	$result = null;
	try
	{
		$query= "SELECT * FROM `admins` WHERE `username` = '$username' AND `password` = '$password';";
	
		$result=get($query);
		
		if($result != null)
		{
			return $result;
		}
		
		else
		{
			return $result;
		}
	}
	
	catch(Exception $e)
	{
		throw $e->getMessage();
		return $result;
	}
}
 
?>