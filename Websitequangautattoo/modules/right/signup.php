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
		
		if ($namecus == "" || $email == "" || $password == "" ) {
			echo "bạn vui lòng nhập đầy đủ thông tin";
  		}else{
			// Kiểm tra tài khoản đã tồn tại chưa
			$sql="select * from signup where email='$email'";
			$kt=mysqli_query($conn, $sql);

			if(mysqli_num_rows($kt)  > 0){
				echo '<p style="color:red"><strong>Tài khoản đã tồn tại. Mời đăng kí lại</strong></p>';
			}else{		
		$sql_signup="INSERT INTO signup (namecus,email,password)		VALUES('$namecus','$email','$password')";
		$run_signup=mysqli_query($conn,$sql_signup);
					if ($run_signup) {
					  header('location:index.php?xem=notification');
					}else{
					   header('location:index.php?xem=payment');
					}
			}
		}
	}
?>
<div class="title" align="center" style="font-size:18px">
<strong>WELCOME TO SIGN UP</strong></div>

<div class="signup">
<p style="color:red;margin:5px;">Các mục dấu * là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác.</p>
  <form action="index.php?xem=signup" method="post" enctype="multipart/form-data">
	<table width="100%" border="1" style="border-collapse:collapse;">
  <tr>
    <td width="40%">Name<strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="text" name="namecus" size="50"></td>
  </tr>
  <tr>
    <td>Email <strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="text" name="email" size="50">
    
    
    </td>
  </tr>
  <tr>
    <td>Password<strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="password" name="password" size="50"></td>
  </tr>
  
    <td colspan="2">
       <p align="center"><input type="submit" name="signup" value="SIGN UP" /></p>
    </td>
   </tr>
</table>


