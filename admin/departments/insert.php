<?php
	$Name_Departments = $_POST['Name_Departments'];

	
	include('../database/dbconfig.php');
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "INSERT INTO `Departments`( Name_Departments ) VALUES ( '$Name_Departments')");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh' CONTENT='0; url=index.php'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh' CONTENT='0; url=index.php'>";
		}
