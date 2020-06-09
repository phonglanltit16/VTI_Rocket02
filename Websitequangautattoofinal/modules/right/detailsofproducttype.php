<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
?>
<?php
	$id=$_GET['id'];
	$sql_producttype="SELECT *FROM producttype WHERE id_producttype='$id'";
	$query_producttype=mysqli_query($conn,$sql_producttype);
	$row_producttype=mysqli_fetch_array($query_producttype);
?>
<div><p class="right-titleproduct"><?php echo $row_producttype['producttypename'] ?></p></div>
<div class="allproduct">
    <ul>
		<?php
        $sql_details="select *from detailsproduct where id_producttype='$id'";
        $query=mysqli_query($conn,$sql_details);
        ?>
        <?php
        while($row_details=mysqli_fetch_array($query)){
        ?>
        <li><a href="index.php?xem=detailsproduct&id=<?php echo $row_details['id_product'] ?>">
        <img src="admincp/modules/managementofdetailsproduct/uploads/<?php echo $row_details['img']?>" width="200" height="200">
        <p>Price: <?php echo $row_details['price'] ?>VND</p>
        <p>Details</p>
        </a></li>
        <?php
        }
        ?>
    </ul>
</div>
