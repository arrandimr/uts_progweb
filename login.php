<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<link rel="stylesheet" type="text/css" href="efekwebprofil.css">
</head>

	<body>
		
		<form method="POST" action="logincek.php">
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
		<h1 class="judul">Selamat Datang !</h1>
		<p class="deskripsi">Silahkan Login untuk mengisi data diri...</p>
	</header>
	
	<div class="wrap">
			<div class="login">
				<div class="infopemilik">
					by <b>arrandi muhamad riesta</b>
				</div>
				
				<p><table width="280px" align="center">
				<tr><th width="280px">Username :</th></tr>
				<tr><td width="270px"><input  type="text" name="username" class="text"></td></tr>
				</table><br>
				<table width="280px" align="center">
				<tr><th width="280px">Password :</th></tr>
				<tr><td width="270px"><input type="password" name="password" class="text"></td></tr>
				</table>
					 <br>
					<center><input name="login" type="submit" class="submit" value="Masuk"></center>
				</p>				
				<br><a href="home.php" class="selanjutnya">Belum punya akun? →</a>
		</div>
	</div>
		</form>
</body>
</html>