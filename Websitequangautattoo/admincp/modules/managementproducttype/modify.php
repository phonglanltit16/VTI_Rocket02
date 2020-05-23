<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
	
	$id = $_GET['id'];
	$sql="select * from producttype where id_producttype=$id";
	$run=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($run);

	

?>
<form action="handle.php?id=<?php echo $row['id_producttype']?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Modify product type</div></td>
  </tr>
  <tr>
    <td width="52">Product type name </td>
    <td width="209"><input type="text" name="producttypename" value=" <?php echo $row['producttypename'] ?>"></td>
  </tr>
  <tr>
    <td>No</td>
    <td ><input type="text" name="no" value="<?php echo $row['no'] ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
        <input type="submit" name="modify" id="modify" value="Modify">
      </div></td>
  </tr>
</table>
</form>