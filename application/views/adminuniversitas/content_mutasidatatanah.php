<div class="admin-content col-md-10">
	<div class="page-header">
		<h1>SISTEM INVENTARIS BARANG UNIVERSTAS TELKOM</h1>
		<h3>Mutasi Data Tanah</h3>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Form Mutasi Data Tanah</h3>
		</div>
		<div class="panel-body">
			<form>
				<div class="form-group">
					<label for="inputIdTanah">ID Tanah</label>
					<select class="form-control">
						<option>-- Pilih ID Tanah</option>
					</select>
					<input type="text" class="form-control" id="inputIdTanah" placeholder="Id Tanah" disabled/>
				</div>
				<div class="form-group">
					<label for="inputLuasTanah">Luas Tanah</label>
					<input type="text" class="form-control" id="inputLuasTanah" placeholder="Satuan m2" disabled/>
				</div>
				<div class="form-group">
					<label for="inputFakultas">Fakultas</label>
					<input type="text" class="form-control" id="inputFakutlas" placeholder="Fakultas" disabled/>
				</div>
				<div class="form-group">
					<label for="inputLokasiTanah">Lokasi Tanah</label>
					<input type="text" class="form-control" id="inputLokasiTanah" placeholder="Koordinat garis bujur dan lintang" disabled/>
				</div>
				<div class="alert alert-warning" role="alert">Pilih Fakultas Tujuan dan Tentukan Luas Tanah yang akan dimutasi.</div>
				<div class="form-group">
					<label for="inputMutasiFakultas">Mutasi Ke Fakultas</label>
					<select class="form-control" name="kepemilikanTanah" >
			            <option name="kepemilikanTanah" value="FIK" >FIK</option>
			            <option name="kepemilikanTanah" value="FIF" >FIF</option>
			            <option name="kepemilikanTanah" value="FRI" >FRI</option>
			            <option name="kepemilikanTanah" value="FEB" >FEB</option>
			            <option name="kepemilikanTanah" value="FKB" >FKB</option>
					</select>
				</div>
				<div class="form-group">
					<label for="inputLuasTanah">Luas Tanah</label>
					<input type="text" class="form-control" id="inputLuasTanah" placeholder="Satuan m2" required/>
				</div>
				<div class="form-group">
					<label for="inputIdTanahBaru">ID Tanah Baru</label>
					<input type="text" class="form-control" id="inputIdTanahBaru" placeholder="Format : DTNXX" required/>
				</div>
				<button type="submit" class="btn btn-default">Input</button>
				<button type="button" class="btn btn-danger">Reset</button>
			</form>
		</div>
	</div>
</div>