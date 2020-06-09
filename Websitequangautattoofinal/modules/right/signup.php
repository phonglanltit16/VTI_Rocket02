<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
	if(isset($_POST['signup'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		if ( $email == "" || $password == "" ) {
			echo "Bạn vui lòng nhập đầy đủ thông tin";
  		}else{
			// Kiểm tra tài khoản đã tồn tại chưa
			$sql="SELECT * FROM signup WHERE email='$email'";
			$kt=mysqli_query($conn, $sql);
			if(mysqli_num_rows($kt)  > 0){
				echo '<p style="color:red"><strong>Tài khoản đã tồn tại. Mời đăng kí lại</strong></p>';
				
			//Kiểm tra định dạng email
			}else{
				$email_temple = '/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.com)$/';
				
				$password_temple='/^[A-Za-z0-9.!@#$%^&*()]{6,20}$/';
				if(preg_match($email_temple ,$email, $matchs)&&preg_match($password_temple ,$password, $matchs)){
   					$sql_signup="INSERT INTO signup (email,password) VALUES('$email', '$password')";
					$run_signup=mysqli_query($conn,$sql_signup);
					if ($run_signup){
					  header('location:index.php?xem=login');
					}
				}else{ 
					echo "Định dạng Email hoặc Password không đúng"; 
				} 
			}
		}
	}
?>
<div class="padding mt-5" >
<h2 style="width: 100%; text-align: center; border-bottom: 4px solid #000; line-height: 0.1em; margin: 20px 0 30px;"><span style="background: #000; padding: 0 10px;  border: 6px solid black; border-radius: 30px; background-color: #000; width: 150px; text-align: center; color: #fff;">WELCOME TO SIGN UP </span></h2>
</div><br>

<div class="signup">
<p style="color:red;margin:5px;">Các mục dấu * là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác.</p>
<div class="table-responsive">
<form action="index.php?xem=signup" method="post" enctype="multipart/form-data">
	    	<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
                <div class="panel-body">
                    <fieldset>
                        <div class="form-group">
                        	<p>Email : <strong style="color:red;"> (*)</strong><p>
                        	<input class="form-control" placeholder="Email" name="email" type="text" autofocus="">
                        </div>
                        <div class="form-group">
                        	<p>Mật khẩu : <strong style="color:red;"> (*)</strong></p>
                        	<input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <p align="center"><input type="submit" name="signup" value="SIGN UP" /></p>
                    </fieldset>	
                </div>			
        </div>
    </div><!-- /.col-->
</div>
</form>
</div>
<p><strong>Password:</strong> gồm ít nhất 6 kí tự, chữ hoa chữ thường và các kí tự đặc biệt:<strong>.!@#$%^&*() </strong>.</p>
<p><strong>Email:</strong> đúng định dạng. Ví dụ: nguyenvanxxxxx@xxxxx.com</br>.</p>
