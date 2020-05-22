<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
?>
<script src="//tinymce.cacheflt.net/4.2/tinymce.min.js"></script>
  <script>tinymce.init({selector:'textarea'});</script>
<form action="handle.php" method="post" enctype="multipart/form-data">
<table width="250" border="1">
  <tr>
    <td colspan="2"><div align="center">Add details of product</div></td>
  </tr>
  <tr>
    <td>Img</td>
    <td><input type="file" name="img"></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="price"></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><textarea name="description" cols="40" rows="15"></textarea></td>
  </tr>
  <?php
  	$sql="select * from producttype";
	$run=mysqli_query($conn,$sql);
  ?>
  <tr>
    <td>Product type</td>
    <td>
    	<select name="producttype">
       	<?php
		While($row=mysqli_fetch_array($run)){
        ?>
        	<option value="<?php echo $row['id_producttype'] ?>"><?php echo $row['producttypename'] ?></option>
            <?php
				}
            ?>
        </select>
    </td>
  </tr>
  <tr>
    <td>No</td>
    <td><input type="text" name="no"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
    	<input type="submit" name="add" id="add" value="Add">
    </div></td>
  </tr>
</table>
</form>