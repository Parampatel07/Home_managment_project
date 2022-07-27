<?php
session_start();
require_once("../../inc/connection.php");
// print_r($_REQUEST);
extract($_REQUEST);
if(isset($apporve)==true)
{
    $accept=2;
}
else
{
    $accept=4;
}
    try
    {
        
        $sql="UPDATE service_book SET status=? where id=?";
        $stat=$db->prepare($sql);
        $stat->bindparam(1,$accept);
        $stat->bindparam(2,$_REQUEST['apid']);
        $stat->execute();
        if(isset($apporve)==true)
        {
            echo 10;
        }       
        else
        {
            echo 20;
        }
    }
    catch(PDOException $error)
    {
        LogError($error,__FILE__);
    }
