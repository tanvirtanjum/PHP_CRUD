<?php
require_once '../models/StudentModel.php';

$id = $_GET['id'];

if(!isset($_COOKIE['name']) || !isset($_COOKIE['userid']))
{
    header("Location: http://localhost/PHP_CRUD/");
}
else
{
    $dltEmployee = deleteStudent($id);

    header("Location: http://localhost/PHP_CRUD/views/admin/StudentManagement.php");
}

?>