<?php
session_start();
require_once("../inc/connection.php");
// echo "serivce dashboard";
try
{
    $sql="SELECT 'service_pro_total' AS service_book, COUNT(*) AS row_count FROM house_management .service_provider UNION SELECT 'catelog_total' AS catelog, COUNT(*) AS row_count FROM house_management.catelog UNION SELECT 'service_pending' AS service_book,COUNT(*) AS row_count FROM house_management.service_book WHERE STATUS = 2 UNION SELECT 'service_done' AS service_book,COUNT(*) AS row_count FROM house_management.service_book WHERE STATUS = 3 UNION SELECT 'booked/completed' AS service_book,COUNT(*) AS row_count FROM house_management.service_book WHERE month(servicedate)=9 UNION

    SELECT 'total_requested' AS service_requested ,COUNT(*) AS row_count FROM house_management.service_book WHERE status=1 UNION
    
    SELECT 'total_accepted' AS service_requested ,COUNT(*) AS row_count FROM house_management.service_book WHERE status=2 UNION
    
    SELECT 'total_served' AS service_requested ,COUNT(*) AS row_count FROM house_management.service_book WHERE status=3 UNION
    
    SELECT 'total_rejected' AS service_requested ,COUNT(*) AS row_count FROM house_management.service_book WHERE status=4";
    $stat=$db->prepare($sql);
    $stat->setFetchMode(PDO::FETCH_ASSOC);
    $stat->execute();
    $table=$stat->fetchall();
    // echo json_encode($table);
    
    $graph_array=array();
    $month=1;
    for($month=1;$month<13;$month++)
    {
        $sql="SELECT 'booked/completed' AS service_book,COUNT(*) AS row_count FROM house_management.service_book WHERE month(servicedate)=? and status =2";
        $graph=$db->prepare($sql);
        $graph->bindparam(1,$month);
        $graph->setFetchMode(PDO::FETCH_ASSOC);
        $graph->execute();
        $graph_table=$graph->fetch();
        // echo "<br><br><br><br>";
        // echo $month;
        // var_dump($graph_table);  
        $graph_array[]=$graph_table['row_count'];
    }
    // echo "<br><br><br><br>";
    // echo json_encode($graph_array);
    $data=array();
    $data[]=$table;
    $data[]=$graph_array;
    // $data=json_encode($data);
    // echo "<br><br><br><br>";
    // print_r($graph_array);
    // $graph_array=array();
    $month=1;
    for($month=1;$month<13;$month++)
    {
        $sql="SELECT 'booked/completed' AS service_book,COUNT(*) AS row_count FROM house_management.service_book WHERE month(servicedate)=? and status = 3";
        $graph=$db->prepare($sql);
        $graph->bindparam(1,$month);
        $graph->setFetchMode(PDO::FETCH_ASSOC);
        $graph->execute();
        $graph_table=$graph->fetch();
        // echo "<br><br><br><br>";
        // echo $month;
        // var_dump($graph_table);  
        $graph_array_2[]=$graph_table['row_count'];
    }
    // echo "<br><br><br><br>";
    // echo json_encode($graph_array);
    $data[]=$graph_array_2;
    // echo"<br><br><br><br>";
    // print_r($graph_array_2);
    // echo"<br><br><br><br>";
    
    $top_cate="SELECT * FROM category where id in(SELECT categoryid from service_provider where id in (SELECT DISTINCT service_proid FROM service_book))";
    $stat=$db->prepare($top_cate);
    $stat->setFetchMode(PDO::FETCH_ASSOC);
    $stat->execute();
    $top_category_data=$stat->fetchAll();
    // echo "<br><br><br><br>";
    // print_r($top_category_data);
    
    $data[]=$top_category_data;
    
    $top_catelog="SELECT c.*,sp.title 'service_pro' FROM catelog c, service_provider sp where c.id in (SELECT DISTINCT catelogid FROM service_book) and sp.id=c.service_proid";
    $stat=$db->prepare($top_catelog);
    $stat->setFetchMode(PDO::FETCH_ASSOC);
    $stat->execute();
    $top_catelog_data=$stat->fetchAll();
    
    $data[]=$top_catelog_data;
    $data=json_encode($data);
    print_r($data);
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
