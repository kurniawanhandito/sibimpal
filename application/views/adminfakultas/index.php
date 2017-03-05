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
<body>
	<div class="container-fluid">
		<div class="row">
			<nav class="admin-navbar navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?php echo base_url()."index.php/adminfakultas/dashboard";?>">
							<?php foreach($admin as $data){
								echo $data['keterangan'];
							}; ?>
						</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<button type="button" class="btn-logout btn btn-default navbar-btn" onclick="window.location.href='<?php echo base_url()."index.php/adminfakultas/ubahkatasandi";?>'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Ubah Kata Sandi</button>
							</li>
							<li>
								<button type="button" class="btn-logout btn btn-default navbar-btn" onclick="window.location.href='<?php echo base_url()."index.php/login/logout";?>'"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Log Out</button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="admin-container row">
			<!-- Sidebar -->
			<div class="admin-sidebar col-md-2">
				<ul class="nav navbar-nav navbar-left">
					<li class="dropdown">
						<a class="dropdown-toggle" role="button" data-toggle="collapse" href="#collapseKelolaBarang" aria-expanded="false" aria-controls="collapseKelolaBarang"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Kelola Data Barang <span class="caret"></span></a>
						<ul class="collapse" id="collapseKelolaBarang">
							<li><a href="<?php echo base_url()."index.php/adminfakultas/keloladatabarang/evaluasidatabarang";?>">Evaluasi Data Barang</a></li>
							<li><a href="<?php echo base_url()."index.php/adminfakultas/keloladatabarang/caridatabarang";?>">Lihat Data Barang</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-left">
					<li class="dropdown">
						<a class="dropdown-toggle" role="button" data-toggle="collapse" href="#collapseKelolaTanah" aria-expanded="false" aria-controls="collapseKelolaTanah"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Kelola Data Tanah <span class="caret"></span></a>
						<ul class="collapse" id="collapseKelolaTanah">
							<li><a href="<?php echo base_url()."index.php/adminfakultas/keloladatatanah/evaluasidatatanah";?>">Evaluasi Data Tanah</a></li>
							<li><a href="<?php echo base_url()."index.php/adminfakultas/keloladatatanah/caridatatanah";?>">Lihat Data Tanah</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-left">
					<li class="dropdown">
						<a class="dropdown-toggle" role="button" data-toggle="collapse" href="#collapsePengajuan" aria-expanded="false" aria-controls="collapsePengajuan"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Pengajuan <span class="caret"></span></a>
						<ul class="collapse" id="collapsePengajuan">
							<li><a href="<?php echo base_url()."index.php/adminfakultas/pengajuan/inputdatapengajuan";?>">Input Data Pengajuan</a></li>
							<li><a href="<?php echo base_url()."index.php/adminfakultas/pengajuan/inputdatadetailpengajuan";?>">Input Data Detail Pengajuan</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- End of Sidebar -->

			<!-- Content -->
			<?php echo $content; ?>
			<!-- End of Content -->
		</div>
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url()."asset/js/"; ?>jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()."asset/js/"; ?>bootstrap.min.js"></script>
</body>
</html>
