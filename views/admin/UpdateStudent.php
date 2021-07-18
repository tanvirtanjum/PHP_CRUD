<?php
include "../../controllers/UpdateStudentController.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP_CRUD | STUDENT MANAGEMENT</title>
    </head>
    <body>
        <form method="POST">
            <!-- LOAD NAVIGATION BAR -->
            <?php include "Navbar.php" ?>

            <div style="width: 100%;">
                    <center>
                        <table>
                            <thead>
                                <caption style="background-color:rgba(80, 109, 176, 1); color:antiquewhite; font-size:30px">UPDATE STUDENT DETAILS</caption>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span style="font-size: 18px;">Name: </span></td>
                                    <td><input type="text" value="<?php echo $cur_data[0]['name']; ?>" id="name" name="name" style="font-size: 18px; height: 20px; width:200px;"></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: 18px;">D.O.B: </span></td>
                                    <td><input type="text" value="<?php echo $cur_data[0]['dob']; ?>" id="dob" name="dob" style="font-size: 18px; height: 20px; width:200px;"></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: 18px;">Credit: </span></td>
                                    <td><input type="number" value="<?php echo $cur_data[0]['credit']; ?>" id="credit" name="credit" style="font-size: 18px; height: 20px; width:200px;"></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: 18px;">CGPA: </span></td>
                                    <td><input type="number" value="<?php echo $cur_data[0]['cgpa']; ?>" step="0.01" id="cgpa" name="cgpa" style="font-size: 18px; height: 20px; width:200px;"></td>
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
                                        <button type="submit" id="addBTN" name="addBTN" style="width: 80px; height: 25px; background-color: rgba(80, 109, 176, 1); font-size:18px; color:antiquewhite; font-family:consolas;"><b>UPDATE</b></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </center>
            </div>
        </form>
    </body>
</html>