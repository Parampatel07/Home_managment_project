<?php
session_start();
// require_once("inc/check_customer_login.php");
require_once("inc/connection.php");
extract($_POST);
var_dump($_POST);
try
{
    $sql="INSERT into service_book (customerid,service_proid,catelogid,servicedate,servicetime,contact_person,contatcno,amount) VALUES (?,?,?,?,?,?,?,?)";
    $data=[$_SESSION['customer_id'],$service_proid,$categoryid,$servicedate,$servicetime,$contact,$contact_number,$amount];
    RunQuery($sql,$data);
    $_SESSION['message']="Booking successfull";
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
header("location:index.php");
?>