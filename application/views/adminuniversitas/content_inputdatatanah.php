<div class="admin-content col-md-10">
	<div class="page-header">
		<h1>SISTEM INVENTARIS BARANG UNIVERSTAS TELKOM</h1>
		<h3>Input Data Tanah</h3>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Form Input Data Tanah</h3>
		</div>
		<div class="panel-body">
			<form action="<?php echo base_url()."index.php/adminuniversitas/keloladatatanah/do_inputdatatanah";?>" method="POST">
				<div class="form-group">
					<label for="inputLuasTanah">Luas Tanah</label>
					<input type="number" class="form-control" name="inputLuasTanah" placeholder="Satuan m2" required min="0"/>
				</div>
				<div class="form-group">
					<label for="inputFakultas"> Fakultas </label>
                	<select class="form-control" name="inputFakultas" >
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
					<label for="inputLokasiTanah">Lokasi Tanah</label>
					<input type="text" class="form-control" name="inputLokasiTanah" placeholder="Koordinat garis bujur dan lintang" required/>
				</div>
				<button type="submit" class="btn btn-default">Input</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</form>
		</div>
	</div>
</div>