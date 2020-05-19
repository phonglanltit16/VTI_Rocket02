<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
?>
<h1><strong>SHOPPING CART</strong></h1>

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
	session_start();
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
	foreach($_SESSION as $name1 => $value1){
		if($value1>0){
			if(substr($name1,0,5)=='cart_'){
				$id=substr($name1,5,strlen($name1)-5);
				$sql="SELECT * FROM detailsproduct WHERE id_product='".$id."'";
				$run=mysqli_query($conn, $sql);
?>		
  <?php
  $i=1;
  while($row=mysqli_fetch_array($run)){
	 
  ?>
  <tr>
    <td ><?php echo $i;?></td>
	<td ><img src="admincp/modules/managementofdetailsproduct/uploads/<?php echo $row['img'] ?>" width="200" height="200" /></td>
	<td ><?php echo $row['description'];?></td>
	
    <td ><?php echo $row['price'] ;?></td>
    <td ><?php echo $value1 ;?></td>
	<td ><?php echo $total=$row['price']*$value1;?>VND</td>
	<td ><a href="index.php?xem=cart&cong=<?php '.$id.' ?>">[+]</a></td>
	<td ><a href="index.php?xem=cart&bot=<?php '.$id.' ?>">[-]</a></td>
	<td ><a href="index.php?xem=cart&bo=<?php '.$id.' ?>">delete</a></td>
  </tr>
  <?php 
   $i++;
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
				
					