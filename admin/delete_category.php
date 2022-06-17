<?php
session_start();
require_once("../inc/connection.php");
try
{
    $sql="DELETE from category where id=?";
    $query=$db->prepare($sql);
    $query->bindparam(1,$_GET['categoryid']);
    // var_dump($_GET['categoryid']);
    var_dump($_FILES);
    // echo $_GET['photo']
    $query->execute();
    unlink("images/category/{$_GET['photo']}");
    $_SESSION['message']="category deleted succsfully";
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
header("location:category_management.php");
?>