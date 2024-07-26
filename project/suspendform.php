<?php include('menu.php'); 

try{
    $id=$_GET['id'];

    include('connect.php');
    $q="UPDATE `user` SET `status`='suspend' WHERE id=$id"; 
    $result=mysqli_query($con,$q);
        echo "Data suspended successfully";

}
catch(Exception $e){
    
    die($e ->getMessage());
}
?>