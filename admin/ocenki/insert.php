<?php
	$Ochcenka_attestata = $_POST['Ochcenka_attestata'];
	$ID_Abiturient = $_POST['ID_Abiturient'];

	
	include('../database/dbconfig.php');
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "INSERT INTO `Ochcenka`( Ochcenka_attestata, ID_Abiturient ) VALUES ( '$Ochcenka_attestata', '$ID_Abiturient')");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh' CONTENT='0; url=index.php'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh' CONTENT='0; url=index.php'>";
		}
