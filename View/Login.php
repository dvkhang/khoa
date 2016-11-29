
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title>Phan Mem Quan Ly De Tai</title>
	<link href="public/css/bootstrap.min.css" rel="stylesheet"/>

	<!-- Custom CSS -->
	<link href="public/css/sb-admin.css" rel="stylesheet"/>

	<!-- Custom Fonts -->
	<link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<h1 class="text-center">Quan Ly De Tai Nghien Cuu Khoa Hoc</h1>
	<div class="container" id="login">
		<div >
			<form class="form-group" role="form" method="POST" action="Controller/login.php" accept-charset="UTF-8" id="login-nav">
				<h2 class="text-center">Login</h2>
				<?php
				if(isset( $_SESSION["thongbao"])){
					echo '<div class="alert alert-success">'.
					$_SESSION["thongbao"].'
				</div>';
			}
			?>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Username" name="username" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Password" name="password" required>
			</div>
			<div class="form-group text-center">
				<button type="submit" class="btn btn-primary " name="login">Login <i class="glyphicon glyphicon-log-in"></i></button>
			</div>
		</form>
	</div>
</div>
<!-- jQuery -->
<script src="public/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="public/js/bootstrap.min.js"></script>





</body>
</html>