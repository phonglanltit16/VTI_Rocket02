<?php
	session_start();
	error_reporting(0);

if(isset($_SESSION['login'])){ 
	echo 'Hello '.$_SESSION['login'];
	echo'<p><a href="index.php?xem=cart&thoat=1"><input type="submit" name="thoat" value="Logout" class="btn btn-danger" style="float:right"></a></p>';
}
//đăng xuất
if(isset($_GET['thoat'])&&$_GET['thoat']==1){
	unset($_SESSION['login']);
//header('location:index.php?xem=cart');
}
if(isset($_POST['add1'])){
	$id_product=$_POST['id_product'];
	$img=$_POST['img'];
	$description=$_POST['description'];
	$price=$_POST['price'];
	$quatity=$_POST['quatity'];
	$sql_select_cart=mysqli_query($conn," SELECT * FROM tbl_cart WHERE id_product= '$id_product'");
	//$count=mysqli_num_rows($sql_select_cart);
	if(mysqli_num_rows($sql_select_cart)>0){
		$row_product=mysqli_fetch_array($sql_select_cart);
		$quatity=$row_product['quatity']+1;
		$sql_cart="UPDATE tbl_cart SET quatity='$quatity' WHERE id_product= '$id_product' ";

	}else{
		$quatity=$quatity;
		$sql_cart="INSERT INTO tbl_cart(id_product, img, description, price, quatity ) VALUES('$id_product','$img','$description','$price','$quatity')";
	}
	$insert_row=mysqli_query($conn,$sql_cart);
	if($insert_row==0){
		header('location:index.php?xem=detailsproduct&id='.$id_product);
	}
	
}elseif(isset($_POST['updatecart'])){
	for($i=0;$i<count($_POST['id_product']);$i++){
		$id_product=$_POST['id_product'][$i];
		$quatity=$_POST['quatity'][$i];
		if($quatity<=0){
			$sql_delete=mysqli_query($conn,"DELETE FROM tbl_cart WHERE id_product='$id_product'");
		}else{
			$sql_update=mysqli_query($conn,"UPDATE tbl_cart SET quatity='$quatity' WHERE id_product='$id_product'");
		}
	}
	
}elseif(isset($_GET['delete'])){
	$id=$_GET['delete'];
	$sql_delete=mysqli_query($conn,"DELETE FROM tbl_cart WHERE id_cart='$id'");	
	//header('location:index.php?xem=cart');
}
?>
        <div class="checkout-right">
        <?php
		$sql_choose_cart="SELECT * FROM tbl_cart ORDER BY id_cart DESC";
		$run_choose_cart=mysqli_query($conn, $sql_choose_cart);
        ?>
<div class="padding mt-5" >
<h2 style="width: 100%; text-align: center; border-bottom: 4px solid #000; line-height: 0.1em; margin: 20px 0 30px;"><span style="background: #000; padding: 0 10px;  border: 6px solid black; border-radius: 30px; background-color: #000; width: 150px; text-align: center; color: #fff;">SHOPPING CART </span></h2>
</div><br>
     <div class="table-responsive">
          <form action="" method="post">
            <table class="table table-bordered table-hover" style="width:1100">
                <thead>
            		<tr>
                        <th><div align="center">STT</div></th>
                        <th><div align="center">IMG</div></th>
                        <th><div align="center">Description</div></th>
                        <th><div align="center">Price</div></th>
                        <th><div align="center">Quatity</div></th>
                        <th><div align="center">Total</div></th>
                        <th><div align="center">Remove</div></th>
                       </tr>
                   </thead>
                   <tbody>
						<?php
                        $i=0;
                        $totalall=0;
                        while($row_fetch_cart= mysqli_fetch_array($run_choose_cart)){
                            $i++;
                            $total=$row_fetch_cart['quatity']*$row_fetch_cart['price'];
                            $totalall+=$total;
                        ?>
                    	<tr>
                        	<td class="invert" align="center"><?php echo $i; ?></td>
                            <td class="invert-image">
                            	<a>
                                	<img src="admincp/modules/managementofdetailsproduct/uploads/<?php echo $row_fetch_cart['img'] ?>" width="180" height="180"  class="img-responsive">
                                </a>
                            </td>
                            <td class="invert"><?php echo $row_fetch_cart['description'] ?></td>
                            <td class="invert"><?php echo number_format($row_fetch_cart['price']) ?>VND</td>

                            <td class="invert" >
                                 <input type="number"  name="quatity[]" value="<?php echo $row_fetch_cart['quatity']?>" />
                                 <input type="hidden"  name="id_product[]" value="<?php echo $row_fetch_cart['id_product']?>" />
                            </td>
                            <td class="invert" ><?php echo number_format($total)?></td>
                            <td class="invert">
                            	<div align="center"><a href="?xem=cart&delete=<?php echo $row_fetch_cart['id_cart'] ?>">Delete</a></div>
                            </td>
                        </tr>
						<?php
                        }
                        ?>
                        <tr>
                        	<td colspan="5" align="center">Totalall</td>
                            <td><?php echo number_format($totalall) ?></td>
							<td><input type="submit" class="btn btn-success" name="updatecart" value="UPDATE CART"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
         </div>
    </div>
<?php
	if(isset($_SESSION['login'])){
?>
 <button type="button" class="btn btn-primary" style="float:right"><a href="index.php?xem=infororder" style="color:#000;margin:5px;">Order</a></button>
<?php
	}
?>
<ul	class="control">
    <p><a href="index.php">Tiếp tục mua hàng</a></p>
    <p><a href="?xem=signup">Đăng ký mới/</a><a href="?xem=login">Bạn đã có tài khoản</a></p>
</ul>
    