<?php
	session_start();
	error_reporting(0);
?>
<h1><strong>SHOPPING CART</strong></h1>
<?php
if(isset($_SESSION['login'])){ 
	echo 'Hello '.$_SESSION['login'];
	echo'<p><a href="index.php?xem=cart&thoat=1" style="text-decoration:underline; margin-left:10px; float: right;">Đăng Xuất</a></p>';
}

echo '<table width="100%" border="1">';
	echo '<tr>';
		echo '<td><div align="center">STT</div></td>';
		echo '<td><div align="center">IMG</div></td>';
		echo '<td><div align="center">Description</div></td>';
		echo '<td><div align="center">Price</div></td>';
		echo '<td><div align="center">Num</div></td>';
		echo '<td><div align="center">Total</div></td>';
		echo '<td colspan="3"><div align="center">Edit</div></td>';
	echo '</tr>';

	//session_destroy();
	if(isset($_GET['add1'])&&!empty($_GET['add1'])){
		$id=$_GET['add1'];
		@$_SESSION['cart'.$id]+=1;
	}
	$valueall=0;
	$totalall=0;
	//đăng xuất 
	if(isset($_GET['thoat'])&&$_GET['thoat']==1){
		unset($_SESSION['login']);
		header('location:index.php?xem=cart');
	}
	//cộng số lượng sản phẩm
	if(isset($_GET['cong'])){
		$_SESSION['cart'.$_GET['cong']]+=1;
		header('location:index.php?xem=cart');
	}
	//trừ số lượng sản phẩm
	if(isset($_GET['tru'])){
		$_SESSION['cart'.$_GET['tru']]--;
		header('location:index.php?xem=cart');
	}
	//xóa sản phẩm
	if(isset($_GET['xoa'])){
		$_SESSION['cart'.$_GET['xoa']]=0;
		header('location:index.php?xem=cart');
	}
	//xóa toàn bộ giỏ hàng
	if(isset($_GET['xoatoanbo'])&&$_GET['xoatoanbo']==1){
		session_destroy();
		header('location:index.php?xem=cart');
	}
	//hiển thị sản phẩm đã chọn
	$i=0;
	foreach($_SESSION as $name1 => $value1){
	$i++;	
		if($value1>0){
			if(substr($name1,0,4)=='cart'){
				$id=substr($name1,4,strlen($name1)-4);
				$sql="SELECT * FROM detailsproduct WHERE id_product='".$id."'";
				$run=mysqli_query($conn, $sql);
  				while($row=mysqli_fetch_array($run)){
 
			echo'<tr>';
				echo'<td >'.$i.'</td>';
				echo'<td><img src="admincp/modules/managementofdetailsproduct/uploads/'.$row['img'].'" width="100" height="100" /></td>';
				echo'<td>'.$row['description'].'</td>';
				echo'<td>'.$row['price'].'VND</td>';
				echo'<td><div align="center">'.$value1 .'</div></td>';
				echo'<td>'.$total=$row['price']*$value1.'VND</td>';
				echo'<td><a href="index.php?xem=cart&cong='.$id.'" style="margin-right:2px;"><img src="img/plus.png" width="40"; height="40"></a>';
				echo'<td><a href="index.php?xem=cart&tru='.$id.'" style="margin-right:2px;"><img src="img/subtract.png" width="40"; height="40"></a>';
				echo'<td><a href="index.php?xem=cart&xoa='.$id.'" style="margin-right:2px;"><img src="img/deletered.png" width="40"; height="40"></a>';
			echo'</tr>';
   				}
			}
  $valueall=$valueall+ $value1;
  $totalall+=$total;
		}
	}
  
  ?>
   
  <tr>
  	<td colspan="4">Total all</td>
    <td><div align="center"><?php echo $valueall ?></div></td>
    <td><?php echo $totalall ?>VND</td>
    <td colspan="3"></td>
  </tr>

  </table>
<button type="button" class="btn btn-danger" ><a href="index.php?xem=cart&xoatoanbo=1" style="color:black">Xóa toàn bộ</a></button>	
<?php
	if(isset($_SESSION['login'])){
?>
 <button type="button" class="btn btn-primary" style="float:right"><a href="index.php?xem=thanhtoan" style="color:#000;margin:5px;">Thanh toán</a></button>
<?php
	}
?>
<ul	class="control">
              <p><a href="index.php">Tiếp tục mua hàng</a></p>
                <p><a href="?xem=signup">Đăng ký mới/</a><a href="?xem=login">Bạn đã có tài khoản</a></p>
                
        	</ul>
    
        </div>
	

