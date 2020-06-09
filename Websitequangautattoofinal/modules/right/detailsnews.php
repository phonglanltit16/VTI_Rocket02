<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
  $id= $_GET['id'];
  $sql_detailsnews="SELECT * FROM managementnews WHERE id_news=$id;";
  $query_detailsnews=mysqli_query($conn,$sql_detailsnews);
  $row_detailsnews=mysqli_fetch_array($query_detailsnews);
?>
    <div align="center" style="font:'Times New Roman'; font-size: 28px;"><strong><?php echo $row_detailsnews['articlename'] ?></strong><br>
    <img src="admincp/modules/managementnews/uploads/<?php echo $row_detailsnews['img'] ?>" width="200" height="200" />
    <div style="font:'Times New Roman'; font-size: 14px;"><?php echo $row_detailsnews['content'] ?><br><p style="float:right"><i>Sưu tầm.</i></p></div>
    
   