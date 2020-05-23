<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
?>
<?php
	$sql_producttype="SELECT * FROM producttype ORDER BY no";
	$query=mysqli_query($conn,$sql_producttype);
?>
<p class="left-titleproduct">Products</p>
    <div class="left-listproduct">
        <ul>
        <?php
			while ($row_product=mysqli_fetch_array($query)){
        ?>
           <li><a href="index.php?xem=detailsofproducttype&id=<?php echo $row_product['id_producttype'] ?>"><button class="left-dropbtn"><?php echo $row_product['producttypename']?></button></a></li>
                      <?php
			}
                      ?>
                    </ul> 
               </div>
           