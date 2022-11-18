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
				<form action="proses-edit-pemain.php" method="POST">
					<?php 
					$id=$_GET['id'];
					include "koneksi.php";
					$tampil=$koneksi->query("select * from pemain where no_punggung='$id'");
					$row=$tampil->fetch_assoc();
					?>
					<div class="form-group">
						<label for="no_punggung">No_Punggung</label>
						<input type="hidden" name="no_punggung" value="<?php echo $row['no_punggung']?>" class="form-control">
						<input type="number" name="no_punggung" value="<?php echo $row['no_punggung']?>" class="form-control">
					</div>

					<div class="form-group">
						<label for="nama">NAMA</label>
						<input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control" placeholder="Isikan NAMA">
					</div>

					<div class="form-group">
						<label for="posisi">POSISI</label>
						<input type="text" name="posisi" value="<?php echo $row['posisi']?>" class="form-control" placeholder="Isikan POSISI">
					</div>

					<div class="form-group">
						<label for="tgl_lahir">Tgl_Lahir</label>
						<input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir']?>" class="form-control">
					</div>

					<div class="form-group">
						<label for="usia">Usia</label>
						<input type="text" name="usia" value="<?php echo $row['usia']?>" class="form-control" placeholder="Isikan usia">
					</div>

					<div class="form-group">
						<label for="agama">Agama</label>
						<select name="agama" class="form-control">
							<option value="<?php echo $row['agama']?>"selected><?php echo $row['agama']?></option>
							<option value="islam">ISLAM</option>
							<option value="Kristen">KRISTEN</option>
							<option value="budha">BUDHA</option>
							<option value="hindu">HINDU</option>
							<option value="konghuchu">KONGHUCHU</option>
						</select>
					</div>
					
					<div class="form-group">
				  		<label for="alamat">Kewarganegaraan</label>
				  		<textarea name="kewarganegaraan" class="form-control" placeholder="Isikan Kewarganegaraan"><?php echo $row['kewarganegaraan']?>"</textarea>
				  	</div>
				  	<div class="form-group">
						<label for="harga_pasar">Harga_Pasar</label>
						<input type="text" name="harga_pasar" value="<?php echo $row['harga_pasar']?>" class="form-control">
					</div>
						
						<input type="submit" name="kirim" value="UBAH" class="btn btn-info">
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