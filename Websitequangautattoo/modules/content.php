<div class="content">
  	<div class="col-lg-2 col-xs-4 col-sm-2">
        <div class="content-left">
            <?php
                include('modules/left/list.php');
            ?>
        </div>
    </div>
    
    <div class="col-lg-10 col-xs-8 col-sm-10">
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
				}elseif($tam=='cart'){
					include('modules/right/cart.php');
				}elseif($tam=='login'){
					include('modules/right/login.php');
				}elseif($tam=='signup'){
					include('modules/right/signup.php');
				}else{
					include('modules/right/allproduct.php');			
				}
            ?>
        </div>
    </div>
</div>
<div class="clear"></div>