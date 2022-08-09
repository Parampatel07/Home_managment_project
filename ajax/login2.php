<?php
session_start();
require_once("../inc/connection.php");
extract($_POST);
// echo "hieee";
// print_r($_POST);
try
{
        $sql="SELECT email,password,id from customer where email=?";
    $stat=$db->prepare($sql);
    $stat->setFetchMode(PDO::FETCH_ASSOC);
    $stat->bindparam(1,$email);
    $stat->execute();
    $row=$stat->fetch();
    // print_r($row);
    if (!$row) {
        $_SESSION['error']="Invalid login attempt";
        // $page="../login.php";
        echo 10;
    }
    else
    {
        // echo "array is there";
        if(password_verify($password,$row['password'])==true)
        {
            // echo "password match";
            $_SESSION['customer_id']=$row['id'];
            $_SESSION['message']="Login Succesfull";
            // $page="../index.php";
            echo 20;
        }
        else
        {
            $_SESSION['error']="Invalid login attempt";
            //  $page="../login.php";
            echo 10;
        }
    }
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}