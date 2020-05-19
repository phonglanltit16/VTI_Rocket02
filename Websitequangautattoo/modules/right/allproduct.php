<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
?>
<?php
	$sql_all="select *from detailsproduct";
	$query=mysqli_query($conn,$sql_all);
?>
<div><p class="right-titleproduct">All Product</p></div>
<div class="allproduct">
    <div class="col-lg-3 col-xs-6 col-sm-4">
    <div class="responsive">
    	<div class="gallery">
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
          </div>
    </div>
</div>