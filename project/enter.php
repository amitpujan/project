<?php
    include('menu.php');
    try{
    $itemname=$_POST['itemname'];
    $price=$_POST['price'];
    $photo=$_FILES['photo']['name'];
    $Remarks=$_POST['Remarks'];
    $stock=0;
   
    
    $server="localhost";
    $username="root";
    $password="";
    $db="pujan";

    $query="INSERT INTO `itementry`( `Item Name`, `Price`, `Stock`, `Photo`, `Remarks`) VALUES ('$itemname','$price','$stock','$photo','$Remarks')";
    // $query="INSERT INTO `itementry`(`Item Nmae`, `Price`, `Stock`,'Photo', `Remarks`) VALUES ('$itemname','$price','$stock','$photo','$Remarks')";
    
//move file to htdocs folder
        move_uploaded_file($_FILES['photo']['tmp_name'],"project-image/".$photo);


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
  <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button {
            clear: both;
            background-color:white;
            color:black;
            border:2px solid green;

        }

        button:hover {
          background-color:black;
          color:white;
          border:2px solid  border:2px solid green;
            
        }
    .success_message_box {
        border: 2px solid green;
        padding: 10px;
        margin-top: 10px;
        background-color: lightgreen;
        height:50px;
        width: 100%;
}
    .success_container{
        display:flex;
        flex-direction: column;
        clear:both;
    }

 
    </style>
</head>
<body>
   <a href="menu.php"><buttonc class='success_container'>GO TO HOME</button></a> 
</body>
</html> -->