<?php
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
	$sql="select * from producttype,detailsproduct where producttype.id_producttype= detailsproduct.id_producttype  order by detailsproduct.id_product desc";
	$run=mysqli_query($conn,$sql);
?>
<form action="modules/managementofdetailsproduct/handle.php?id=<?php echo $row['id_product'] ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
	<tr><a href="modules/managementofdetailsproduct/add.php">Add</a></tr>
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Img</div></td>
    <td><div align="center">Price</div></td>
    <td><div align="center">Product type</div></td>
    <td><div align="center">No</div></td>
    <td colspan="2"><div align="center">Managament</div></td>
  </tr>
<?php
	$i=0;
	while($row=mysqli_fetch_array($run)){
?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><img src="modules/managementofdetailsproduct/uploads/<?php echo $row['img'] ?>" width="60" height="60" ></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['producttypename']; ?></td>
    <td><?php echo $row['no']; ?></td>
    <td><a href="modules/managementofdetailsproduct/modify.php?id=<?php echo $row['id_product'] ?>" >Modify</a></td>
    <td><a onclick="return window.confirm('Are you sure you want to delete?');" href="modules/managementofdetailsproduct/handle.php?id=<?php echo $row['id_product'] ?>">Delete</a></td>
  </tr>
<?php
  	$i++;
	}
?>

</table>
</form>