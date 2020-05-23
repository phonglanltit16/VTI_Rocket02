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
