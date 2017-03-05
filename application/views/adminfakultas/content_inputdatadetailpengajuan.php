<div class="admin-content col-md-10">
	<div class="page-header">
		<h1>SISTEM INVENTARIS BARANG UNIVERSITAS TELKOM</h1>
		<h3>Input Data Detail Pengajuan</h3>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Form Input Data Detail Pengajuan</h3>
		</div>
		<div class="panel-body">
			<form>
				<div class="form-group">
					<label for="idPengajuan">ID Pengajuan</label>
					<select class="form-control">
						<option>1</option>
					</select>
					<br/>
					<input type="text" class="form-control" id="idPengajuan" placeholder="ID Pengajuan" disabled/>
				</div>
				<div class="form-group">
					<label for="status">Status</label>
					<input type="text" class="form-control" id="status" placeholder="Status pengajuan sekarang" disabled/>
				</div>
				<div class="form-group">
					<label for="oleh">Diajukan oleh</label>
					<input type="text" class="form-control" id="oleh" placeholder="Diajukan oleh" disabled/>
				</div>
				<div class="alert alert-warning" role="alert">Tentukan status pengajuan terbaru.</div>
				<div class="form-group">
					<label for="namaBarang">Nama Barang</label>
					<input type="text" class="form-control" id="status" placeholder="Nama Barang" required/>
				</div>
				<div class="form-group">
					<label for="jumlah">Jumlah / Luas</label>
					<input type="number" class="form-control" id="jumlah" placeholder="Jumlah" required/>
				</div>
				<div class="alert alert-danger" role="alert">Masukkan kata sandi pengguna.</div>
				<div class="form-group">
					<label for="authentifikasiPengguna">Authentifikasi Pengguna</label>
					<input type="text" class="form-control" id="authentifikasiPengguna" placeholder="Kata Sandi Pengguna" required/>
				</div>
				<button type="submit" class="btn btn-default">Input</button>
				<button type="button" class="btn btn-danger">Reset</button>
			</form>
		</div>
	</div>
</div>