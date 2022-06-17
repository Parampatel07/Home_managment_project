<?php
session_start();
require_once("../../inc/connection.php");
extract($_POST);
var_dump($_POST);
$sql="UPDATE category set title=?,description=?,photo=? where id=?";
try
{
    $query=$db->prepare($sql);
    $query->bindparam(1,$title);
    $query->bindparam(2,$description);
    // $query->bindparam(1,$title);
    var_dump($_FILES['photo']);
    if(strlen($_FILES['photo']['name'])==0)
    {
        $query->bindparam(3,$oldimage);
    }
    else
    {
        $newimage=$_FILES['photo']['name'];
        $query->bindparam(3,$newimage);
        unlink("images/category/$oldimage");
        move_uploaded_file($newimage,"../images/category/$newimage");
    }
    $query->bindparam(4,$categoryid);
    // $query->execute();
    $_SESSION['message']="Category updated successfully";   
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
// header("location:../category_management.php");
?>