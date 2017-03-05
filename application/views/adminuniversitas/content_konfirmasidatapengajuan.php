<div class="admin-content col-md-10">
	<div class="page-header">
		<h1>SISTEM INVENTARIS BARANG UNIVERSTAS TELKOM</h1>
		<h3>Konfirmasi Data Pengajuan</h3>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Pelaporan Data Pengajuan</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<tr>
					<th>ID Pengajuan</th>
					<th>Tanggal Pengajuan</th>
					<th>Diajukan Fakultas</th>
					<th>Keterangan</th>
					<th>Status</th>
					<th>Aksi</th>					
				</tr>
				<tr>
					<?php foreach($pengajuan as $data){
						echo "<tr>";
							echo "<td>".$data['idpengajuan']."</td>";
							echo "<td>".$data['tanggalpengajuan']."</td>";
							echo "<td>".$data['fakultas']."</td>";
							echo "<td>".$data['keterangan']."</td>";
							echo "<td>".$data['status']."</td>";
							echo "<td><button type='button' class='btn btn-primary btn-sm'>Aksi</button></td>";
						echo "</tr>";
					}; ?>
				</tr>
			</table>
		</div>
	</div>
</div>