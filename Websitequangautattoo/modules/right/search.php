<?php
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
?>
<?php
if(isset($_POST['search'])){
	$search=$_POST['searchtext'];
	$sql_search="select *from detailsproduct where description LIKE '%$search%'";
	$query_search=mysqli_query($conn,$sql_search);
}
?>
<div><p class="titleproduct"><strong>SẢN PHẨM TÌM THẤY</strong></p></div>
<div class="allproduct">
<?php 
if($nums=mysqli_num_rows($query_search)==0){
?>
<p>Không tìm thấy sản phẩm nào</p>
<?php
}else{
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
    </div>