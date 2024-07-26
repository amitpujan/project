<?php
    include('menu.php');
    $server="localhost";
    $username="root";
    $password="";
    $db="pujan";
    $id=$_GET['id'];
    
    $q="DELETE FROM `itementry` WHERE id=$id";
    $con=mysqli_connect("$server","$username","$password","$db");
    $result=mysqli_query($con,$q);



?>