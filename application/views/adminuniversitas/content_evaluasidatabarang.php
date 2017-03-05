<div class="admin-content col-md-10">
	<div class="page-header">
		<h1>SISTEM INVENTARIS BARANG UNIVERSTAS TELKOM</h1>
		<h3>Evaluasi Data Barang</h3>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Form Evaluasi Data Barang</h3>
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
					<label for="inputKepemilikan">Kepemilikan</label>
					<input type="text" class="form-control" id="inputKepemilikan" placeholder="Kepemilikan" disabled/>
				</div>
				<div class="form-group">
					<label for="inputJumlahBaik">Jumlah Kondisi Baik</label>
					<input type="number" class="form-control" id="inputJumlahBaik" placeholder="Jumlah Kondisi Baik" disabled/>
				</div>
				<div class="form-group">
					<label for="inputJumlahBuruk">Jumlah Kondisi Baik</label>
					<input type="number" class="form-control" id="inputJumlahBuruk" placeholder="Jumlah Kondisi Buruk" disabled/>
				</div>
				<div class="alert alert-warning" role="alert">Tentukan jumlah barang kondisi baik saat ini.</div>
				<div class="form-group">
					<label for="inputEvaluasiJumlahBaik">Evaluasi Jumlah Kondisi Baik</label>
					<input type="number" class="form-control" id="inputEvaluasiJumlahBaik" placeholder="Evaluasi Jumlah Kondisi Baik" required/>
				</div>
				<button type="submit" class="btn btn-default">Input</button>
				<button type="button" class="btn btn-danger">Reset</button>
			</form>
		</div>
	</div>
</div>