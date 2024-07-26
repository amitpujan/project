
<?php include('menu.php'); ?>
    <div class="ok">
            <form action="enter.php" method="post" enctype="multipart/form-data">
                <label>Item name</label>
                <input type="text" name="itemname">

                <label>Price</label>
                <input type="text" name="price">

                <!-- <label>Quantity</label>
                <input type="number" name="Quantity"> -->

                <label>Photo</label>
                <input type="file" name="photo"  style="width: auto;">

                <label>Remarks</label>
                <input type="text" name="Remarks">
                <br>
                <input type="submit" name="submit" style="width: 70px; padding:10px; border-radius:10px; " >
            </form>
    </div>


