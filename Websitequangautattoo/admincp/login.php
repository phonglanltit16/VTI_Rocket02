<?php
		$localhostname='localhost';
		$accoutname='root';
		$pass='';
		$database='webquangautattoo';
		$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
		include('modules/config.php');
		session_start();
		
		if(isset($_POST['login'])){
			mysqli_select_db("login",$conn);
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sql="select * from admin where username='$username' and password='$password' ";
			$query=mysqli_query($conn,$sql);
			$nums=mysqli_num_rows($query);
			if($nums==0){
				echo("Username or Password is not correct, please try again");
				header('location:login.php');
			}else{
				$_SESSION['login']=$username;
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
        <input type="submit" name="login" id="login" value="Submit">
      </div>
   </td>
  </tr>
</table>
 </form>