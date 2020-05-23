<?php
	
		if(isset($_GET['xem'])&&$_GET['xem']=='logout'){
		unset($SESSION['login']);
		header('location:index.php?xem=cart');
	}
?>