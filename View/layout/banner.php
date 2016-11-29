<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Phan Mem Quan Ly De Tai</title>
	<link href="public/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="public/css/sb-admin.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Phan Mem Quan Ly De Tai</a>
			</div>
			<!-- Top Menu Items -->
			<ul class="nav navbar-right top-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['username'];?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="?m=user&a=thongtin"><i class="fa fa-fw fa-user"></i> Thong Tin</a>
						</li>
						<li>
							<a href="?m=user&a=caidat"><i class="fa fa-fw fa-gear"></i> Cai Dat</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="Controller/login.php?a=logout"><i class="fa fa-fw fa-power-off"></i> Dang xuat</a>
						</li>
					</ul>
				</li>
			</ul>