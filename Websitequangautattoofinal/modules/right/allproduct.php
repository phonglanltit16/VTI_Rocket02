<?php
	$sql_all="SELECT *FROM detailsproduct";
	$query=mysqli_query($conn,$sql_all);
?>
<div><p class="right-titleproduct">All Product</p></div>
<div class="allproduct">
    <ul>
        <?php
        while($row_all=mysqli_fetch_array($query)){
        ?>
        <li><a href="index.php?xem=detailsproduct&id=<?php echo $row_all['id_product'] ?>">
            <img src="admincp/modules/managementofdetailsproduct/uploads/<?php echo $row_all['img']?>" width="180" height="180">
            <p>Price: <?php echo $row_all['price'] ?>VND</p>
            <p>Details</p>
        </a></li>
        <?php
        }
        ?>
    </ul>
</div>
