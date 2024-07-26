<?php include('menu.php'); 

try{
    $id=$_GET['id'];

    include('connect.php');
    $q="UPDATE `user` SET `status`='activated' WHERE id=$id"; 
    $result=mysqli_query($con,$q);
        echo "Data activated successfully";

}
catch(Exception $e){
    
    die($e ->getMessage());
}
?>