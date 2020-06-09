<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
	//session_destroy();
	@session_start();
	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql_login="select * from signup where email='$email' and password='$password' limit 1";
		$run_login=mysqli_query($conn, $sql_login);
		$nums_login=mysqli_num_rows($run_login);
		if($nums_login>0){
			$_SESSION['login']=$email;
			header('location:index.php?xem=cart');
		}else{
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Email and Account are wrong </p>';
		}
	}
?>
<div class="padding mt-5" >
<h2 style="width: 100%; text-align: center; border-bottom: 4px solid #000; line-height: 0.1em; margin: 20px 0 30px;"><span style="background: #000; padding: 0 10px;  border: 6px solid black; border-radius: 30px; background-color: #000; width: 150px; text-align: center; color: #fff;">LOGIN </span></h2><br>
</div>
<div class="table-responsive">
    <form action="" method="post" enctype="multipart/form-data">
    	<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading"></div>
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
                        <p align="center"><input type="submit" name="login" value="Login" /></p>
                    </fieldset>	
                </div>			
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
    <i><a href="index.php?xem=signup">Bạn chưa có tài khoản? Đăng kí tài khoản mới</a></i>
    </form>
</div>