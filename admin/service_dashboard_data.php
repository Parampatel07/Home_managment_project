<?php
session_start();
require_once("../inc/connection.php");
$data=array();
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
    $data[]=$table;
    $main_sql="SELECT DISTINCT catelogid from service_book";
    $stat=$db->prepare($main_sql);
    $stat->setFetchMode(PDO::FETCH_ASSOC);
    $stat->execute();
    $tot_catelog_id=$stat->fetchAll();

    // echo "<br><br><br>";
    // var_dump($tot_catelog_id);
    // echo $tot_catelog_id[0]['catelogid'];
    $line_graph=array();
    $temp= sizeof($tot_catelog_id);
    for($i=0;$i<$temp;$i++)
    {

        $sub_sql="SELECT catelogid,c.amount,c.title,COUNT(*) as 'bookings' from service_book sb,catelog c WHERE catelogid=? AND c.id=? and sb.service_proid=?";
        $sub_stat=$db->prepare($sub_sql);
        $sub_stat->bindparam(1,$tot_catelog_id[$i]['catelogid']);
        $sub_stat->bindparam(2,$tot_catelog_id[$i]['catelogid']);
        $sub_stat->bindparam(3,$_SESSION['service_id']);
        $sub_stat->setFetchMode(PDO::FETCH_ASSOC);
        $sub_stat->execute();
        $line_chart_data=$sub_stat->fetchAll();
        // var_dump($line_chart_data);
        $line_graph[]=$line_chart_data;
    }
    $data[]=$line_graph;
    echo json_encode($data);
    }
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
?>