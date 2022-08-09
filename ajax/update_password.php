<?php
session_start();
require_once("../inc/connection.php");
// echo "hiee
extract($_POST);
// print_r($_POST);
try {
$sql="SELECT password,email,id from customer where id=?";
$stat=$db->prepare($sql);
$stat->setFetchMode(PDO::FETCH_ASSOC);
$stat->bindparam(1,$_SESSION['customer_id']);
$stat->execute();
$row=$stat->fetch();
print_r($row);
if(password_verify($oldpassword,$row['password'])==true)
{
    // echo "old password match";
    if($newpassword==$conspassword)
    {
        // echo " new password and old password match";
        $newhash=password_hash($newpassword,PASSWORD_DEFAULT);
        $sql="UPDATE customer SET password=? where id=?";
        $stat=$db->prepare($sql);
        $stat->bindparam(1,$newhash);
        $stat->bindparam(2,$_SESSION['customer_id']);
        $stat->execute();
        $_SESSION['message']="Password change Succesfully";
        echo 20;
    }
    else
    {
        
        $_SESSION['error']="invalid attempt";
        // echo " new password and old password does not  match";
        echo 10;
    }
}
else
{
    $_SESSION['error']="invalid attempt";
    // echo "old password does not match";
    echo 10;
}


} catch (PDOException $error) {
    LogError($error, __FILE__);
}
