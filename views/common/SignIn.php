<?php
include "../../controllers/SignInController.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP_CRUD | SignIn</title>
    </head>
    <body>
        <form method="POST">
            <div style="width: 100%; height: 20%; background-color:black; text-align:center; color:antiquewhite; font-size:30px; font-family:consolas;">
                <span>PHP CRUD APPLICATION</span>
            </div>

            <center>
            <div style="padding-top: 25vh; width:30%;">
                <fieldset style="border: 4px solid; background-color:rgba(125, 198, 222, 0.79);">
                    <legend>
                        <h1>SignIn</h1>
                    </legend>
                    <table>
                        <tbody>
                            <tr>
                                <td><span style="font-size: 18px;">Username: </span></td>
                                <td><input type="text" id="username" name="username" style="font-size: 18px; height: 20px;"></td>
                            </tr>
                            <tr>
                                <td><span style="font-size: 18px;">Password: </span></td>
                                <td><input type="password" id="password" name="password" style="font-size: 18px; height: 20px;"></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                <span style="font-size: 16px; color:red"><b><?php echo $errMsg; ?></b></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <button type="submit" id="loginBTN" name="loginBTN" style="width: 80px; height: 25px; background-color: rgba(80, 109, 176, 1); font-size:18px; color:antiquewhite; font-family:consolas;"><b>LOGIN</b></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
            </div>
            </center>
        </form>
    </body>
</html>