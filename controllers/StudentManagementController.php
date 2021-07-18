<?php
require_once '../../models/StudentModel.php';
require_once '../../models/DepartmentModel.php';
if(isset($_COOKIE["userid"]) || isset($_COOKIE["name"]))
{
    function loadOptions()
    {
        $tableData = GetDepartments();

        if(sizeof($tableData) > 1 || $tableData != null)
        {
            foreach($tableData as $data)
            {
                echo "<option value='".$data["id"]."'>".$data["name"]."</option>";
            }
        }
        else
        {
            echo "";
        }
    }

    function load_students_table()
    {
        $tableData = GetStudents();

        if(sizeof($tableData) > 1 || $tableData != null)
        {
            $sl = 1;
            foreach($tableData as $data)
            {
                echo "<tr>";
                echo "<td>".$sl."</td>";
                echo "<td>".$data["id"]."</td>";
                echo "<td>".$data["name"]."</td>";
                echo "<td>".$data["dob"]."</td>";
                echo "<td>".$data["credit"]."</td>";
                echo "<td>".$data["cgpa"]."</td>";
                echo "<td>".$data["DeptName"]."</td>";
                echo "<td><a class='a2' href='http://localhost/PHP_CRUD/views/admin/UpdateStudent.php?id=".$data["id"]."'>UPDATE</a></td>";
                echo "<td><a class='a3' href='http://localhost/PHP_CRUD/controllers/DeleteStudent.php?id=".$data["id"]."'>DELETE</a></td>";
                echo "</tr>";
                $sl += 1;		
            }
        }
        else
        {
            echo "<tr><td colspan='7' align='center'><span style='color:red;'>No Data Found.</span></td></tr>";
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
            $insertStudentData = array('name' => $_POST["name"], 'dob' => $_POST["dob"], 'credit' => $_POST["credit"], 'cgpa' => $_POST["cgpa"], 'dept_id' => $_POST["department"]);
            $insertStatus = insertStudent($insertStudentData);

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
    header("Location: http://localhost/PHP_CRUD/");
}
?>