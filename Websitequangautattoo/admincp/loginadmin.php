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
<table width="200" border="1">
  <tr>
    <td colspan="2"><div align="center">Login</div></td>
  </tr>
  <tr>
    <td>Username</td>
    <td><input type="text" name="username" size=""20></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" size=""20></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="loginadmin" id="loginadmin" value="Submit">
      </div>
   </td>
  </tr>
</table>
 </form>
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary">Login</h3>
            <form method="POST" onsubmit="return false;" id="formChangePass">
                <div class="form-group">
                    <label for="user_signin">Username</label>
                    <input type="t" name="username"class="form-control" id="old_pass">
                </div>
                <div class="form-group">
                    <label for="user_signin">Password</label>
                    <input type="password" name="password" class="form-control" id="new_pass">
                </div>
                
                 <input type="submit" name="loginadmin" id="loginadmin" value="Submit">
                <br><br>
                <div class="alert alert-danger hidden"></div>
            </form>
        </div>
    </div>
</div>