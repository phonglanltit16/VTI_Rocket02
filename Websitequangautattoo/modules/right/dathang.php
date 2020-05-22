<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
?>
<?php
	@session_start();
	
	if(isset($_SESSION['product'])){
		if(isset($_SESSION['login'])){
			echo '<div class="tieude">Giỏ hàng của bạn | <span>Xin chào bạn:<strong><em> '.$_SESSION['login'].'</em></strong><a href="update_cart.php?thoat=1" style="text-decoration:underline;color:#fff; margin-left:10px;">Đăng Xuất</a></span></div>';
		}else{
			echo '<div class="tieude">Giỏ hàng của bạn</div>';
		}
			
			echo '<div class="box_giohang">';
			echo '  <table width="100%" border="1" style="border-collapse:collapse; margin:5px; text-align:center;">';
			
			echo'  <tr>';
			echo'<td>Img</td>';
			echo'<td>Description</td>';
			echo'<td>Price</td>';
			echo'<td>num</td>';
			echo'<td>Total</td>';
			echo'<td>Management</td>';
			echo'</tr>';
	$thanhtien=0;
	foreach($_SESSION['product'] as $cart_item){
			$id=$cart_item['id'];
			$sql="SELECT * FROM detailsproduct WHERE id_product='$id'";
			$run=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($row);
		 	echo'<tr>';
			
			
			echo'<td><img src="admincp/modules/managementofdetailsproduct/uploads/'.$row['img'].'" width="100" height="100" /></td>';
			echo'<td>'.$row['description'].'</td>';
			echo'<td>'.number_format($row['price']).'</td>';
			
			echo'<td><a href="update_cart.php?cong='.$cart_item['id'].'" style="margin-right:2px;"><img src="imgs/plus.png" width="20" height="20"></a>'.$cart_item['num'].'<a href="update_cart.php?tru='.$cart_item['id'].'" style="margin-left:2px;"><img src="imgs/subtract.png" width="20" height="20"></a></td>';
			$total=0;
			$total=$cart_item['num']*$cart_item['price'];
			$totalall=($totalall + $total);
			echo'<td>'.number_format($total).'</td>';
			echo'<td><a href="update_cart.php?xoa='.$cart_item['id'].'"><img src="imgs/deletered.png" width="30" height="30"></a></td>';
			echo'</tr>';
			echo '<tr>';
			echo'</tr>';
			
  	}
			echo '<tr>
				
				<td colspan="6"><a href="update_cart.php?xoatoanbo=1"  style="text-decoration:none;" >Xóa toàn bộ</a>	
				
				</td>		
				<td>Thành tiền : '.number_format($thanhtien).'VNĐ'.'</td>
			</tr>';
	}else{
		
		echo 'Giỏ hàng của bạn trống';
	}
 	echo'</table>';
  ?>            <ul	class="control">
              <p><a href="">Tiếp tục mua hàng</a></p>
                <p><a href="?xem=dangkymoi">Đăng ký mới</a></p>
                <p><a href="?xem=login">Bạn đã có tài khoản</a></p>
                <?php
				if(isset($_SESSION['login'])&&isset($_SESSION['product'])){
				?>
                 <p style="float:right; background:#FF0;text-decoration:none;"><a href="thanhtoan.php" style="color:#000;margin:5px;">Thanh toán</a></p>
				<?php
				}
				?>
        	</ul>
    
        </div>
