<?php 

include "koneksi.php";

$id=$_POST['no_punggung'];
$no_punggung=$_POST['no_punggung'];
$nama=$_POST['nama'];
$posisi=$_POST['posisi'];
$tgl_lahir=$_POST['tgl_lahir'];
$usia=$_POST['usia'];
$agama=$_POST['agama'];
$kewarganegaraan=$_POST['kewarganegaraan'];
$harga_pasar=$_POST['harga_pasar'];

$ubah=$koneksi->query("update pemain set no_punggung='$no_punggung', nama='$nama', posisi='$posisi', tgl_lahir='$tgl_lahir', usia='$usia',  agama='$agama', kewarganegaraan='$kewarganegaraan', harga_pasar='$harga_pasar' where no_punggung='$id'");

if ($ubah==true){

	header("location:tampil-pemain.php?pesan=editBerhasil");
} else{
	echo "Error";
}


?>