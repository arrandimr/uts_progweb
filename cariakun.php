<?php
	$servername  = "localhost";
	$database = "web_uts";
	$username = "root";
	$password  = "";
	$conn = mysqli_connect($servername, $username, $password, $database);
	
	if (!$conn){
	die("Connection failed : " . mysqli_connect_error());
	}
	
	$sql = "SELECT * FROM login WHERE username='".$_POST['username']."' and password='".$_POST['password']."';";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
		header ("location:cekregis.php");}
			
	} else {
		include "loginkosong.php";
	};
	
	mysqli_close($conn);
?>