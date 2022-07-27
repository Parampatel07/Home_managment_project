<?php
session_start();
// print_r($_FILES);
require_once("../../inc/connection.php");
    // echo "hiee";
    extract($_POST);
    // var_dump($_POST);
    $sql="INSERT INTO `catelog`(`service_proid`, `title`, `detail`, `amount`, `photo`) VALUES (?,?,?,?,?)";
    // exit();
    try
    {
        $stat=$db->prepare($sql);
        $stat->bindparam(1,$_SESSION['service_id']);
        $stat->bindparam(2,$title);
        $stat->bindparam(3,$description);
        $stat->bindparam(4,$amount);
        $svimage=rand(10,99) . rand(10,99) . rand(10,99) . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],"../images/catelog/".$svimage);
        $stat->bindparam(5,$svimage);
        $stat->execute();
        $_SESSION['message']="Catelog inserted succesfully";
        echo 10;
    }
    catch(PDOException $error)
    {
        LogError($error,__FILE__);
    }
    //header("location:../service_catelog.php");
?>