<?php
		$ID_Specialnost = $_GET['ID_Specialnost'];

		include('../database/dbconfig.php');
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "DELETE FROM `Specialnost` WHERE ID_Specialnost='$ID_Specialnost'");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh' CONTENT='0; url=index.php'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh' CONTENT='0; url=index.php'>";
		}
