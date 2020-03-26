<?php 
if (empty($_POST['username'] && $_POST['password'])){
	header("location:loginkosong.php");
}
else {
	include "cariakun.php";
}
?>