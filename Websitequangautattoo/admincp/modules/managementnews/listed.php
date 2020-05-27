<?php
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
	$sql="select * from managementnews order by id_news desc";
	$run=mysqli_query($conn,$sql);
?>
<form action="modules/managementnews/handle.php?id=<?php echo $row['id_news'] ?>" method="post" enctype="multipart/form-data">
<table class="table table-bordered table-hover">
  <tr><a href="modules/managementnews/add.php">Add</a></tr>
  <tr>
    <td colspan="7"><div align="center">List news</div></td>
  </tr>
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Article name</div></td>
    <td><div align="center">Img</div></td>
    <td><div align="center">Summary</div></td>
    <td><div align="center">Content</div></td>
    <td colspan="2"><div align="center">Management</div></td>
  </tr>
  <?php
	$i=0;
	while($row=mysqli_fetch_array($run)){
?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['articlename'] ?></td>
    <td><img src="modules/managementnews/img/<?php echo $row['img'] ?>" width="60" height="60" ></td>
    <td><?php echo $row['summary'] ?></td>
    <td><?php echo $row['content']; ?></td>
    <td><a href="modules/managementnews/modify.php?id=<?php echo $row['id_news'] ?>">Modify</a></td>
    <td><a onclick="return window.confirm('Are you sure you want to delete?');" href="modules/managementnews/handle.php?id=<?php echo $row['id_news'] ?>">Delete</a></td>
  </tr>
  <?php
  	$i++;
	}
?>

</table>
</form>