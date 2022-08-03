<?php
session_start();
require_once("../../inc/connection.php");
var_dump($_POST);
extract($_POST);
$sql="SELECT * from admin where id=?";
$stat=$db->prepare($sql);
$stat->setFetchMode(PDO::FETCH_ASSOC);
$stat->bindparam(1,$_SESSION['admin_id']);
// $stat->bindparam(2,$oldpass);
$stat->execute();
$table=$stat->fetch();
var_dump($table);
password_verify($oldpass,$table['password']);
// echo $checkoldpass;
if(password_verify($oldpass,$table['password']))
{
    echo " Match ";
    if($oldpass==$newpass)
    {
        $_SESSION['error']="Invalid attempt";
        $page="../change_password.php";
    }
    else
    {
        if($oldpass!=$newpass)
        {
            if($newpass==$conpass)
            {
                echo "new password and con password are same";
                $sql="UPDATE admin set password=? where id=?";
                $htm=$db->prepare($sql);
                $newpassword=password_hash($newpass,PASSWORD_DEFAULT);
                $htm->bindparam(1,$newpassword);
                $htm->bindparam(2,$_SESSION['admin_id']);
                $htm->execute();
                $_SESSION['message']="Password changed successfully";
                // echo "\nchanges done";
                $page="../index.php";
            }
            else
            {
                $_SESSION['error']="Invalid attempt";
                $page="../change_password.php";
            }
        }
        else
        {
            $_SESSION['error']="Invalid attempt";
            $page="../change_password.php";
        }
    }
}
else
{
    $_SESSION['error']="Invalid attempt";
    $page="../change_password.php";
}
header("location:$page");
?>