<?php
session_start();
require_once("../inc/connection.php");
// echo "serivce dashboard";
$sql="SELECT 'service_pro_total' AS service_book, COUNT(*) AS row_count FROM house_management .service_provider UNION                         
SELECT 'catelog_total' AS catelog, COUNT(*) AS row_count FROM house_management.catelog ";
$stat=$db->prepare($sql);
$stat->setFetchMode(PDO::FETCH_ASSOC);
$stat->execute();
$table=$stat->fetchall();
echo json_encode($table);
?>