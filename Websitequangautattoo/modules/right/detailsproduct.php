<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
  $id_sp = $_GET['id'];
  $sql_detailsproduct="SELECT * FROM detailsproduct WHERE id_product=$id_sp;";
  $query_detailsproduct=mysqli_query($conn,$sql_detailsproduct);
  $row_detailsproduct=mysqli_fetch_array($query_detailsproduct);
?>
<div>
<table class="table table-bordered table-hover" width="800">
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
<a href="index.php?xem=cart&add1=<?php echo $row_detailsproduct['id_product']?>"><img src="img/botton/buy1.jpg" height="80" width="120" style="float:right"></a><br>
</div>

<form action="?xem=cart" method="post">
    	<fieldset>
        	<input type="hidden" name="id_product" value="<?php echo $row_detailsproduct['id_product']  ?>">
        	<input type="hidden" name="price" value="<?php echo $row_detailsproduct['price'] ?>">
        	<input type="hidden" name="img" value="<?php echo $row_detailsproduct['img'] ?>">
        	<input type="hidden" name="soluong" value="1">

        </fieldset>
    </form>




<?php
    $id_producttype = $row_detailsproduct['id_producttype'];    
	$sql_lienquan="SELECT * FROM detailsproduct WHERE id_producttype=$id_producttype AND id_product!=$id_sp ORDER BY RAND () LIMIT 3 ";
		$query_lienquan=mysqli_query($conn,$sql_lienquan);
		$count_lienquan=mysqli_num_rows($query_lienquan);
		if($count_lienquan>0){
			
?>
    <div class="sanphamlienquan">
    	<div class="panel panel-primary">
            <div class="panel-body">Sản phẩm liên quan</div>
        </div> 
        <ul>
			<?php
            while($row_lienquan=mysqli_fetch_array($query_lienquan)){
            ?>
            <li><a href="index.php?xem=detailsproduct&id=<?php echo $row_lienquan['id_product'] ?>"><img src="admincp/modules/managementofdetailsproduct/uploads/<?php echo $row_lienquan['img']?>" width="180" height="180">
                <p>Price: <?php echo $row_lienquan['price'] ?>VND</p>
                <p>Details</p>
             </li>
			
 <div>
 	
 </div>
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