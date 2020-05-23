<?php
	include('../config.php');
	
	$id = $_GET['id'];
	$img=$_FILES['img']['name'];
	$img_tmp=$_FILES['img']['tmp_name'];
	move_uploaded_file($img_tmp,'uploads/'.$img);
	$price = $_POST['price'];
	$soluong = $_POST['soluong'];
	$description=$_POST['description'];
	$producttype=$_POST['producttype'];
	$no= $_POST['no'];

	if(isset($_POST['add'])){
		//add 
		$sql="INSERT INTO detailsproduct(  img	,   price,soluong,    description	 ,id_producttype ,   no ) 
			  VALUES 		            ('$img', '$price','$soluong', '$description', '$producttype', '$no')";
			  
		if (mysqli_query($conn, $sql)) {
			echo "Thêm dữ liệu thành công";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	  
		mysqli_query($sql);
		header('location:../../index.php?management=managementofdetailsproduct');
	
	
	}elseif(isset($_POST['modify'])){
		//modify
		if($img!=''){
		$sql="UPDATE detailsproduct SET 	
		img='$img',price='$price',soluong='$soluong', description='$description', id_producttype='$producttype', no='$no'
		where id_product='$id'";
		}else{
			$sql="UPDATE detailsproduct SET
			price='$price' ,soluong='$soluong', description='$description' ,id_producttype='$producttype', no='$no'
		where id_product='$id'";
		}
		if(mysqli_query($conn,$sql)){
			echo "ok";
		}else{
			echo 'Không thành công. Lỗi' . $connect->error;
		}
		header('location:../../index.php?management=managementofdetailsproduct');
		
	}else{
		//delete
		$sql="delete from detailsproduct where id_product='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?management=managementofdetailsproduct');
	}
?>