<?php
	$id = $_GET['id'];
	$login = $_GET['login'];
	$password = $_GET['password'];
	$abit=$_GET['abit'];
	$idRole=$_GET['idRole'];
	
		include('../database/dbconfig.php');
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "UPDATE `user` SET `login`='$login', `password`='$password' , `abit`='$abit', `idRole`= '$idRole' WHERE id='$id'");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh' CONTENT='0; url=index.php'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh' CONTENT='0; url=index.php'>";
		}
