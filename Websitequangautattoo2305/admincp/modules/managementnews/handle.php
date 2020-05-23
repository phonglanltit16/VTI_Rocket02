<?php
	include('../config.php');
	
	$articlename = $_POST['articlename'];
	$img=$_FILES['img']['name'];
	$img_tmp=$_FILES['img']['tmp_name'];
	move_uploaded_file($img_tmp,'uploads/'.$img);
	$summary = $_POST['summary'];
	$content=$_POST['content'];
	$id = $_GET['id'];

	if(isset($_POST['add'])){
		//add 
		$sql="INSERT INTO managementnews(articlename,  img	,   summary,    content) 
			  VALUES 		            ('$articlename','$img', '$summary', '$content')";
			  
		if (mysqli_query($conn, $sql)) {
			echo "Thêm dữ liệu thành công";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_query($sql);
		header('location:../../index.php?management=managementnews');
	
	
	}elseif(isset($_POST['modify'])){
		//modify
		if($img!=''){
		$sql="update managementnews set 	articlename='$articlename',img='$img',summary='$summary',content='$content'
		where id_news='$id'";
		}else{
		$sql="update managementnews set 	articlename='$articlename',summary='$summary',content='$content'
		where id_news='$id'";
		}
		if(mysqli_query($conn,$sql)){
			echo "okie";
			echo $sql;
		}else{
			echo 'Không thành công, lỗi'. $conn->error;
		}
		header('location:../../index.php?management=managementnews');
		
	}else{
		//delete
		$sql="delete from managementnews where id_news='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?management=managementnews');
	}
?>
