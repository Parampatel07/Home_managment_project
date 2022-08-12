<?php
session_start();
require_once("../inc/connection.php");
// echo "hiee";
try{
    $sql="SELECT amount from catelog where id=?";
    $data=[$_REQUEST['catelogid']];
    $row=FetchRow($sql,$data);
    // print_r ($row);
    // echo "jiee";
    echo json_encode($row);
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}

?>