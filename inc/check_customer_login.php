<?php
session_start();
// var_dump($_SESSION);
if(isset($_SESSION['customer_id'])==false)
{
    $_SESSION['error']="Login is required";
    header("location:login.php");
    exit();
}

?>