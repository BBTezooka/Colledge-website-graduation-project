<?php
	$Name_Specialnost = $_POST['Name_Specialnost'];
	$ID_Departments = $_POST['ID_Departments'];

	
	include('../database/dbconfig.php');
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "INSERT INTO `Specialnost`( Name_Specialnost, ID_Departments ) VALUES ( '$Name_Specialnost', '$ID_Departments')");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh' CONTENT='0; url=index.php'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh' CONTENT='0; url=index.php'>";
		}
