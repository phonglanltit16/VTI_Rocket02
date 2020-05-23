<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
	@session_start();
 	
		$email=$_SESSION['login'];	
		$insert_cart="INSERT INTO cart (email) VALUE ('".$email."')";
		$ketqua=mysqli_query($conn, $insert_cart);
		if($ketqua){
			for($i=0;$i<count($_SESSION['product']);$i++){
			$run=mysqli_query($conn,"SELECT max(id_cart) FROM cart");
			$row=mysqli_fetch_array($run);
			
			$id_cart=$row[0];
			$id_product=$_SESSION['product'][$i]['id'];
			$quantity=$_SESSION['product'][$i]['num'];
			$price=$_SESSION['product'][$i]['price'];
			
			 $insert_cart_detail="INSERT INTO cartdetail (id_cart,id_product,quantity,price) VALUES('".$id_cart."','".$id_product."','".$quantity."','".$price."')";
			 $cart_detail=mysqli_query($conn,$insert_cart_detail);

		}
		
	}	
		unset($_SESSION['product']);
		
		header('location:index.php?xem=thank');
	
?>