<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Web Profile</title>
	<link rel="stylesheet" type="text/css" href="efekwebprofil.css">
</head>

	<body>
		
		<form method="GET" action="biodatacek.php">
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
		<h2 class="deskripsi">Silahkan lengkapi data diri anda...</h2></header>
	
	<div class="wrap">
			<div class="biodata">
				<div class="infopemilik">
					by <b>arrandi muhamad riesta</b>
				</div>
				<br>
			  <h3>Data Pribadi</h3>
			  <table width="800px" align="center" id="tdbiodata">
				  <tr>
					  	<td width="200px">Username </td><td> : </td>
						<td><input  type="text" name="username"></td></tr>
				<tr>
					<td>Password</td><td> : </td>
					<td><input type="password" name="password" class="text"></td></tr>
					<tr>
						<td width="200px">NIK</td>
						<td> : </td>
						<td><input type="text" name="nik" ></td>
					</tr>
					<tr>
						<td>No. KK</td>
						<td> : </td>
						<td><input type="text" name="nkk"></td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td> : </td>
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td> : </td>
						<td><input type="text" name="tempatlhr"></td>
					</tr>
					<tr>
						<td>Tanggal lahir</td>
						<td> : </td>
						<td><input type="date" name="tgllhr" id="date"></td>
					</tr>
					<tr>
						<td>Agama</td>
						<td> : </td>
						<td><select tabindex="1" name="agama">
						  <option>Islam</option>
						  <option>Kristen</option>
						  <option>Katolik</option>
						  <option>Hindu</option>
						  <option>Budha</option>
						  <option>Konghuchu</option>
					  </select></td>
					</tr>
					<tr>
						<td>Alamat Sekarang</td>
						<td> : </td>
						<td><textarea name="alamat" id="textarea"></textarea></td>
					</tr>
					<tr>
						<td>Provinsi</td>
						<td> : </td>
						<td><input type="text" name="provinsi"></td>
					</tr>
					<tr>
						<td>Profesi</td>
						<td> : </td>
						<td><select name="profesi" id="select" tabindex="1">
                            <option>Pelajar/Mahasiswa</option>
                            <option>Karyawan Swasta</option>
                            <option>Pegawai Negeri</option>
                            <option>Tidak Bekerja</option>
                        </select></td>
					</tr>
				</table>
				<h3>Data Orang Tua </h3>
			  <table width="800px" align="center" id="tdbiodata">
					<tr>
						<td width="200px">Nama Ayah</td>
						<td> : </td>
						<td><input type="text" name="namaayah"></td>
					</tr>
					<tr>
						<td>Tempat Lahir Ayah</td>
						<td> : </td>
						<td><input type="text" name="kotalhra"></td>
					</tr>
					<tr>
						<td>Tanggal lahir Ayah</td>
						<td> : </td>
						<td><input type="date" name="tgllhra" id="date"></td>
					</tr>
					<tr>
						<td>Agama</td>
						<td> : </td>
						<td><select tabindex="1" name="agamaa">
						  <option>Islam</option>
						  <option>Kristen</option>
						  <option>Katolik</option>
						  <option>Hindu</option>
						  <option>Budha</option>
						  <option>Konghuchu</option>
					  </select></td>
					</tr>
					<tr>
						<td>Profesi  Ayah</td>
						<td> : </td>
						<td><select name="profesia" id="select" tabindex="1">
                            <option>Pelajar/Mahasiswa</option>
                            <option>Karyawan Swasta</option>
                            <option>Pegawai Negeri</option>
                            <option>Tidak Bekerja</option>
                        </select></td>
					</tr>
				</table><br>
				<table width="800px" align="center" id="tdbiodata">
					<tr>
						<td width="200px">Nama Ibu</td>
						<td> : </td>
						<td><input type="text" name="namaibu"></td>
					</tr>
					<tr>
						<td>Tempat Lahir Ibu</td>
						<td> : </td>
						<td><input type="text" name="kotalhri"></td>
					</tr>
					<tr>
						<td>Tanggal lahir Ibu</td>
						<td> : </td>
						<td><input type="date" name="tgllhri" id="date"></td>
					</tr>
					<tr>
						<td>Agama</td>
						<td> : </td>
						<td><select tabindex="1" name="agamai">
						  <option>Islam</option>
						  <option>Kristen</option>
						  <option>Katolik</option>
						  <option>Hindu</option>
						  <option>Budha</option>
						  <option>Konghuchu</option>
					  </select></td>
					</tr>
					<tr>
						<td>Profesi  Ibu</td>
						<td> : </td>
						<td><select name="profesii" id="select" tabindex="1">
                            <option>Pelajar/Mahasiswa</option>
                            <option>Karyawan Swasta</option>
                            <option>Pegawai Negeri</option>
                            <option>Tidak Bekerja</option>
                        </select></td>
					</tr>
					<tr><td></td><td></td><td align="right"><input type="submit" name="simpan" value="Simpan" class="submit"></td></tr>
				</table>
			
	  </div>
	</div>
		</form>
</body>
</html>