<?php
    session_start();
    include('menu.php');
    
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
   

    include('connect.php');
    
    // $query="SELECT * FROM `user` WHERE `uname`='$uname' AND `pass`='$pass' `status`='active'";
    $query="select * from user where username='$uname' and password='$pass' and status='activated'";

    $con=mysqli_connect($server,$username,$password,$db);
    $result=mysqli_query($con,$query);

    if($row=mysqli_fetch_array($result)){
        $_SESSION['uname']=$uname;
        header("menu.php");
    }
    else {
        die("Log in failed");
    }
    
?>
  