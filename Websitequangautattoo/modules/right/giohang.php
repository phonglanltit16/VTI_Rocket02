<?php
	session_start();
	include('admincp/modules/config.php');
	//
	if(isset($_GET['thoat'])&&$_GET['thoat']==1){
		unset($_SESSION[login]);
		header('location:index.php?xem=dathang');
	}
	//tru sp
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['product'] as $cart_item){
			if($id!=$cart_item['id']){
				
				$product[]=array(description=>$cart_item[description],'img'=>$cart_item['img'],num=>$cart_item[num],'gia'=>$cart_item[price]);
				$_SESSION['product']=$product;
			}else{
				$giam=$cart_item[num]-1;
				if($cart_item['num']>1){
				$product[]=array(description=>$cart_item[description],'img'=>$cart_item['img'],num=>$cart_item[num],'gia'=>$cart_item[price]);
				
				}else{
					$giam=1;
					$$product[]=array(description=>$cart_item[description],'img'=>$cart_item['img'],num=>$cart_item[num],'gia'=>$cart_item[price]);
				}
				$_SESSION['product']=$product;
			}

			header('location:index.php?xem=dathang');
		}
		
	}
	//cong them sp
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['product'] as $cart_item){
			if($id!=$cart_item['id']){
				
				$product[]=array(description=>$cart_item[description],'img'=>$cart_item['img'],num=>$cart_item[num],'gia'=>$cart_item[price]);
				$_SESSION['product']=$product;
			}else{
				$tang=$cart_item[num]+1;
				if($cart_item[num]<9){
				
				$product[]=array(description=>$cart_item[description],'img'=>$cart_item['img'],num=>$cart_item[num],'gia'=>$cart_item[price]);
				
			}else{
				
				$product[]=array(description=>$cart_item[description],'img'=>$cart_item['img'],num=>$cart_item[num],'gia'=>$cart_item[price]);
			}
			$_SESSION['product']=$product;
			}
			
			header('location:index.php?xem=dathang');
		}
		
	}
	//xoa san pham
	if(isset($_SESSION['product'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['product'] as $cart_item){
			if($cart_item['id']!= $id){
				$product[]=array(description=>$cart_item[description],'img'=>$cart_item['img'],num=>$cart_item[num],'gia'=>$cart_item[price]);
			}
		$_SESSION['product']=$product;
		header('location:index.php?xem=dathang');
		}
	}
	//xoa toan bo giohang
	if(isset($_GET['xoatoanbo'])&&$_GET['xoatoanbo']==1){
		session_destroy();
		header('location:index.php?xem=dathang');
	}
	//them giohang
	if(isset($_POST['add_to_cart'])){
		$id=$_GET['id'];
		$soluong=$_POST['soluong'];
		$sql="select * from detailsproduct  where id_product='$id' limit 1";
		$run=mysqli_query($sql);
		$row=mysqli_fetch_array($run);
		if($row){
			$new_product=array(array(description=>$cart_item[description],'img'=>$cart_item['img'],num=>$cart_item[num],'gia'=>$cart_item[price]));
			if(isset($_SESSION['product'])){
				$found=false;
				foreach($_SESSION['product'] as $cart_item){
					if($cart_item['id'] == $id){
						$product[]=array(description=>$cart_item[description],'img'=>$cart_item['img'],num=>$cart_item[num],'gia'=>$cart_item[price]);
						$found=true;
					}else{
						$product[]=array(description=>$cart_item[description],'img'=>$cart_item['img'],num=>$cart_item[num],'gia'=>$cart_item[price]);
					}
					
				}if($found==false){
					$_SESSION['product']=array_merge($product,$new_product);
				}else{
					$_SESSION['product']=$product;
				}
			}else{
				$_SESSION['product']=$new_product;
			}
		}
		header('location:index.php?xem=dathang');
	}
?>

