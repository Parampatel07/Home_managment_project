<?php
session_start();
// var_dump($_SESSION);
if(isset($_SESSION['service_id'])==false)
{
    $_SESSION['error']="Login is Required";
    // echo $_SESSION['service_id'];
    header("location:service_login2.php");
    exit();
}

?>