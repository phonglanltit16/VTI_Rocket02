<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    	<title>Admin-QuangAuTatto</title>
</head>
<body>
	<?php
		if(isset($_GET['management'])&&$_GET['management']=='logoutadmin'){
		unset($SESSION['loginadmin']);
		header('location:loginadmin.php');
		}
	?>
    <div class="row">
  	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 " >
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="#"><span>QuangAuTatto</span>Admin</a>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
    
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">
                	<?php
							session_start();
							if(!isset($_SESSION['loginadmin'])){
								header('location:loginadmin.php');
							}else{
								echo $_SESSION['loginadmin'];
							} 
					?>
                </div>
			</div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active"><a href="#"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="index.php?management=managementproducttype"><em class="fa fa-calendar">&nbsp;</em> Product Type</a></li>
			<li><a href="index.php?management=managementofdetailsproduct"><em class="fa fa-bar-chart">&nbsp;</em> Details Product</a></li>
			<li><a href="index.php?management=managementnews"><em class="fa fa-toggle-off">&nbsp;</em> News</a></li>
			<li><a href="?management=managementorder"><em class="fa fa-clone">&nbsp;</em> Order</a></li>
			<li><a href="index.php?management=logoutadmin"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>
  	<div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 " style="border: 2px solid blue">
            <?php
                include('modules/config.php');
                include('modules/content.php');
            ?>
    </div>
       </div> 
    <script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    

</body>
</html>
