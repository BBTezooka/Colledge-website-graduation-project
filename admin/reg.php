
<?php

include('database/dbconfig.php');
	$login = $_POST['login'];
	$password = $_POST['password'];
	$abit = $_POST['abit'];
	$idRole = $_POST['idRole'];
	
	
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "INSERT INTO `user`(`id`,`login`, `password`,`abit`,`idRole`) VALUES (null, '$login', '$password','$abit',2)");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh' CONTENT='0; url=index.php'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh' CONTENT='0; url=index.php'>";
		}
?>