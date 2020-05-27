<div class="content">
  	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 padding-0">
        <div class="content-left">
            <?php
                include('modules/left/list.php');
            ?>
        </div>
    </div>
    
  	<div class="col-lg-10 col-md-20 col-sm-6 col-xs-6 padding-0">
        <div class="content-right">
            <?php
				if(isset($_GET['xem'])){
					$tam=$_GET['xem'];
				}else{
					$tam='';
				}if($tam=='detailsproduct'){
                	include('modules/right/detailsproduct.php');
				}elseif($tam=='detailsofproducttype'){
                	include('modules/right/detailsofproducttype.php');
				}elseif($tam=='login'){
					include('modules/right/login.php');
				}elseif($tam=='signup'){
					include('modules/right/signup.php');
				}elseif(isset($_POST['search'])){
					include('modules/right/search.php');					
				}elseif($tam=='thank'){
					include('modules/right/thank.php');
				}elseif($tam=='cart'){
					include('modules/right/cart.php');
				}elseif($tam=='thanhtoan'){
					include('modules/right/thanhtoan.php');
				}elseif($tam=='notification'){
					include('modules/right/notification.php');
				}elseif($tam=='infororder'){
					include('modules/right/infororder.php');	
					
				}else{
					include('modules/right/allproduct.php');			
				}
            ?>
        </div>
    </div>
</div>
<div class="clear"></div>