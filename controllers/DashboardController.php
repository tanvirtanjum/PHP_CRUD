<?php
require_once '../../models/StudentModel.php';
require_once '../../models/DepartmentModel.php';
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
                echo "</tr>";
                $sl += 1;		
            }
        }
        else
        {
            echo "<tr><td colspan='3' align='center'><span style='color:red;'>No Data Found.</span></td></tr>";
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
                echo "</tr>";
                $sl += 1;		
            }
        }
        else
        {
            echo "<tr><td colspan='7' align='center'><span style='color:red;'>No Data Found.</span></td></tr>";
        }
    }

}
else
{
    header("Location: http://localhost/PHP_CRUD/");
}
?>