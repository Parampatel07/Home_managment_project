<?php
session_start();
require_once("../../inc/connection.php"); 
extract($_POST);
var_dump($_POST);
try
{
    $sql="SELECT id,password from service_provider where email=?";
    $stat=$db->prepare($sql);
    $stat->bindparam(1,$email);
    $stat->setfetchmode(PDO::FETCH_ASSOC);
    $stat->execute();
    $row=$stat->fetch();
    var_dump($row);
    // $hashed_us_password=password_hash($password,PASSWORD_DEFAULT);
    if(sizeof($row)>0)
    {

        $temp=password_verify($password,$row['password']);
        if($temp==true)
        {
            $_SESSION['message']="Login Succesfull";
            $_SESSION['service_id']=$row['id'];
            echo $row['id'];
            // echo $_SESSION['service_id'];
            $page="../service_dashboard.php";
        }
        else
        {
            $_SESSION['error']="Invalid login attempt";
            $page="../service_login2.php";
        }
    }
    else
    {
        $_SESSION['error']="Invalid login attempt";
        $page="../service_login2.php";
    }
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
header("location:$page");