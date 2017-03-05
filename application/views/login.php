<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- This (user-scalable=no) tag disables zooming, meaning users are only able to scroll -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<title>SIB | Universitas Telkom</title>
	
	<link href="<?php echo base_url()."asset/img/"; ?>telu_icon.gif" rel="icon" type="image/gif">
	<link href="<?php echo base_url()."asset/css/"; ?>bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()."asset/css/"; ?>style.css" rel="stylesheet">
	
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-body">
	<div class="container-fluid">
		<div class="row login-row-1">
			<img src="<?php echo base_url()."asset/img/"; ?>telu_icon.png">
		</div>
		<div class="login-row-2 row">
			<div class="col-md-4 col-md-offset-4">
				<form action="" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="inputUsername" placeholder="Username" required/>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="inputPassword" placeholder="Password" required/>
					</div>
					<button type="submit" name="submit" class="btn btn-default">Login</button>	
				</form>
			</div>
		</div>
		<div class="login-bottom">
			&copy; 2016 SIB-IMPAL
		</div>
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="asset/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>