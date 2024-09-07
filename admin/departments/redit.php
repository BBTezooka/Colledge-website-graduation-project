<?php
	$ID_Departments = $_GET['ID_Departments'];
	$Name_Departments = $_GET['Name_Departments'];
	
		include('../database/dbconfig.php');
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "UPDATE `Departments` SET Name_Departments='$Name_Departments' WHERE ID_Departments='$ID_Departments'");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh' CONTENT='0; url=index.php'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh' CONTENT='0; url=index.php'>";
		}
