<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
?>
<?php
if(isset($_POST['ok'])){
	$search=$_POST['search'];
	$sql_search="SELECT * FROM detailsproduct WHERE description LIKE '%$search%'";
	$query_search=mysqli_query($conn,$sql_search);
	$nums=mysqli_num_rows($query_search);
}if($nums==0){
	echo 'Không tìm thấy sản phẩm nào';

}else{
	echo $nums.' kết quả với từ khóa '.'" '.$search.'"' ;
?>

	<ul>
	<?php
    while($row_search=mysqli_fetch_array($query_search)){
    ?>
        <li><a href="index.php?xem=detailsproduct&id=<?php echo $row_search['id_product'] ?>">
            <img src="admincp/modules/managementofdetailsproduct/uploads/<?php echo $row_search['img']?>" width="180" height="180">
        <p>Price: <?php echo $row_search['price'] ?>VND</p>
        <p>Details</p>
           </a></li>
	<?php
    }
}
    ?>
    </ul>
    			
		
			
