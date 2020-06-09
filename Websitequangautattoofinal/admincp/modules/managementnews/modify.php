<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
	
?>
<?php
	
	$sql="select * from managementnews where id_news='$_GET[id]'";
	$run=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($run);
?>
<form action="handle.php?id=<?php echo $row['id_news'] ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Modify news</div></td>
  </tr>
  <tr>
    <td width="176"><div align="left">Article name</div></td>
    <td width="106"><input type="text" name="articlename" value="<?php echo $row['articlename'] ?>"></div></td>
  </tr>
  <tr>
    <td><div align="left">Img</div></td>
    <td><input type="file" name="img"><img src="modules/managementnews/uploads/<?php echo $row['img'] ?>" width="60" height="60" /></td>
  </tr>
  <tr>
    <td><div align="left">Summary</div></td>
    <td><textarea name="summary" cols="40" rows="15"><?php echo $row['summary'] ?></textarea></div></td>
  </tr>
  <tr>
    <td><div align="left">Content</div></td>
    <td><textarea name="content" cols="40" rows="15"><?php echo $row['content'] ?></textarea></div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
        <input type="submit" name="modify" id="modify" value="Modify">
    </div></td>
  </tr>
</table>
<form>