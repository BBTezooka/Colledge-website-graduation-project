<?php
		$ID_Ochcenka = $_GET['ID_Ochcenka'];

		include('../database/dbconfig.php');
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "DELETE FROM `Ochcenka` WHERE ID_Ochcenka='$ID_Ochcenka'");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh' CONTENT='0; url=index.php'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh' CONTENT='0; url=index.php'>";
		}
