<?php
require_once '../models/DepartmentModel.php';

$id = $_GET['id'];

if(!isset($_COOKIE['name']) || !isset($_COOKIE['userid']))
{
    header("Location: http://localhost/PHP_CRUD/");
}
else
{
    $dltEmployee = deleteDepartment($id);

    header("Location: http://localhost/PHP_CRUD/views/admin/DepartmentManagement.php");
}

?>