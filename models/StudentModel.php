<?php
require_once 'DBC.php';

function GetStudents()
{
	$result=array();
	$result = null;
	try
	{
		$query= "SELECT students.*, departments.name as `DeptName` FROM `students` INNER JOIN `departments` ON students.dept_id = departments.id;";
	
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

function GetStudent($id)
{
	$result=array();
	$result = null;
	try
	{
		$query= "SELECT * FROM `students` WHERE `id` = $id";
	
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

function insertStudent($data)
{
	$result=array();
	$result = null;

	$query = "INSERT INTO `students`(`name`, `dob`, `credit`, `cgpa`, `dept_id`) VALUES ('".$data['name']."','".$data['dob']."','".$data['credit']."','".$data['cgpa']."','".$data['dept_id']."');";
	
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

function updateStudent($data)
{
	$result=array();
	$result = null;

	$query = "UPDATE `students` SET `name`='".$data['name']."',`dob`='".$data['dob']."',`credit`='".$data['credit']."',`cgpa`='".$data['cgpa']."',`dept_id`='".$data['dept_id']."' WHERE `id` = '".$data['id']."'";
	
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

function deleteStudent($data)
{
	$result=array();
	$result = null;

	$query = "DELETE FROM `students` WHERE `id` = '$data';";
	
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