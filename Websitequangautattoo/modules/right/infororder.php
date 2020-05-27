<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
if(isset($_POST['giaohang'])){
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$note=$_POST['note'];
	$hinhthucgiao=$_POST['hinhthucgiao'];
	$sql_infororder="INSERT INTO infororder(name, phone, email, address, note, hinhthucgiao) VALUES('$name', '$phone', '$email', '$address', '$note', '$hinhthucgiao')";
	$run_infororder=mysqli_query($conn,$sql_infororder);
}
?>
<div class="container">
  <h2>Thông tin nhận hàng</h2>
  <form action="" method="post">
      <div class="form-group">
          <label for="name">Họ và tên khách hàng:</label>
          <input type="name" class="form-control" name="name" style="width:1000px">
      </div>
      <div class="form-group">
        <label for="email">Số điện thoại:</label>
        <input type="phone" class="form-control" name="phone" style="width:1000px">
      </div>
      <div class="form-group">
        <label for="email">Địa chỉ email:</label>
        <input type="email" class="form-control" name="email" style="width:1000px">
      </div>
      <div class="form-group">
        <label for="pwd">Địa chỉ:</label>
        <input type="address" class="form-control" name="address" style="width:1000px">
      </div>
      <div class="form-group">
      	<select class="" name="hinhthucgiao">
        	<option>Chọn hình thức giao hàng</option>
            <option value="1">Thanh toán ATM </option>
            <option value="0">Nhận hàng thanh toán</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pwd">Note:</label>
        <input type="note" class="form-control" name="note" style="width:1000px">
      </div>
      <?php 
	  	$sql_lay_infororder= mysqli_query($conn,"SELECT * FROM tbl_");
	  ?>
      
  <div align="center"><input type="submit" name="giaohang"class="btn btn-primary" value="GIAO HÀNG"></div>
  </form>
</div>