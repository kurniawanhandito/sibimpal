<div class="admin-content col-md-10">
	<div class="page-header">
		<h1>SISTEM INVENTARIS BARANG UNIVERSTAS TELKOM</h1>
		<h3>Data Tanah</h3>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Tabel Data Tanah</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<tr>
					<th>Luas Tanah</th>
					<th>Fakultas</th>
					<th>Lokasi Tanah</th>
				</tr>
				<?php foreach($tanah as $data){
					echo "<tr>";
					echo "<td>".$data['luas']."</td>";
					echo "<td>".$data['fakultas']."</td>";
					echo "<td>".$data['lokasi']."</td>";
					echo "</tr>";
				}; ?>
			</table>
		</div>
	</div>
</div>