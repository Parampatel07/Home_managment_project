<?php
require_once("../../inc/connection.php");
extract($_POST);
extract($_REQUEST);
// print_r($_POST);
// print_r($_FILES);
// echo "hiee this is from update catelog";
try
{
    $sql="UPDATE catelog SET title=?,detail=?,amount=?,photo=? where id=?";
    $stat=$db->prepare($sql);
    $stat->bindparam(1,$title);
    $stat->bindparam(2,$description);
    $stat->bindparam(3,$amount);
    if(strlen($_FILES['image']['name'])>=1)
    {
        // echo "image is given";
        $photo=rand(10,99).rand(10,99).rand(10,99).$_FILES['image']['name'];
        // echo $photo;
        move_uploaded_file($_FILES['image']['tmp_name'],"../images/catelog/".$photo);
        unlink("../images/catelog/".$oldimage);
    }
    else
    {
        $photo=$_REQUEST['oldimage'];
    }
    $stat->bindparam(4,$photo);
    $stat->bindparam(5,$catelogid);
    // echo $catelogid;
    $stat->execute();
    // echo "succesfull";
    echo "Catelog updated succesfully";
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
?>