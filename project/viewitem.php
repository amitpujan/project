<?php
include('menu.php');
include('connect.php');
$id=$_GET['id'];
$q="SELECT * FROM `itementry` WHERE id=$id";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result,MYSQLI_NUM);
?>
<div class="main-content">    
<div class="title"><h2>View item</h2></div>
    <div class="content">
        <div class="itemDisplay">
     <div class="img-container">   <img src="project-image/<?php echo $row[4];?>" alt="photo"> </div>
        <h4> Id: <?php echo $row[0];?></h4>
        <h4>Item: <?php echo $row[1];?></h4>
        <h4>Price: <?php echo $row[2];?></h4>   
        <h4>Stock: <?php echo $row[3];?></h4>
        <h4>Remarks: <?php echo $row[5];?></h4>
    </div>
    <a href="editItem.php?id=<?php echo $row[0];?>" >
        <button style="width: 70px; padding:10px; border-radius:10px;">Edit</button>
        </a>
    </div>
</div>