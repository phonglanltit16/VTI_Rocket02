<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
?>
<?php
	$sql_detailsproduct="SELECT * FROM detailsproduct WHERE id_product='$_GET[id];";
	$query_detailsproduct=mysqli_query($conn,$sql_detailsproduct);
	$row_detailsproduct=mysqli_fetch_array($query_detailsproduct);
?>
<div>
<table width="300" border="1">
  <tr>
    <td colspan="2"><div align="center">Details Product</div></td>
  </tr>
  <tr>
    
    <td rowspan="2"><img src="admincp/modules/managementofdetailsproduct/uploads/<?php echo $row_detailsproduct['img'] ?>" width="200" height="200" /></td>
    <td>Price:<?php echo $row_detailsproduct['price'] ?>VND</td>
  </tr>
  <tr>
    <td>Số lượng:<?php echo $row_detailsproduct['soluong'] ?></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Description</div></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $row_detailsproduct['description'] ?></td>
    
  </tr>
  
</table>
<input type="submit" name="add_to_cart" value="Mua hàng" style="margin:10px;width:100px;height:40px;background:#9F6;color:#000;font-size:18px;border-radius:8px;" />
</div>
<?php
		$sql_lienquan="SELECT id_producttype FROM detailsproduct WHERE id_producttype= AND id_product!=$id_producttype ORDER BY RAND () LIMIT 3 ";
		$query_lienquan=mysqli_query($conn,$sql_lienquan);
		$count_lienquan=mysqli_num_rows($query_lienquan);
		if($count_lienquan>0){
			
?>
    <div class="sanphamlienquan">
    <div class="tieude">Sản phẩm liên quan</div>
        <ul>
			<?php
            while($row_lienquan=mysqli_fetch_array($query_lienquan)){
            ?>
            <li><a href="index.php?xem=detailsproduct&id=<?php echo $row_lienquan['id_product'] ?>"><img src="admincp/modules/managementofdetailsproduct/uploads/<?php echo $row_lienquan['img']?>" width="180" height="180">
                <p>Price: <?php echo $row_lienquan['price'] ?>VND</p>
                <p>Details</p>
             </li>
			<?php
                }
            ?>
        </ul>
    </div><!-- Ket thuc box sp liên quan -->
	<?php
		}else{
			echo'<div class="tieude">Sản phẩm liên quan</div>';
			echo '<p style="padding:30px;">Hiện chưa có thêm sản phẩm nào</p>';
		}
    ?>
    
<div class="clear"></div>
          