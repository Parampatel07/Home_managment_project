<?php
session_start();
require_once("../../inc/connection.php");
// print_r($_REQUEST);
try
{
    $accept=2;
    $sql="UPDATE service_book SET status=? where id=?";
    $stat=$db->prepare($sql);
    $stat->bindparam(1,$accept);
    $stat->bindparam(2,$_REQUEST['apid']);
    $stat->execute();
    echo 10;
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
?>