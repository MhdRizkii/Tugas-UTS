<!DOCTYPE html>
<html>
<head>
<title> Menampilkan hasil inputan form </title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="proses-input-pemain.php" method="POST">
					<div class="form-group">
						<label for="no_punggung">No_Punggung</label>
						<input type="number" name="no_punggung" class="form-control">
					</div>

					<div class="form-group">
						<label for="nama">NAMA</label>
						<input type="text" name="nama" class="form-control" placeholder="Isikan NAMA">
					</div>

					<div class="form-group">
						<label for="posisi">POSISI</label>
						<input type="text" name="posisi" class="form-control" placeholder="Isikan POSISI">
					</div>

					<div class="form-group">
						<label for="tgl_lahir">Tgl_Lahir</label>
						<input type="date" name="tgl_lahir" class="form-control">
					</div>

					<div class="form-group">
						<label for="usia">Usia</label>
						<input type="text" name="usia" class="form-control" placeholder="Isikan usia">
					</div>

					<div class="form-group">
						<label for="agama">Agama</label>
						<select name="agama" class="form-control">
							<option value="islam">ISLAM</option>
							<option value="Kristen">KRISTEN</option>
							<option value="budha">BUDHA</option>
							<option value="hindu">HINDU</option>
							<option value="konghuchu">KONGHUCHU</option>
						</select>
					</div>
					
					<div class="form-group">
				  		<label for="alamat">Kewarganegaraan</label>
				  		<textarea name="kewarganegaraan" class="form-control" placeholder="Isikan Kewarganegaraan"></textarea>
				  	</div>
				  	<div class="form-group">
						<label for="harga_pasar">Harga_Pasar</label>
						<input type="text" name="harga_pasar" class="form-control">
					</div>
						
						<input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
						<input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
					</div>
				</form>
			</div>
		</div>
	</div>

<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>