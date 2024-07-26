<?php include('menu.php'); 

try{
    $id=$_GET['id'];
    $itemname=$_POST['itemname'];
    $price=$_POST['price'];
    $photo=$_FILES['photo']['name'];
    $Remarks=$_POST['Remarks'];
    $stock=0;

    include('connect.php');
    if($_FILES['photo']['name']==""){
        $q="UPDATE `itementry` SET `Item Name`='$itemname',`Price`=$price,`Photo`='$photo',`Remarks`='$Remarks' WHERE id=$id";
    }
    else{
        $q="UPDATE `itementry` SET `Item Name`='$itemname',`Price`=$price,`Photo`='$photo',`Remarks`='$Remarks' WHERE id=$id";
        move_uploaded_file($_FILES['photo']['tmp_name'],"project-image/".$photo);
    }  
    $result=mysqli_query($con,$q);
    
   
        echo "Data entered successfully";

}
catch(Exception $e){
    echo $q;
    die($e ->getMessage());
}
?>