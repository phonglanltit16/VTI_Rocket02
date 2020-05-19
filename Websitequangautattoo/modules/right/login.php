<?php
	session_start();
	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql=mysqli_query("select * from registernewaccount where email='$email' and password='$password'");
		$nums=mysqli_num_rows($sql);
		if($nums>0){
			$tendangnhap=$_SESSION['login']=$email;
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Login successfully.</p>';
			echo '<a href="index.php?management=order" style="font-size:20px;">Back to pay</a>';
		}else{
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Email and Account are wrong </p>';
		}
	}
?>
<div class="title" align="center" >
	<strong>LOGIN FOR CUSTOMERS</strong>
</div>

  <form action="" method="post" enctype="multipart/form-data">
	<table width="100%" border="1" style="border-collapse:collapse;">
  <tr>
    <td width="40%">Email : <strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="text" name="email" size="50"></td>
  </tr>
    <td>Mật khẩu : <strong style="color:red;"> (*)</strong></td>
   <td width="60%"><input type="password" name="password" size="50"></td>
  </tr>
  <tr>
    <td colspan="2">
       <p align="center"><input type="submit" name="login" value="Login" /></p><br>
       <p align="center"><a href="?xem=registernewaccount"><input type="submit" value="Register New Account to Buy" /></a></p>
       
    </td>
   </tr>
</table>

</form>



