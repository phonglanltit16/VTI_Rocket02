<?php

	if(isset($_POST['changepassword'])){
		$tentk=$_POST['tentk'];
		$mkcu=$_POST['mkcu'];
		$mkmoi=$_POST['mkmoi'];
		$sql_chagepw="SELECT * FROM admin WHERE username='$tentk' and password= '$mkcu' limit 1";
		$run=mysqli_query($conn,$sql_chagepw);
		$nums=mysqli_num_rows($run);
		if($nums==0){
			echo ' Username or Password is wrong. Input again, please!';
		}else{
			echo $tentk;
			echo $mkcu;
			$sql_update= "UPDATE admin SET password='$mkmoi' WHERE tentk='$tentk'";
			$run=mysqli_query($conn,$sql_update);
			echo 'Change password sucessfully!';
		}
	}
?>
<div align="center">
<form action="" method="post">

<table width="200" border="1">
  <tr>
    <td colspan="2"><div align="center">Change Passwword</div></td>
  </tr>
  <tr>
    <td>Username</td>
    <td><input type="text" name="tentk"></td>
  </tr>
  <tr>
    <td>Current password</td>
    <td><input type="password" name="mkcu"></td>
  </tr>
  <tr>
    <td>New password</td>
    <td><input type="password" name="mkmoi"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><input type="submit" name="changepassword" value="Save"></div></td>
  </tr>
</table>
</form>
</div>