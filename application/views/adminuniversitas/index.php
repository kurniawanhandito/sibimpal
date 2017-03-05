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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()."asset/js/"; ?>jquery-1.12.4.js"></script>
    <script src="<?php echo base_url()."asset/js/"; ?>jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()."asset/js/"; ?>dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()."asset/js/"; ?>bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<nav class="admin-navbar navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?php echo base_url()."index.php/adminuniversitas/dashboard";?>"><?php foreach($admin as $data){
								echo $data['keterangan'];
							}; ?></a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span> Konfirmasi Pengajuan <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<?php foreach($pengajuan as $data){
										echo "<li><a>".$data['fakultas']."<br/>".$data['status']."</a></li>";
										echo "<li role='separator' class='divider'></li>";
									};
									?>								
									<li><a href="<?php echo base_url()."index.php/adminuniversitas/pengajuan/konfirmasidatapengajuan";?>">Lihat Semua Pengajuan</a></li>
								</ul>
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
							<li><a href="<?php echo base_url()."index.php/adminuniversitas/keloladatabarang/inputdatabarang";?>">Input Data Barang</a></li>
							<li><a href="<?php echo base_url()."index.php/adminuniversitas/keloladatabarang/mutasidatabarang";?>">Mutasi Data Barang</a></li>
							<li><a href="<?php echo base_url()."index.php/adminuniversitas/keloladatabarang/caridatabarang";?>">Cari Data Barang</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-left">
					<li class="dropdown">
						<a class="dropdown-toggle" role="button" data-toggle="collapse" href="#collapseKelolaTanah" aria-expanded="false" aria-controls="collapseKelolaTanah"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Kelola Data Tanah <span class="caret"></span></a>
						<ul class="collapse" id="collapseKelolaTanah">
							<li><a href="<?php echo base_url()."index.php/adminuniversitas/keloladatatanah/inputdatatanah";?>">Input Data Tanah</a></li>
							<li><a href="<?php echo base_url()."index.php/adminuniversitas/keloladatatanah/mutasidatatanah";?>">Mutasi Data Tanah</a></li>
							<li><a href="<?php echo base_url()."index.php/adminuniversitas/keloladatatanah/caridatatanah";?>">Cari Data Tanah</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-left">
					<li class="dropdown">
						<a class="dropdown-toggle" role="button" data-toggle="collapse" href="#collapsePelaporan" aria-expanded="false" aria-controls="collapsePelaporan"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Pelaporan <span class="caret"></span></a>
						<ul class="collapse" id="collapsePelaporan">
							<li><a href="<?php echo base_url()."index.php/adminuniversitas/pelaporan/laporandatabarang";?>">Laporan Data Barang</a></li>
							<li><a href="<?php echo base_url()."index.php/adminuniversitas/pelaporan/laporandatatanah";?>">Laporan Data Tanah</a></li>
							<li><a href="<?php echo base_url()."index.php/adminuniversitas/pelaporan/laporandatamutasi";?>">Laporan Data Mutasi</a></li>
							<li><a href="<?php echo base_url()."index.php/adminuniversitas/pelaporan/laporandatapengajuan";?>">Laporan Data Pengajuan</a></li>
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

	<script>
		$(document).ready(function() {
	    	$('#caridatatanah').DataTable({
	    		"aLengthMenu": [[5, 10, 20, 50, -1], [5, 10, 20, 50, "All"]],
        		"iDisplayLength": 5
	    	});
	    	$('#caridatabarang').DataTable({
	    		"aLengthMenu": [[5, 10, 20, 50, -1], [5, 10, 20, 50, "All"]],
        		"iDisplayLength": 5
	    	});
    });
	</script>

</body>
</html>
