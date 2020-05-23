<div class="contentadmin">
    <?php
		if(isset($_GET['management'])){
			$tam=$_GET['management'];
		}else{
			$tam='';
		}if($tam=='managementproducttype'){
			include('modules/managementproducttype/main.php');
		}if($tam=='managementofdetailsproduct'){
			include('modules/managementofdetailsproduct/main.php');
		}if($tam=='managementnews'){
			include('modules/managementnews/main.php');
		}if($tam=='changepassword'){
			include('changepassword.php');
		}

		
		
    ?>
</div>
<div class="clear"></div>