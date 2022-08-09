<?php
session_start();
// require_once("../../inc/check_customer_login.php");
require_once("../../inc/connection.php");
extract($_POST);
print_r($_POST);
// echo "hiee";
try
{
    $sql="INSERT into customer (surname,name,fathername,gender,address1,address2,city,state,mobile,email,password) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $data=array($surname,$name,$father_name,$gender,$address1,$address2,$city,$state,$mob,$email,$password);
    RunQuery($sql,$data);
    $_SESSION['message']="Your have succesfully registered";
    
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
?>