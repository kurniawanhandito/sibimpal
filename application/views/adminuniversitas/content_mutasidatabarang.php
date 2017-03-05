<div class="admin-content col-md-10">
	<div class="page-header">
		<h1>SISTEM INVENTARIS BARANG UNIVERSTAS TELKOM</h1>
		<h3>Mutasi Data Barang</h3>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Form Mutasi Data Barang</h3>
		</div>
		<div class="panel-body">
			<form>
				<div class="form-group">
					<label for="inputIdBarang">ID Barang</label>
					<select class="form-control">
						<?php foreach($barang as $value){
								echo "<option value>".$value['idbarang']."</option>";
							};
						?>
					</select>
					<!-- gunakan https://api.jquery.com/jquery.post/ -->
					<input type="text" class="form-control" name="inputIdBarang" placeholder="Id Barang" disabled/>
				</div>
				<div class="form-group">
					<label for="inputNamaBarang">Nama Barang</label>
					<input type="text" class="form-control" name="inputNamaBarang" placeholder="Nama Barang" disabled/>
				</div>
				<div class="form-group">
					<label for="inputFakultas">Fakultas</label>
					<input type="text" class="form-control" name="inputFakutlas" placeholder="Fakultas" disabled/>
				</div>
				<div class="form-group">
					<label for="inputJumlahBaik">Jumlah Kondisi Baik</label>
					<input type="number" class="form-control" name="inputJumlahBaik" placeholder="Jumlah Kondisi Baik" disabled/>
				</div>
				<div class="alert alert-warning" role="alert">Pilih unit dan tentukan jumlah barang yang akan dimutasi.</div>
				<div class="form-group">
					<label for="inputMutasiUnit">Mutasi Ke Fakultas</label>
					<select class="form-control">
						<option value="FIF">FIF</option>
						<option value="FTE">FTE</option>
						<option value="FRI">FRI</option>
						<option value="FKB">FKB</option>
						<option value="FEB">FEB</option>
						<option value="FIK">FIK</option>
						<option value="FIT">FIT</option>
					</select>
				</div>
				<div class="form-group">
					<label for="inputJumlah">Jumlah</label>
					<input type="number" class="form-control" id="inputJumlah" placeholder="Jumlah" required/>
				</div>
				<div class="form-group">
					<label for="inputIdBarangBaru">ID Barang Baru</label>
					<input type="text" class="form-control" id="inputIdBarangBaru" placeholder="Format : DBRXXXX" required/>
				</div>
				<button type="submit" class="btn btn-default">Input</button>
				<button type="button" class="btn btn-danger">Reset</button>
			</form>
		</div>
	</div>
</div>