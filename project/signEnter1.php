<?php
    include('menu.php');
    try{
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $status="pending";

    include('connect.php');
    

    $query="INSERT INTO `user`(`username`, `password`, `status`) VALUES ('$uname','$pass','$status')";

    $con=mysqli_connect($server,$username,$password,$db);
    $result=mysqli_query($con,$query);

    if(!$result){
        die("error");
    }
    else {
        echo "<div class='success_container'>";
        echo "<div class='success_message_box'>";
        echo "Data entered succesfully";
        echo "<br>";
        echo "</div>";
        echo "</div>";
    }
    }
    catch(Exception $e){
        die($e->getMessage());
    }
?>
  