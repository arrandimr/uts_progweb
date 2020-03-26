<?php 
if (empty($_POST['username'] && $_POST['password'])){
	header("location:kosong.php");
} else {
	include "simpan.php";
}
?>