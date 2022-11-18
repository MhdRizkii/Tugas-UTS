<!doctype HTML>
<html>
<head>
	<title>Data Pemain Bayern Munchen</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="DataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1>Data Pemain Bayern Munchen</h1>
<?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
		<div class="alert alert-success">
			Penyimpanan Berhasil!
		</div>
		<?php 

}

?>

<?php 

if(@$_GET['pesan']=="hapusBerhasil"){

?>
		<div class="alert alert-success">
			Data Berhasil Dihapus!
		</div>
		<?php 

}

?>

<?php 

if(@$_GET['pesan']=="editBerhasil"){

?>
		<div class="alert alert-success">
			Data Berhasil Diedit!
		</div>
		<?php 

}

?>
		<table id="dataTables" class="table table-bordered">
		<thead>
			<tr>
				<th>No_Punggung</th><th>Nama</th><th>Posisi</th><th>Tgl_Lahir</th><th>Usia</th><th>Agama</th><th>Kewarganegaraan</th><th>Harga_Pasar</th>
				<th>
					<a href="input-pemain.php">
						<button class="btn btn-info glyphicon glyphicon-plus"></button>
					</a>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php 

		include("koneksi.php");
		$sql=$koneksi->query("select * from pemain order by no_punggung ASC");

		while($row= $sql->fetch_assoc()){
		?>

			<tr>
				<td><?php echo $row['no_punggung']?></td>
				<td><?php echo $row['nama']?></td>
				<td><?php echo $row['posisi']?></td>
				<td><?php echo $row['tgl_lahir']?></td>
				<td><?php echo $row['usia']?></td>
				<td><?php echo $row['agama']?></td>
				<td><?php echo $row['kewarganegaraan']?></td>
				<td><?php echo $row['harga_pasar']?></td>
				<td>

					<a href="edit-pemain.php?id=<?php echo $row['no_punggung']?>">
						<button class="btn btn-xs btn-denger glyphicon glyphicon-edit"></button>
					</a>

					<a href="hapus-pemain.php?id=<?php echo $row['no_punggung']?>" onclick=" return confirm('anda yakin menghapus data?')">
						<button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
					</a>
			</tr>

		<?php 
		}
		?>
		</tbody>
		</table>
		</div>
	</div>
</div>


<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="DataTables/datatables.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$('#dataTables').DataTable();
});

</script>

</body>
</html>