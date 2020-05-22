<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
?>
<?php
	session_start();
?>
<h1><strong>SHOPPING CART</strong></h1>
<?php
if(isset($_SESSION['login'])){ 
			echo 'Hello '.$_SESSION['login'];
	}
?>
<table width="100%" border="1">
  <tr>
    <td >STT</td>
	<td >Img</td>
	<td >Description</td>
    <td >Price</td>
    <td >Num</td>
	<td >Total</td>
	<td colspan="3">Edit</td>
  </tr>
  <?php
	//session_destroy();
	if(isset($_GET['add1'])&&!empty($_GET['add1'])){
		$id=$_GET['add1'];
		@$_SESSION['cart_'.$id]+=1;
	}
	$valueall=0;
	$totalall=0;
	//cộng sản phẩm đã chọn
	if(isset($_GET['cong'])){
		$_SESSION['cart_'.$_GET['cong']]+=1;
		header('location:index.php?xem=cart');
	}
	//bớt sản phẩm đã chọn
	if(isset($_GET['bot'])){
		$_SESSION['cart_'.$_GET['bot']]--;
		header('location:index.php?xem=cart');
	}
	//bỏ sản phẩm đã chọn


	//hiển thị sản phẩm đã chọn
	$i=0;
	foreach($_SESSION as $name1 => $value1){
	$i++;	
		if($value1>0){
			if(substr($name1,0,5)=='cart_'){
				$id=substr($name1,5,strlen($name1)-5);
				$sql="SELECT * FROM detailsproduct WHERE id_product='".$id."'";
				$run=mysqli_query($conn, $sql);
?>		
  <?php 
  while($row=mysqli_fetch_array($run)){
  ?>
  <tr>
    <td ><?php echo $i; ?></td>
	<td ><img src="admincp/modules/managementofdetailsproduct/uploads/<?php echo $row['img'] ?>" width="200" height="200" /></td>
	<td><?php echo $row['description'];?></td>
    <td><?php echo $row['price'] ;?></td>
    <td><?php echo $value1 ;?></td>
	<td><?php echo $total=$row['price']*$value1;?>VND</td>
    <td><a href="index.php?xem=cart&cong='.$id.'">[+]</a></td>	
    <td><a href="index.php?xem=cart&bot='.$id.'">[-]</a></td>
	<td><a href="index.php?xem=cart&bo='.$id.'">delete</a></td>
  </tr>
  <?php 
  
  }}
  $valueall+=$value1;
  $totalall+=$total;
  }}
  ?>
   
  <tr>
  	<td colspan="4">Total all</td>
    <td><?php echo $valueall ?></td>
    <td><?php echo $totalall ?>VND</td>
    <td colspan="3"></td>
  </tr>

  </table>
<a href="index.php?xem=payment"><img src="img/botton/pay1.jpg" height="80" width="120" style="float:right">
<?php
	
		if(isset($_GET['xem'])&&$_GET['xem']=='logout'){
		unset($SESSION['login']);
		header('location:index.php?xem=cart');
	}
?>