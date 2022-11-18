<?php 

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from pemain where no_punggung='$id'");

if($hapus==true){

	header("location:tampil-pemain.php?pesan=hapusBerhasil");

}else{
	echo "error";
}

?>