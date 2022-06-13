<?php
    session_start();
    require_once("../../inc/connection.php");
    extract($_POST);
    var_dump($_POST);
    try
    {
        $sql="SELECT * from admin where email=?";
        $statement=$db->prepare($sql);
        $statement->bindparam(1,$email);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute();
        $table=$statement->fetch();
        var_dump($table);
        $user_hash_pass=password_hash($table['password'],PASSWORD_DEFAULT);
        $result=password_verify($password,$table['password']);
        if($result==true)
        {
            // $_SESSION['message'] = "Login successfull";
            $_SESSION['message']="Login Succefully";
            $map="../dashboard_admin.php";
            $_SESSION['admin_id']=$table['id'];
            var_dump($_SESSION);
        }
        else
        {
            $_SESSION['error']="Login attemp failed";
            $map="../index.php";
        }
    }
    catch(PDOException $error)
    {
        LogError($error,__FILE__);
    }
    header("location:$map");
?>