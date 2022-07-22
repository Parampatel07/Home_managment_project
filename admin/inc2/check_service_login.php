<?php
session_start();
if(isset($_SESSION['service_id'])==false)
{
    $_SESSION['error']="Login is Required";
    // echo $_SESSION['service_id'];
    header("location:service_login2.php");
    exit();
}
else
{
    header("location:service_dashboard.php");
}
?>