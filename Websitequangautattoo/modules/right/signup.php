<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
	if(isset($_POST['signup'])){
		$namecus=$_POST['namecus'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$phonenumber=$_POST['phonenumber'];
		$shippingaddress=$_POST['shippingaddress'];
		
		$sql_signup="INSERT INTO registernewaccount (namecus,email,password, phonenumber ,shippingaddress) VALUES('$namecus','$email','$password','$phonenumber','$shippingaddress')";
		$run_query=mysqli_query($conn,$sql_signup);
		if($run_query){
			header('location:index.php');
		}else{
			header('location:index.php?xem=singup');
		}
	}
?>
<div class="title" align="center" style="font-size:18px">
<strong>WELCOME TO SIGN UP</strong></div>

<div class="signup">
<p style="color:red;margin:5px;">Các mục dấu * là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác (Số nhà, Ngõ, thôn xóm/ấp, Phường/xã, huyện/quận, tỉnh, TP)</p>
  <form action="index.php?xem=signup" method="post" enctype="multipart/form-data">
	<table width="100%" border="1" style="border-collapse:collapse;">
  <tr>
    <td width="40%">Name<strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="text" name="namecus" size="50"></td>
  </tr>
  <tr>
    <td>Email <strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="text" name="email" size="50"></td>
  </tr>
  <tr>
    <td>Password<strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="password" name="password" size="50"></td>
  </tr>
  <tr>
    <td>Phone Number <strong style="color:red;"> (*)</strong></td>
     <td width="60%"><input type="text" name="phonenumber" size="50"></td>
  </tr>
  <tr>
    <td>Shipping Address <strong style="color:red;"> (*)</strong></td>
   <td width="60%"><input type="text" name="shippingaddress" size="50"></td>
  </tr>
  <tr>
    <td colspan="2">
       <p align="center"><input type="submit" name="signup" value="SIGN UP" /></p>
    </td>
   </tr>
</table>
</form>
<div class="note">
	<p>Note :</p><textarea name="note"></textarea>


