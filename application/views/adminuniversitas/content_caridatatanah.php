<div class="admin-content col-md-10">
	<div class="page-header">
		<h1>SISTEM INVENTARIS BARANG UNIVERSTAS TELKOM</h1>
		<h3>Cari Data Tanah</h3>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Tabel Data Tanah</h3>
		</div>
		<div class="panel-body">
			<table id="caridatatanah" class="table table-hover">
				<thead>
					<tr>
						<th>ID Tanah</th>
						<th>Luas Tanah</th>
						<th>Fakultas</th>
						<th>Lokasi Tanah</th>
						<th>Tanggal Input</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($tanah as $data){
						echo "<tr>";
						echo "<td>".$data['idtanah']."</td>";
						echo "<td>".$data['luas']."</td>";
						echo "<td>".$data['fakultas']."</td>";
						echo "<td>".$data['lokasi']."</td>";
						echo "<td>".$data['tanggalinput']."</td>";
						echo "</tr>";
					}; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>