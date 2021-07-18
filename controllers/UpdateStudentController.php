<?php
require_once '../../models/StudentModel.php';
require_once '../../models/DepartmentModel.php';

$id = $_GET['id'];
$cur_data = null;
$cur_data = GetStudent($id);

if(isset($_COOKIE["userid"]) || isset($_COOKIE["name"]))
{
    if($cur_data!= null)
    {
        function loadOptions()
        {
            $cur_data2 = GetStudent($_GET['id']);
            $tableData = GetDepartments();
    
            if(sizeof($tableData) > 1 || $tableData != null)
            {
                foreach($tableData as $data)
                {
                    if($cur_data2[0]['dept_id'] == $data["id"])
                    {
                        echo "<option value='".$data["id"]."' selected>".$data["name"]."</option>";
                    }
                    else
                    {
                        echo "<option value='".$data["id"]."'>".$data["name"]."</option>";
                    }
                }
            }
            else
            {
                echo "";
            }
        }
    
        $validateInsert = true;
        $insertErrMsg = "";
    
        if(isset($_POST['addBTN']))
        {
            if(empty($_POST["name"]) || strlen(trim($_POST["name"])) < 1)
            {
                $validateInsert = false;
                $insertErrMsg .= "<br>Valid Name Required";
            }
            if(empty($_POST["dob"]) || strlen(trim($_POST["dob"])) < 1)
            {
                $validateInsert = false;
                $insertErrMsg .= "<br>Valid Date of Birth Required";
            }
            if(empty($_POST["credit"]) || strlen(trim($_POST["credit"])) < 1 || !is_numeric($_POST["credit"]) || $_POST["credit"] < 0)
            {
                $validateInsert = false;
                $insertErrMsg .= "<br>Valid Credit Required";
            }
            if(empty($_POST["cgpa"]) || strlen(trim($_POST["cgpa"])) < 1 || !is_numeric($_POST["cgpa"]) || $_POST["cgpa"] < 0 || $_POST["cgpa"] > 4)
            {
                $validateInsert = false;
                $insertErrMsg .= "<br>Valid CGPA Required";
            }
            if($validateInsert)
            {
                $insertStudentData = array('id' => $_GET['id'], 'name' => $_POST["name"], 'dob' => $_POST["dob"], 'credit' => $_POST["credit"], 'cgpa' => $_POST["cgpa"], 'dept_id' => $_POST["department"]);
                $insertStatus = updateStudent($insertStudentData);
    
                if($insertStatus)
                {
                    header("Location: http://localhost/PHP_CRUD/views/admin/StudentManagement.php");
                }
                else
                {
                    $insertErrMsg .= "<br>Something went wrong.";
                }
            }
        }
    }
    else
    {
        header("Location: http://localhost/PHP_CRUD/views/admin/StudentManagement.php");
    }
}
else
{
    header("Location: http://localhost/PHP_CRUD/");
}
?>