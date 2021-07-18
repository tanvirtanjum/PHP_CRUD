<?php
setcookie("userid",$_COOKIE["userid"],time()-1800,"/");
setcookie("usertype",$_COOKIE["name"],time()-1800,"/");
unset($_COOKIE["userid"]);
unset($_COOKIE["name"]);
header("Location: http://localhost/PHP_CRUD/");
?>