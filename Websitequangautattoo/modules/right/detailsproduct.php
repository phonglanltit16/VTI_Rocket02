<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
?>
<?php
	$sql_detailsproduct="select *from detailsproduct where id_product=$_GET[id]";
	$query_detailsproduct=mysqli_query($conn,$sql_detailsproduct);
	$row_detailsproduct=mysqli_fetch_array($query_detailsproduct);
?>
<table width="300" border="1">
  <tr>
    <td colspan="2"><div align="center">Details Product</div></td>
  </tr>
  <tr>
    
    <td><img src="admincp/modules/managementofdetailsproduct/uploads/<?php echo $row_detailsproduct['img'] ?>" width="200" height="200" /></td>
    <td>Price:<?php echo $row_detailsproduct['price'] ?>VND</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Description</div></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $row_detailsproduct['description'] ?></td>
  </tr>
  
</table>
<a href="index.php?xem=cart&add1=<?php echo $row_detailsproduct['id_product'] ?>"><img src="img/botton/buy1.jpg" height="150" width="150" >
