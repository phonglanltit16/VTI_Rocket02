<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
	$id = $_GET['id'];
?>
<?php
	$sql="select * from detailsproduct where id_product=$id";
	$run=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($run);
?>

<form action="handle.php?id=<?php echo $row['id_product']?>" method="post" enctype="multipart/form-data">
<table width="200" border="1">
  <tr>
    <td colspan="2"><div align="center">Modify details of product</div></td>
  </tr>
  <tr>
    <td>Img</td>
    <td><input type="file" name="img"><img src="modules/managementofdetailsproduct/uploads/<?php echo $row['img'] ?>" width="60" height="60" /></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="price" value="<?php echo $row['price'] ?>"></td>
  </tr>
   <tr>
    <td>Quatity</td>
    <td><input type="text" name="soluong" value="<?php echo $row['soluong'] ?>"></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><textarea name="description" cols="40" rows="15"><?php echo $row['description'] ?></textarea></td>
  </tr>
  <?php
  	$sql_producttype="select * from producttype";
	$run_producttype=mysqli_query($conn,$sql_producttype);
  ?>
  <tr>
    <td>Product type</td>
    <td>
    	<select name="producttype">
       	<?php
		While($row_producttype=mysqli_fetch_array($run_producttype)){
			if($row['id_producttype']==$row_producttype['id_producttype']){
        ?>
        <option selected="selected" value="<?php echo $row_producttype['id_producttype'] ?>"><?php echo $row_producttype['producttypename'] ?></option>
        <?php
		}else{
	    ?>
        <option value="<?php echo $row_producttype['id_producttype'] ?>"><?php echo $row_producttype['producttypename'] ?></option>
            <?php
				}
				}
            ?>
        </select>
    </td>
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