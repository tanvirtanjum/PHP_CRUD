<?php
require_once '../../models/AdminModel.php';

$username = "";
$password = "";

$validate = true;

$errMsg = "";

if(!isset($_COOKIE["userid"]) || !isset($_COOKIE["name"]))
{
    if (isset($_POST['loginBTN'])) 
    {
        if(empty($_POST["username"]) || strlen(trim($_POST["username"])) < 1)
        {
            $validate = false;
            $errMsg .= "Username Required. ";
        }
        else
        {
            $username = $_POST["username"];
        }

        if(empty($_POST["password"]) || strlen(trim($_POST["password"])) < 1)
        {
            $validate = false;
            $errMsg .= "Password Required.";
        } 
        else
        {
            $password = $_POST["password"];
        }

        if($validate)
        {
            $user = GetAdmin($username, $password);

                if(sizeof($user) > 1 || $user != null)
                {
                    setcookie("userid",$user[0]['id'],time()+1800,"/");
                    setcookie("name",$user[0]['name'],time()+1800,"/");
                    header("Location: http://localhost/PHP_CRUD/views/admin/Dashboard.php");
                }
                else
                {
                    $errMsg = "Invalid Username/Password.";
                }
        }
    }
}

else
{
    header("Location: http://localhost/PHP_CRUD/views/admin/Dashboard.php");
}
?>