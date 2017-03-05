<div class="admin-content col-md-10">
	<div class="page-header">
		<h1>SISTEM INVENTARIS BARANG UNIVERSTAS TELKOM</h1>
		<h3>Cari Data Barang</h3>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Tabel Data Barang</h3>
		</div>
		<div class="panel-body">
			<table id="caridatabarang" class="table table-hover">
				<thead>
					<tr>
						<th>ID Barang</th>
						<th>Nama Barang</th>
						<th>Fakultas</th>
						<th>Jumlah</th>
						<th>Kondisi Baik</th>
						<th>Kondisi Buruk</th>
						<th>Tanggal Input</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($barang as $data){
						echo "<tr>";
						echo "<td>".$data['idbarang']."</td>";
						echo "<td>".$data['namabarang']."</td>";
						echo "<td>".$data['fakultas']."</td>";
						echo "<td>".$data['jumlah']."</td>";
						echo "<td>".$data['kondisibaik']."</td>";
						echo "<td>".$data['kondisiburuk']."</td>";
						echo "<td>".$data['tanggalinput']."</td>";
						echo "</tr>";
					}; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>