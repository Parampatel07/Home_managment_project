<?php
session_start();
require_once("../inc/connection.php");
echo "hiee";
extract($_POST);
print_r($_POST);
print_r($_FILES);
try
{
    $sql="INSERT INTO `service_provider`(`categoryid`, `title`, `slogan`, `logo`, `surname`, `name`, `father_name`, `address1`, `address2`, `email`, `password`, `mobile`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    $photo= rand(10,99) . rand(10,99) . rand(10,99) . $_FILES['logo']['name'];
    move_uploaded_file($_FILES['logo']['tmp_name'],"../admin/images/service_provider/$photo");
    $hashpas=password_hash($password,PASSWORD_DEFAULT);
    $data=[$categoryid,$title,$title,$photo,$surname,$name,$father_name,$address1,$address2,$email,$hashpas,$mob];
    RunQuery($sql,$data);
    $_SESSION['message']="Thanks for registering as a service provider";
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
?>