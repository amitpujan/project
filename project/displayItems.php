<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="all.css">
    <style>
        .table_show_container{
            width: 100%;
            padding:30px
        }
        .table_show{
          width: 80%;
          
        }
        .table_show td {
            height: 40px; 
            padding: 10px;
        }
    </style>
</head>
<body>
<?php
include('menu.php');
 $server="localhost";
 $username="root";
 $password="";
 $db="pujan";
$q="SELECT * FROM `itementry`";
$con=mysqli_connect("$server","$username","$password","$db");
$result=mysqli_query($con,$q);

echo "<div class='table_show_container'>";
echo "<table border='1' style='border-collapse: collapse;' class='table_show'>"; // corrected class attribute
echo "<tr><td>Id</td><td>Item Name</td><td>Price</td><td>Stock</td><td>Photo</td><td>Remarks</td><td colspan=2 >Action</td></tr>";
while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
    $id=$row[0];
    echo "<tr>";
    foreach($row as $value){
        echo "<td>";
        echo "$value";
        echo "</td>";
    }
    echo "<td><a href='delete.php?id=$id' onclick='return confirm(\"Are you sure to delete?\")'><button>Delete</button></a></td>"; 
    echo "<td><a href='viewitem.php?id=$id'><button>View</button></a></td>"; 
    
    echo "</tr>";
}

echo "</table>";
echo "</div>";

?>
</body>
</html>
