<?php
require_once 'DBC.php';

function GetDepartments()
{
	$result=array();
	$result = null;
	try
	{
		$query= "SELECT * FROM `departments`;";
	
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

function GetDepartment($id)
{
	$result=array();
	$result = null;
	try
	{
		$query= "SELECT * FROM `departments` WHERE `id` = $id";
	
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

function insertDepartment($data)
{
	$result=array();
	$result = null;

	$query = "INSERT INTO `departments`(`name`) VALUES ('".$data['name']."');";
	
	try
	{
		execute($query);
		return true;
	}
	
	catch(Exception $e)
	{
		throw $e->getMessage();
		return false;
	}	
}

function updateDepartment($data)
{
	$result=array();
	$result = null;

	$query = "UPDATE `departments` SET `name`='".$data['name']."' WHERE `id` = '".$data['id']."'";
	
	try
	{
		execute($query);
		return true;
	}
	
	catch(Exception $e)
	{
		throw $e->getMessage();
		return false;
	}	
}

function deleteDepartment($data)
{
	$result=array();
	$result = null;

	$query = "DELETE FROM `departments` WHERE `id` = '$data';";
	
	try
	{
		execute($query);
		return true;
	}
	
	catch(Exception $e)
	{
		throw $e->getMessage();
		return false;
	}	
}
 
?>