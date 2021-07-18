<?php
require_once '../../models/DepartmentModel.php';

$cur_data = null;
$updateSection = "";
$insertErrMsg2 = "";

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $cur_data = GetDepartment($id);

    $updateSection .= '<div style="text-align: center; width: calc(35%); float:left; padding-top: 8vh; padding-bottom: 8vh; background-color:antiquewhite">';
    $updateSection .=               '<center>';
    $updateSection .=                        '<table>';
    $updateSection .=                            '<thead>';
    $updateSection .=                                '<caption style="background-color:rgba(80, 109, 176, 1); color:antiquewhite; font-size:30px">UPDATE DEPARTMENT</caption>';
    $updateSection .=                            '</thead>';
    $updateSection .=                            '<tbody>';
    $updateSection .=                                '<tr>';
    $updateSection .=                                    '<td><span style="font-size: 18px;">Name: </span></td>';
    $updateSection .=                                    '<td><input type="text" value="'.$cur_data[0]["name"].'" id="nametoupdate" name="nametoupdate" style="font-size: 18px; height: 20px; width:200px;"></td>';
    $updateSection .=                                '</tr>';
    $updateSection .=                                '<tr>';
    $updateSection .=                                    '<td colspan="2" align="center">';
    $updateSection .=                                    '<span style="font-size: 16px; color:red"><b>'.$insertErrMsg2.'</b></span>';
    $updateSection .=                                    '</td>';
    $updateSection .=                                '</tr>';
    $updateSection .=                                '<tr>';
    $updateSection .=                                    '<td colspan="2" align="center">';
    $updateSection .=                                        '<button type="submit" id="updateBTN" name="updateBTN" style="width: 80px; height: 25px; background-color: rgba(80, 109, 176, 1); font-size:18px; color:antiquewhite; font-family:consolas;"><b>UPDATE</b></button>';
    $updateSection .=                                   ' </td>';
    $updateSection .=                                '</tr>';
    $updateSection .=                            '</tbody>';
    $updateSection .=                        '</table>';
    $updateSection .=                '</center>';
    $updateSection .= '</div>';
}
// $id = $_GET['id'];


$section = true;

if($cur_data == null)
{
    $section = false;
}

if(isset($_COOKIE["userid"]) || isset($_COOKIE["name"]))
{
    function load_departments_table()
    {
        $tableData = GetDepartments();

        if(sizeof($tableData) > 1 || $tableData != null)
        {
            $sl = 1;
            foreach($tableData as $data)
            {
                echo "<tr>";
                echo "<td>".$sl."</td>";
                echo "<td>".$data["id"]."</td>";
                echo "<td>".$data["name"]."</td>";
                echo "<td><a class='a2' href='http://localhost/PHP_CRUD/views/admin/DepartmentManagement.php?id=".$data["id"]."'>UPDATE</a></td>";
                echo "<td><a class='a3' href='http://localhost/PHP_CRUD/controllers/DeleteDepartment.php?id=".$data["id"]."'>DELETE</a></td>";
                echo "</tr>";
                $sl += 1;		
            }
        }
        else
        {
            echo "<tr><td colspan='5' align='center'><span style='color:red;'>No Data Found.</span></td></tr>";
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
        
        if($validateInsert)
        {
            $insertDeptData = array('name' => $_POST["name"]);
            $insertStatus = insertDepartment($insertDeptData);

            if($insertStatus)
            {
                header("Location: http://localhost/PHP_CRUD/views/admin/DepartmentManagement.php");
            }
            else
            {
                $insertErrMsg .= "<br>Something went wrong.";
            }
            
        }
    }

    $validateUpdate = true;
    $insertErrMsg2 = "";

    if(isset($_POST['updateBTN']))
    {
        if(empty($_POST["nametoupdate"]) || strlen(trim($_POST["nametoupdate"])) < 1)
        {
            $validateUpdate = false;
            $insertErrMsg2 .= "<br>Valid Name Required";
        }
        
        if($validateInsert)
        {
            $updatetDeptData = array('id' => $cur_data[0]["id"], 'name' => $_POST["nametoupdate"]);
            $updateStatus = updateDepartment($updatetDeptData);

            if($updateStatus)
            {
                header("Location: http://localhost/PHP_CRUD/views/admin/DepartmentManagement.php");
            }
            else
            {
                $insertErrMsg2 .= "<br>Something went wrong.";
            }
            
        }
    }

}
else
{
    header("Location: http://localhost/PHP_CRUD/");
}
?>