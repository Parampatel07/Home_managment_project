<?php 
session_start();    
require_once("../../inc/connection.php");
try
{
    $sql="SELECT * from catelog where service_proid=?";
    $stat=$db->prepare($sql);
    $stat->setFetchMode(PDO::FETCH_ASSOC);
    $stat->bindparam(1,$_SESSION['service_id']);
    $stat->execute();
    $table=$stat->fetchAll();
    // print_r($table);
    echo json_encode($table);
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}

?>