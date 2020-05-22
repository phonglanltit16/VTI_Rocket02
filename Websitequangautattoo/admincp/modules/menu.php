<?php
		if(isset($_GET['management'])&&$_GET['management']=='logoutadmin'){
		unset($SESSION['loginadmin']);
		header('location:loginadmin.php');
	}
?>
<div class="menu">
    <ul>
        <li><a href="index.php">Homepage</a></li>
        <li><a href="index.php?management=managementproducttype">Management Product Type</a></li>
        <li><a href="index.php?management=managementofdetailsproduct">Management of Details Product</a></li>
        <li><a href="index.php?management=managementnews">Management News</a></li>
        <li><a href="index.php?management=logoutadmin">Logout</a></li>

    </ul>
</div>