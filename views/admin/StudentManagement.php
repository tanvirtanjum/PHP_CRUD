<?php
include "../../controllers/StudentManagementController.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP_CRUD | STUDENT MANAGEMENT</title>

        <style>
            .a2:link, .a2:visited {
                background-color: #3659f4;
                color: white;
                padding: 2px 2px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
            }

            .a2:hover, .a2:active {
                background-color: blue;
            }

            .a3:link, .a3:visited {
                background-color: #f55c51;
                color: white;
                padding: 2px 2px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
            }

            .a3:hover, .a3:active {
                background-color: red;
            }
        </style>

    </head>
    <body>
        <form method="POST">
            <!-- LOAD NAVIGATION BAR -->
            <?php include "Navbar.php" ?>

            <div style="width: 100%;">
                <div style="text-align: center; width: calc(35%); float:left; padding-top: 8vh; padding-bottom: 8vh; background-color:antiquewhite">
                <center>
                        <table>
                            <thead>
                                <caption style="background-color:rgba(80, 109, 176, 1); color:antiquewhite; font-size:30px">ADD NEW STUDENT</caption>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span style="font-size: 18px;">Name: </span></td>
                                    <td><input type="text" id="name" name="name" style="font-size: 18px; height: 20px; width:200px;"></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: 18px;">D.O.B: </span></td>
                                    <td><input type="date" id="dob" name="dob" style="font-size: 18px; height: 20px; width:200px;"></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: 18px;">Credit: </span></td>
                                    <td><input type="number" id="credit" name="credit" style="font-size: 18px; height: 20px; width:200px;"></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: 18px;">CGPA: </span></td>
                                    <td><input type="number" step="0.01" id="cgpa" name="cgpa" style="font-size: 18px; height: 20px; width:200px;"></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: 18px;">Department: </span></td>
                                    <td>
                                        <select name="department" id="department" style="font-size: 18px; width:200px;">
                                            <?php loadOptions(); ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                    <span style="font-size: 16px; color:red"><b><?php echo $insertErrMsg; ?></b></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <button type="submit" id="addBTN" name="addBTN" style="width: 80px; height: 25px; background-color: rgba(80, 109, 176, 1); font-size:18px; color:antiquewhite; font-family:consolas;"><b>ADD</b></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </center>
                </div>
                <div style="text-align: center; width: calc(65%); float: right; padding-top: 4vh; overflow-y:scroll"">
                    <center>
                        <table border="1" style="font-size: 18px; font-family: consolas;">
                            <thead>
                                <caption style="background-color: black; color:antiquewhite; font-size:30px">Students</caption>
                                <th>SL</th>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>D.O.B</th>
                                <th>CREDIT</th>
                                <th>CGPA</th>
                                <th>DEPARTMENT</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php load_students_table(); ?>
                            </tbody>
                        </table>
                </center>
                </div>
            </div>
        </form>
    </body>
</html>