<?php
session_start();
require_once("../inc/connection.php");
try
{
    $sql="SELECT 'total_requested' AS service_requested ,COUNT(*) AS row_count FROM house_management.service_book WHERE status=1 and service_proid=? UNION SELECT 'total_accepted' AS service_requested ,COUNT(*) AS row_count FROM house_management.service_book WHERE status=2 and service_proid=? UNION SELECT 'total_served' AS service_requested ,COUNT(*) AS row_count FROM house_management.service_book WHERE status=3 AND service_proid=? UNION SELECT 'total_rejected' AS service_requested ,COUNT(*) AS row_count FROM house_management.service_book WHERE status=4 AND service_proid=?";
    $stat=$db->prepare($sql);
    for($i=1;$i<=4;$i++)
    {
        $stat->bindparam($i,$_SESSION['service_id']);
    }
    $stat->setFetchMode(PDO::FETCH_ASSOC);
    $stat->execute();
    $table=$stat->fetchall();
    // var_dump($table);
    echo json_encode($table);
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
?>