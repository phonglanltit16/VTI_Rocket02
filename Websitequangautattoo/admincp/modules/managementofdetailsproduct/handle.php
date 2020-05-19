<?php
	include('../config.php');
	
	$id = $_GET['id'];
	$img=$_FILES['img']['name'];
	$img_tmp=$_FILES['img']['tmp_name'];
	move_uploaded_file($img_tmp,'uploads/'.$img);
	$price = $_POST['price'];
	$description=$_POST['description'];
	$id_producttype=$_POST['id_producttype'];
	$no= $_POST['no'];

	if(isset($_POST['add'])){
		//add 
		$sql="INSERT INTO detailsproduct(  img	,   price,    description	 ,id_producttype ,   no ) 
			  VALUES 		            ('$img', '$price', '$description', '$id_producttype', '$no')";
			  
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
		$sql="update detailsproduct set 	img='$img',price='$price',description='$description',id_producttype='$id_producttype',no='$no'
		where id_product='$id'";
		}else{
			$sql="update detailsproduct set 	price='$price',description='$description',id_producttype='$id_producttype',no='$no'
		where id_product='$id'";
		}
		//print($sql);
		mysqli_query($sql);
		header('location:../../index.php?management=managementofdetailsproduct');
		
	}else{
		//delete
		$sql="delete from detailsproduct where id_product='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?management=managementofdetailsproduct');
	}
?>
