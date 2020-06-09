
<?php
		include('modules/config.php');
		session_start();
		
		if(isset($_POST['loginadmin'])){
			mysqli_select_db("loginadmin",$conn);
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sql="SELECT * FROM admin WHERE username='$username' and password='$password' ";
			$query=mysqli_query($conn,$sql);
			$nums=mysqli_num_rows($query);
			if($nums==0){
				echo("Username or Password is not correct, please try again");
				header('location:loginadmin.php');
			}else{
				$_SESSION['loginadmin']=$username;
				header('location:index.php');
			}
		}
?>
<form action="" method="post">
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Log in</div>
                <div class="panel-body">
                    <fieldset>
                        <div class="form-group">
                        	<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
                        </div>
                        <div class="form-group">
                        	<input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <input type="submit" name="loginadmin" id="loginadmin" value="Submit">
                    </fieldset>	
                </div>			
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->	
 </form>
 