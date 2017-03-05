<div class="admin-content col-md-10">
	<div class="page-header">
		<h1>SISTEM INVENTARIS BARANG UNIVERSTAS TELKOM</h1>
		<h3>Ubah Kata Sandi</h3>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Form Ubah Kata Sandi</h3>
		</div>
		<div class="panel-body">
			<form>
				<div class="form-group">
					<label for="inputUsername">Username</label>
					<input type="text" class="form-control" id="inputUsername" placeholder="Username" disabled value="<?php foreach($admin as $data){
								echo $data['username'];
							}; ?>" />
				</div>
				<div class="form-group">
					<label for="inputKataSandiLama">Kata Sandi Lama</label>
					<input type="text" class="form-control" id="inputKataSandiLama" placeholder="Kata Sandi Lama" required/>
				</div>
				<div class="form-group">
					<label for="inputKataSandiBaru">Kata Sandi Baru</label>
					<input type="text" class="form-control" id="inputKataSandiBaru" placeholder="Kata Sandi Baru" required/>
				</div>
				<button type="submit" class="btn btn-default">Ubah</button>
				<button type="button" class="btn btn-danger">Reset</button>
			</form>
		</div>
	</div>
</div>