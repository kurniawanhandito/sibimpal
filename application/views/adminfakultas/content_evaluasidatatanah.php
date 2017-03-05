<div class="admin-content col-md-10">
	<div class="page-header">
		<h1>SISTEM INVENTARIS BARANG UNIVERSTAS TELKOM</h1>
		<h3>Evaluasi Data Tanah</h3>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Form Evaluasi Data Tanah</h3>
		</div>
		<div class="panel-body">
			<form>
				<div class="form-group">
					<label for="inputIdTanah">ID Tanah</label>
					<select class="form-control">
						<option>1</option>
					</select>
				</div>
				<div class="form-group">
					<label for="inputLuasTanah">Luas Tanah</label>
					<input type="text" class="form-control" id="inputLuasTanah" placeholder="Satuan m2" disabled/>
				</div>
				<div class="form-group">
					<label for="inputFakultas">Fakultas</label>
					<input type="text" class="form-control" id="inputFakultas" placeholder="Fakultas" disabled/>
				</div>
				<div class="form-group">
					<label for="inputLokasiTanah">Lokasi Tanah</label>
					<input type="text" class="form-control" id="inputLokasiTanah" placeholder="Koordinat garis bujur dan lintang" disabled/>
				</div>
				<div class="alert alert-warning" role="alert">Tentukan luas tanah saat ini.</div>
				<div class="form-group">
					<label for="inputEvaluasiJumlahBaik">Evaluasi luas tanah</label>
					<input type="text" class="form-control" id="inputLuasTanah" placeholder="Satuan m2" required />
				</div>
				<button type="submit" class="btn btn-default">Input</button>
				<button type="button" class="btn btn-danger">Reset</button>
			</form>
		</div>
	</div>
</div>