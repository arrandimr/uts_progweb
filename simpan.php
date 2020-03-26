<?php 
$servername = "localhost";
$database = "web_uts";
$username = "root";
$password  = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
	die("Connection failed : " . mysqli_connect_error());
}

$sql = "insert into login (username, password) values ('".$_POST['username']."', '".$_POST['password']."')";

if (mysqli_query($conn, $sql)){
	include "loginbaru.php";
} else {
	echo "Error : ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

?>