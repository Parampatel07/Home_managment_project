<?php
require_once("../inc2/check_admin_login.php");
require_once("../../inc/connection.php");
extract($_POST);
var_dump($_POST);
try
{
    $sql="INSERT into category(title,description,photo) VAlUES (?,?,?)";
    $statement=$db->prepare($sql);
    $statement->bindparam(1,$title);
    $statement->bindparam(2,$description);
    $image=rand(9,99).rand(9,99).rand(9,99).$_FILES['photo']['name'];
    $_SESSION['image']=$image;
    $statement->bindparam(3,$image);
    move_uploaded_file($_FILES['photo']['tmp_name'],"../images/category/$image");
    $statement->execute();
    $_SESSION['message']="Category is succesfully inserted";
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
header("location:../category_management.php");
?>