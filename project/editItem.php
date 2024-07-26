 <?php
include('menu.php');
include('connect.php');
$id=$_GET['id'];    
$q="SELECT * FROM `itementry` where id=$id";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result,MYSQLI_NUM);
?>
  <div class="edititem-main-content"> 
<div class="edititem-title"><h2>Edit Item</h2></div>
<div class="edititem-ok">
            <form action="updateItems.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
                <label>Item name</label>
                <input type="text" name="itemname" value="<?php echo $row[1]?>">

                <label>Price</label>
                <input type="text" name="price" value="<?php echo $row[2]?>">

                <!-- <label>Quantity</label>
                <input type="number" name="Quantity"> -->

                <label>Photo</label>
                <input type="file" name="photo"  style="width: auto;" value="<?php echo $row[4]?>">

                <label>Remarks</label>
                <input type="text" name="Remarks" value="<?php echo $row[5]?>">
                <br>
                <input type="submit" value="Update" style="width: 70px; padding:10px; border-radius:10px; margin-top:10px " >
            </form>
    </div>
</div> 

   