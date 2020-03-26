<?php 
$servername = "localhost";
$database = "web_uts";
$username = "root";
$password  = "";
date_default_timezone_set('Asia/Jakarta');
$date=date("y/m/d");
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
	die("Connection failed : " . mysqli_connect_error());
}

$sql = "update login set nik='".$_GET['nik']."', no_kk='".$_GET['nkk']."', nama='".$_GET['nama']."', tempatlahir='".$_GET['tempatlhr']."', tanggallahir='".$_GET['tgllhr']."', agama='".$_GET['agama']."', alamat='".$_GET['alamat']."', provinsi='".$_GET['provinsi']."', profesi='".$_GET['profesi']."', namaayah='".$_GET['namaayah']."', tempatlahirayah='".$_GET['kotalhra']."', tgllahirayah='".$_GET['tgllhra']."', agamaayah='".$_GET['agamaa']."', profesiayah='".$_GET['profesia']."', namaibu='".$_GET['namaibu']."', tempatlahiribu='".$_GET['kotalhri']."', tgllahiribu='".$_GET['tgllhri']."', agamaibu='".$_GET['agamai']."', profesiibu='".$_GET['profesii']."', tanggal_regist='".$date."' where username='".$_GET['username']."' and password='".$_GET['password']."';";

if (mysqli_query($conn, $sql)){
	include "biodatadisimpan.php";
} else {
	echo "Error : ".$sql."<br>".mysqli_error($conn);
	include "datadiri.php";
}
mysqli_close($conn);

?>