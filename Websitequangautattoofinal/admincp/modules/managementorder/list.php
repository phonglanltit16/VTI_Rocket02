<?php 
	$localhostname='localhost';
	$accoutname='root';
	$pass='';
	$database='webquangautattoo';
	$conn=mysqli_connect($localhostname,$accoutname,$pass,$database);
?>
<div class="row">
<?php
if(isset($_POST['custId'])){
    $codeorder=$_POST['custId'];
	$sql_details="SELECT * FROM tbl_order,detailsproduct WHERE tbl_order.id_product=detailsproduct.id_product AND tbl_order.codeorder='$codeorder'";
	$run_details=mysqli_query($conn,$sql_details);
}
else{
	$sql_details="SELECT * FROM tbl_order,detailsproduct WHERE tbl_order.id_product=detailsproduct.id_product";
    $run_details=mysqli_query($conn,$sql_details);
}
?>
<div class="col-md-7">
<h4>Details order</h4>
<table class="table table-bordered table-hover">
    <tr>
        <th><div align="center">STT</div></th>
        <th><div align="center">Order code</div></th>
        <th><div align="center">Id_product</div></th>
        <th><div align="center">Quatity</div></th>
        <th><div align="center">Total</div></th>
        <th><div align="center">Date</div></th>
    </tr>
    <?php 
    $i=0;
    while($row_order=mysqli_fetch_array($run_details)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row_order['codeorder']; ?></td>
        <td><?php echo $row_order['id_product']; ?></td>
        <td><?php echo $row_order['quatity']; ?></td>
        <td><?php echo number_format($row_order['quatity']*$row_order['price']); ?>VND</td>        <td><?php echo $row_order['date']; ?></td>
    </tr>
	<?php 
    }
    ?>
</table>
</div>
<div class="col-md-5">
	<h4>List order</h4>
    <?php 
		$sql_select=mysqli_query($conn,"SELECT * FROM tbl_infororder,detailsproduct,tbl_order WHERE tbl_order.id_product=detailsproduct.id_product AND tbl_order.id_custormer=tbl_infororder.id_custormer ORDER BY tbl_order.id_order DESC ");
	?>
    
    <table class="table table-bordered table-hover">
    	<tr>
        	<th><div align="center">STT</div></th>
            <th><div align="center">Order code</div></th>
            <th><div align="center">Name custormer</div></th>
            <th><div align="center">Quatity</div></th>
            <th><div align="center">Date</div></th>
            <th colspan="2"><div align="center">Management</div></th>
        </tr>
        <?php 
		$i=0;
		while($row_order=mysqli_fetch_array($sql_select)){
			$i++;
		?>
        <tr>
        	<td><?php echo $i; ?></td>
            <td><?php echo $row_order['codeorder']; ?></td>
            <td><?php echo $row_order['name']; ?></td>
            <td><?php echo $row_order['quatity']; ?></td>
            <td><?php echo $row_order['date']; ?></td>
            <td><a href="?delete=<?php echo $row_order['id_order']?>">Delete</a></td>
            <form method="post">
                <input type="hidden" name="custId" value="<?php echo $row_order['codeorder']?>">
                <td><button type='submit'>Details</button></td>
            </form>
        </tr>
        <?php 
		}
		?>
    </table>
</div>
</div>