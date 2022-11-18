<?php

$no_punggung=$_POST['no_punggung'];
$nama=$_POST['nama'];
$posisi=$_POST['posisi'];
$tgl_lahir=$_POST['tgl_lahir'];
$usia=$_POST['usia'];
$agama=$_POST['agama'];
$kewarganegaraan=$_POST['kewarganegaraan'];
$harga_pasar=$_POST['harga_pasar'];


include "koneksi.php";

$simpan=$koneksi->query("insert into pemain (no_punggung,nama,posisi,tgl_lahir,usia,agama,kewarganegaraan,harga_pasar) 
						values ('$no_punggung', '$nama', '$posisi', '$tgl_lahir', '$usia', '$agama', '$kewarganegaraan', '$harga_pasar')");

if ($simpan==true){

	header("location:tampil-pemain.php?pesan=inputBerhasil");
} else{
	echo "Error";
}

?>
