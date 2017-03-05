<div class="admin-content col-md-10">
	<div class="page-header">
		<h1>SISTEM INVENTARIS BARANG UNIVERSITAS TELKOM</h1>
		<h3>Input Data Pengajuan</h3>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Form Input Data Pengajuan</h3>
		</div>
		<div class="panel-body">
			<form>
				<div class="form-group">
					<label for="idPengajuan">ID Pengajuan</label>
					<input type="text" class="form-control" id="idPengajuan" placeholder="Format : UNXXXX" required/>
				</div>
				<div class="form-group">
					<label for="ketarangan">Keterangan</label>
					<input type="text" class="form-control" id="keterangan" placeholder="Keterangan" required/>
				</div>
				<div class="form-group">
					<label for="fakultas">Fakultas</label>
					<input type="text" class="form-control" id="fakultas" placeholder="Fakultas" disabled value="<?php foreach($admin as $data){
								echo $data['username'];
							}; ?>"/>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
				<button type="button" class="btn btn-danger">Reset</button>
			</form>
		</div>
	</div>
</div>