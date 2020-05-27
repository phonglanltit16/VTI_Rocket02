<?php
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
	$sql="select * from producttype order by id_producttype desc";
	$run=mysqli_query($conn,$sql);
?>
<form action="modules/managementproducttype/handle.php?id=<?php echo $row['id_producttype'] ?>" method="post" enctype="multipart/form-data">
<table class="table table-bordered table-hover">
	<tr><a href="modules/managementproducttype/add.php">Add</a></tr>
  <tr>
    <td width="10%"><div align="center">ID</div></td>
    <td width="52%"><div align="center">Product type name</div></td>
    <td width="9%"><div align="center">No</div></td>
    <td colspan="2"><div align="center">Management</div></td>
  </tr>
<?php
	$i=0;
	while($row=mysqli_fetch_array($run)){
?>
  <tr>
    <td><div align="center"><?php echo $i; ?></div></td>
    <td><?php echo $row['producttypename'] ?></td>
    <td><div align="center"><?php echo $row['no'] ?></div></td>
    <td><a href="modules/managementproducttype/modify.php?id=<?php echo $row['id_producttype'] ?>" >Modify</a></td>
    
    <td><a onclick="return window.confirm('Are you sure you want to delete?');" href="modules/managementproducttype/handle.php?id=<?php echo $row['id_producttype'] ?>">Delete</a></td>
  </tr>
  <?php
  	$i++;
	}
  ?>
</table>
</form>