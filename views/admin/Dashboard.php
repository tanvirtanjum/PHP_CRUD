<?php
include "../../controllers/DashboardController.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP_CRUD | ADMIN-DASHBOARD</title>
    </head>
    <body>
        <!-- LOAD NAVIGATION BAR -->
        <?php include "Navbar.php" ?>

        <div style="width: 100%;">
            <div style="text-align: center; width: calc(30%); float:left; padding-top: 4vh; overflow-y:scroll">
               <center>
                    <table border="1" style="font-size: 20px; font-family: consolas;">
                        <thead>
                            <caption style="background-color: black; color:antiquewhite; font-size:30px">Departments</caption>
                            <th>SL</th>
                            <th>ID</th>
                            <th>NAME</th>
                        </thead>
                        <tbody>
                            <?php load_departments_table(); ?>
                        </tbody>
                    </table>
               </center>
            </div>
            <div style="text-align: center; width: calc(70%); float: right; padding-top: 4vh; overflow-y:scroll"">
                <center>
                    <table border="1" style="font-size: 20px; font-family: consolas;">
                        <thead>
                            <caption style="background-color: black; color:antiquewhite; font-size:30px">Students</caption>
                            <th>SL</th>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>D.O.B</th>
                            <th>CREDIT</th>
                            <th>CGPA</th>
                            <th>DEPARTMENT</th>
                        </thead>
                        <tbody>
                            <?php load_students_table(); ?>
                        </tbody>
                    </table>
               </center>
            </div>
        </div>
    </body>
</html>