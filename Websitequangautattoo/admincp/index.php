<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" type="text/css" href="style/cssadmin.css">

<title>Content Management Website</title>
</head>

<body>
	<?php
		session_start();
		if(!isset($_SESSION['loginadmin'])){
			header('location:loginadmin.php');
		}else{
			echo 'Xin chào admin <strong>' .$_SESSION['loginadmin'].'</strong>';
		} 
    ?>
	<div class="wrapper">
    	<?php
			include('modules/config.php');
			include('modules/header.php');
			include('modules/menu.php');
			include('modules/content.php');
			include('modules/footer.php');
		?>
    </div>
</body>
</html>