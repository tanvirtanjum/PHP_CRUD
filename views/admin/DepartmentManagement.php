<?php
include "../../controllers/DepartmentManagementController.php";
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
                                <caption style="background-color:rgba(80, 109, 176, 1); color:antiquewhite; font-size:30px">ADD NEW DEPARTMENT</caption>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span style="font-size: 18px;">Name: </span></td>
                                    <td><input type="text" id="name" name="name" style="font-size: 18px; height: 20px; width:200px;"></td>
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
                <div style="text-align: center; width: calc(30%); float: left; padding-top: 4vh; overflow-y:scroll"">
                    <center>
                        <table border="1" style="font-size: 18px; font-family: consolas;">
                            <thead>
                                <caption style="background-color: black; color:antiquewhite; font-size:30px">Departments</caption>
                                <th>SL</th>
                                <th>ID</th>
                                <th>NAME</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php load_departments_table(); ?>
                            </tbody>
                        </table>
                </center>
                </div>

                <!-- <div style="text-align: center; width: calc(35%); float:left; padding-top: 8vh; padding-bottom: 8vh; background-color:antiquewhite">
                <center>
                        <table>
                            <thead>
                                <caption style="background-color:rgba(80, 109, 176, 1); color:antiquewhite; font-size:30px">UPDATE DEPARTMENT</caption>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span style="font-size: 18px;">Name: </span></td>
                                    <td><input type="text" id="name" name="nametoupdate" style="font-size: 18px; height: 20px; width:200px;"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                    <span style="font-size: 16px; color:red"><b></b></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <button type="submit" id="updateBTN" name="updateBTN" style="width: 80px; height: 25px; background-color: rgba(80, 109, 176, 1); font-size:18px; color:antiquewhite; font-family:consolas;"><b>UPDATE</b></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </center> 
                </div> -->
                <?php
                    if($section)
                    {
                        echo $updateSection;
                    }                   
                ?>
            </div>
        </form>
    </body>
</html>