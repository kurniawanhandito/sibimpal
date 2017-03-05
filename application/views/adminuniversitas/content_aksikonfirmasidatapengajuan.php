<div class="admin-content col-md-10">
	<div class="page-header">
		<h1>SISTEM INVENTARIS BARANG UNIVERSTAS TELKOM</h1>
		<h3>Aksi Konfirmasi Data Pengajuan</h3>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Aksi Konfirmasi Data Pengajuan</h3>
		</div>
		<div class="panel-body">
			<form>
				<div class="form-group">
					<label for="inputIdBarang">ID Barang</label>
					<select class="form-control">
						<option>1</option>
					</select>
				</div>
				<div class="form-group">
					<label for="inputNamaBarang">Nama Barang</label>
					<input type="text" class="form-control" id="inputNamaBarang" placeholder="Nama Barang" disabled/>
				</div>
				<div class="form-group">
					<label for="inputJumlah">Jumlah</label>
					<input type="number" class="form-control" id="inputJumlah" placeholder="Jumlah" disabled/>
				</div>
				<div class="form-group">
					<label for="inputPengajaunOleh">Diajukan Oleh</label>
					<input type="text" class="form-control" id="inputPengajaunOleh" placeholder="Diajukan Oleh" disabled/>
				</div>
				<div class="form-group">
					<label for="inputTanggalPengajuan">Tanggal Pengajuan</label>
					<input type="date" class="form-control" id="inputTanggalPengajuan" placeholder="Tanggal Pengajuan" disabled/>
				</div>
				<div class="form-group">
					<label for="inputStatus">Status</label>
					<input type="text" class="form-control" id="inputStatus" placeholder="Status" disabled/>
				</div>
				<div class="alert alert-warning" role="alert">Tentukan aksi konfirmasi untuk pengajuan ini.</div>
				<div class="form-group">
					<label for="inputAksiKonfirmasi">Pilih Aksi</label>
					<select class="form-control" name="aksi" >
						<option value="TERIMA">TERIMA</option>
						<option value="TOLAK">TOLAK</option>
                	</select>
				</div>
				<button type="submit" class="btn btn-default">Ubah</button>
				<button type="button" class="btn btn-danger">Reset</button>
			</form>
		</div>
	</div>
</div>