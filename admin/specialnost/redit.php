<?php
	$ID_Specialnost = $_GET['ID_Specialnost'];
	$Name_Specialnost = $_GET['Name_Specialnost'];
	$ID_Departments = $_GET['ID_Departments'];
	
		include('../database/dbconfig.php');
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "UPDATE `Specialnost` SET Name_Specialnost='$Name_Specialnost', ID_Departments='$ID_Departments' WHERE ID_Specialnost='$ID_Specialnost'");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh' CONTENT='0; url=index.php'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh' CONTENT='0; url=index.php'>";
		}
