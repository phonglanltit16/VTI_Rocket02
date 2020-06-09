<div class="padding mt-5" >
<h2 style="width: 100%; text-align: center; border-bottom: 4px solid #000; line-height: 0.1em; margin: 20px 0 30px;"><span style="background: #000; padding: 0 10px;  border: 6px solid black; border-radius: 30px; background-color: #000; width: 150px; text-align: center; color: #fff;">NEWS </span></h2>
</div>
<?php
	$sql_news="SELECT *FROM managementnews ORDER BY RAND ( )LIMIT 5";
	$query_news=mysqli_query($conn,$sql_news);
    while($row_news=mysqli_fetch_array($query_news)){
           
?>
<div>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 ">
            <img src="admincp/modules/managementnews/uploads/<?php echo $row_news['img']?>" width="180" height="180">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 ">
            <h3><b style="text-color:#000"><a href="index.php?xem=detailsnews&id=<?php echo $row_news['id_news'] ?>"><?php echo $row_news['articlename'] ?></a></b></h3>
            <p><?php echo $row_news['summary'] ?></p><a href="index.php?xem=detailsnews&id=<?php echo $row_news['id_news'] ?>" style="border: 6px solid black; border-radius: 30px;
    background-color: black;text-align: center;color: #FFF;padding: 0 10px;text-decoration: none;">Xem thêm</a>
        </div>
    </div>
</div>
<br>     
<?php } ?>


