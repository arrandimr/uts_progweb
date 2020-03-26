<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Web Profile</title>
	<link rel="stylesheet" type="text/css" href="efekwebprofil.css">
</head>

	<body>
		<nav class="menu" align="center">
			<a href="home.php"><img src="Tak_Punya_E-_KTP_Tak_Bisa_Nyoblos_Pilkada_Ini_Jawaban_Dinas_Kependudukanz3E.png" height="30px"></a><ul>
				<li>
					<a href="pengumuman.php">pengumuman</a>
				</li>
				<li>
					<a href="login.php">login</a>
				</li>
				<li>
					<a href="home.php">Home</a>
				</li>
				
				
		 
			</ul>
		</nav>
	<header>
		<h2 class="deskripsi">DATA DIRI ANDA</h2></header>
	
	<div class="wrap">
			<div class="biodata">
				<div class="infopemilik">
					by <b>arrandi muhamad riesta</b>
				</div>
				<p align="center">Cari : <input type="text" name="username"><input type="password" name="password"> <input type="submit" name="cari" value="cari"></p>
				<br>
				<?php
	$servername  = "localhost";
	$database = "web_uts";
	$username = "root";
	$password  = "";
	$conn = mysqli_connect($servername, $username, $password, $database);
	
	if (!$conn){
	die("Connection failed : " . mysqli_connect_error());
	}
	$sql = "select * from login where username='".$_POST['username']."';";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0){
		
		while($row = mysqli_fetch_assoc($result)){
			echo "<h3>Data Pribadi</h3>";
			echo   "<table width='800px' align='center' id='tdbiodata'>";
			echo	"<tr>
					  	<td width='200px'>Username </td><td> : </td>
						<td>".$row['username']."</td></tr>";
			echo	"<tr>
						<td>NIK</td>
						<td> : </td>
						<td>".$row['nik']."</td>
					</tr>";
			echo	"<tr>
						<td>No. KK</td>
						<td> : </td>
						<td>".$row['no_kk']."</td>
					</tr>";
			
			echo	"<tr>
						<td>Nama Lengkap</td>
						<td> : </td>
						<td>".$row['nama']."</td>
					</tr>
					<tr>
						<td>Tanggal Registrasi</td>
						<td> : </td>
						<td>".$row['tanggal_regist']=date("D, d F Y")."</td>
					</tr>";
			echo	"<tr>
						<td>Tempat tanggal Lahir</td>
						<td> : </td>
						<td>".$row['tempatlahir'].", ".$row['tanggallahir']."</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td> : </td>
						<td>".$row['agama']."</td>
					</tr>
					<tr>
						<td>Alamat Sekarang</td>
						<td> : </td>
						<td>".$row['alamat']."</td>
					</tr>
					<tr>
						<td>Provinsi</td>
						<td> : </td>
						<td>".$row['provinsi']."</td>
					</tr>
					<tr>
						<td>Profesi</td>
						<td> : </td>
						<td>".$row['profesi']."</td>
					</tr>
				</table>
				<h3>Data Orang Tua </h3>
			  <table width='800px' align='center' id='tdbiodata'>
					<tr>
						<td width='200px'>Nama Ayah</td>
						<td> : </td>
						<td>".$row['namaayah']."</td>
					</tr>
					<tr>
						<td>Tempat Tgl. Lahir Ayah</td>
						<td> : </td>
						<td>".$row['tempatlahirayah'].", ".$row['tgllahirayah']."</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td> : </td>
						<td>".$row['agamaayah']."</td>
					</tr>
					<tr>
						<td>Profesi  Ayah</td>
						<td> : </td>
						<td>".$row['profesiayah']."</td>
					</tr>
				</table><br>
				<table width='800px' align='center' id='tdbiodata'>
					<tr>
						<td width='200px'>Nama Ibu</td>
						<td> : </td>
						<td>".$row['namaibu']."</td>
					</tr>
					<tr>
						<td>Tempat Tgl. Lahir Ibu</td>
						<td> : </td>
						<td>".$row['tempatlahiribu'].", ".$row['tgllahiribu']."</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td> : </td>
						<td>".$row['agamaibu']."</td>
					</tr>
					<tr>
						<td>Profesi  Ibu</td>
						<td> : </td>
						<td>".$row['profesiibu']."</td>
					</tr>
					
				</table>";
		}
	} else {
		echo "0 results";
	}
	echo "</table>";
	mysqli_close($conn);
	?>
			</div>
	</div>
		</form>}
</body>
</html>