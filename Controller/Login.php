<?php
include '../Model/Database.php';
include '../Model/Muser.php';

if(isset($_POST['login']))
{
    session_start();
    session_destroy();
    $u = $_POST['username'];
    $p = $_POST['password'];
    
    $user = new Muser;
    $user->set_username($u);
    $user->set_password($p);
    
    if($user->check_uer() == 1)
    {
        session_start();
        $_SESSION['username']=$u;
        header("location: ../index.php");
    }
    else
    {
        session_start();
        $_SESSION['thongbao']='username hoac password khong dung';
        header("location: ../index.php");
    }
}

if(isset($_GET['a'])=='logout')
{
    session_start();
    session_destroy();
    header("location: ../index.php");
}






?>