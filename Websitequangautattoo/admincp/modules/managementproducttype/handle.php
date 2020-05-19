<?php
	include('../config.php');
	$id = $_GET['id'];
	$producttypename = $_POST['producttypename']; 
	$no = $_POST['no']; 	
	
	if(isset($_POST['add'])){
		//add
		$sql = "INSERT INTO producttype (producttypename, no)
    			VALUES 					('$producttypename', '$no')";
	
		if (mysqli_query($conn, $sql)) {
			echo "Thêm dữ liệu thành công";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_query($sql);
		header('location:../../index.php?management=managementproducttype');
		
	}elseif(isset($_POST['modify'])){
		//modify
		$sql="update producttype set producttypename='$producttypename', no='$no'
		where id_producttype='$id'";
		mysqli_query($sql);
		header('location:../../index.php?management=managementproducttype&id'.$id);
		
	}else{
		//delete
		$sql="delete from producttype where id_producttype='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?management=managementproducttype');
	}
?>
