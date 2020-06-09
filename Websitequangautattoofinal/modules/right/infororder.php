<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
if(isset($_POST['payment'])){
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$note=$_POST['note'];
	$hinhthucgiao=$_POST['hinhthucgiao'];
	if ( $name== "" || $phone == ""|| $email == "" || $address == "" || $hinhthucgiao =="" ) {
			echo "Bạn vui lòng nhập đầy đủ thông tin";
  	}else{
		$email_temple1 = '/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.com)$/';
		$phone_temple = '/^[0-9]{10}$/';
		if(preg_match($email_temple1 ,$email, $matchs)&&preg_match($phone_temple ,$phone, $matchs)){
			$sql_infororder="INSERT INTO tbl_infororder(name, phone, email, address, note, hinhthucgiao) VALUES('$name', '$phone', '$email', '$address', '$note', '$hinhthucgiao')";
			$run_infororder=mysqli_query($conn,$sql_infororder);
			if($run_infororder){
				$sql_select_infororder= mysqli_query($conn,"SELECT * FROM tbl_infororder ORDER BY id_custormer DESC LIMIT 1");
				$codeorder='#'.rand(0,99999);
				$row_infororder=mysqli_fetch_array($sql_select_infororder);
				$id_custormer=$row_infororder['id_custormer'];
				for($i=0;$i<count($_POST['payment_id_product']);$i++){
					$id_product=$_POST['payment_id_product'][$i];
					$quatity=$_POST['payment_quatity'][$i];
					$sql_order=mysqli_query($conn,"INSERT INTO tbl_order(codeorder, id_product, id_custormer, quatity) VALUES ('$codeorder','$id_product','$id_custormer','$quatity')");
					$sql_delete_payment=mysqli_query($conn,"DELETE FROM tbl_cart WHERE id_product='$id_product'");	
				}
			}
			 header('location:index.php?xem=thank');
		}else{
			echo "<p style='color:red'><strong>Bạn vui lòng nhập đúng định dạng số điện thoại hoặc email!</strong></p>";
		}
	}
}

?>
<div class="container">
  <h2>Shipping information</h2>
  <form action="" method="post">
      <div class="form-group">
          <label for="name">Fullname:</label>
          <input type="name" class="form-control" name="name" style="width:1000px">
      </div>
      <div class="form-group">
        <label for="email">Phone Number:</label>
        <input type="phone" class="form-control" name="phone" style="width:1000px">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" style="width:1000px">
      </div>
      <div class="form-group">
        <label for="pwd">Address:</label>
        <input type="address" class="form-control" name="address" style="width:1000px">
      </div>
      <div class="form-group">
      	<select class="" name="hinhthucgiao">
        	<option>Choose payment method</option>
            <option value="1">Payment by ATM </option>
            <option value="0">Cash payment</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pwd">Note:</label>
        <input type="note" class="form-control" name="note" style="width:1000px">
      </div>
      <?php
		$sql_choose_cart="SELECT * FROM tbl_cart ORDER BY id_cart DESC";
		$run_choose_cart=mysqli_query($conn, $sql_choose_cart);
		while($row_payment = mysqli_fetch_array($run_choose_cart)){
        ?>
        <input type="hidden"  name="payment_quatity[]" value="<?php echo $row_payment['quatity']?>" />
        <input type="hidden"  name="payment_id_product[]" value="<?php echo $row_payment['id_product']?>" />
      <?php 
		}
	  ?>
  <div align="center"><input type="submit" name="payment"class="btn btn-primary" value="Payment"></div>
  </form>
</div>