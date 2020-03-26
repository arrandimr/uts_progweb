<?php 
if (empty($_GET['username'] && $_GET['password'] && $_GET['nik'] && $_GET['nkk'] && $_GET['nama'] && $_GET['tempatlhr'] && $_GET['tgllhr'] && $_GET['agama'] && $_GET['alamat'] && $_GET['provinsi'] && $_GET['profesi'])){
	header("location:biodatakosong.php");
}
else {
	include "simpanbiodata.php";
}
?>