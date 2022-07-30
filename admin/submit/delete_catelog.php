<?php
session_start();
require_once("../../inc/connection.php");
extract($_REQUEST);
// echo "hiee this is delete";
// print_r($_REQUEST);
$catelogid=base64_decode($_REQUEST['catelogid']);
$sql="delete from catelog where id=?";
$stat=$db->prepare($sql);
$stat->bindparam(1,$catelogid);
unlink("../images/catelog/".$photo);
$stat->execute();
echo "Deleted succesfully";
?>