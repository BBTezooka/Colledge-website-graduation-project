<?php
	$ID_Abiturient = $_GET['ID_Abiturient'];
	$fio_a = $_GET['fio_a'];
	$adres_a = $_GET['adres_a'];
	$nomer_a = $_GET['nomer_a'];
	$email_a = $_GET['email_a'];
	$dop_a = $_GET['dop_a'];
	$fio_m = $_GET['fio_m'];
	$sr_bal = $_GET['sr_bal'];
	$adres_m = $_GET['adres_m'];
	$mesto_m = $_GET['mesto_m'];
	$dolzh_m = $_GET['dolzh_m'];
	$nomer_m = $_GET['nomer_m'];
	$email_m = $_GET['email_m'];
	$fio_o = $_GET['fio_o'];
	$adres_o = $_GET['adres_o'];
	$mesto_o = $_GET['mesto_o'];
	$dolzh_o = $_GET['dolzh_o'];
	$nomer_o = $_GET['nomer_o'];
	$email_o = $_GET['email_o'];
	$id_d = $_GET['id_d'];
	$ID_Specialnost = $_GET['ID_Specialnost'];
	
		include('../database/dbconfig.php');
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "UPDATE `Abiturient` SET fio_a='$fio_a', adres_a='$adres_a', nomer_a='$nomer_a', sr_bal = '$sr_bal', email_a='$email_a', dop_a='$dop_a', fio_m='$fio_m', adres_m='$adres_m', mesto_m='$mesto_m', dolzh_m='$dolzh_m', nomer_m='$nomer_m', email_m='$email_m', fio_o='$fio_o', adres_o='$adres_o', mesto_o='$mesto_o', dolzh_o='$dolzh_o', nomer_o='$nomer_o', email_o='$email_o', id_d='$id_d', ID_Specialnost='$ID_Specialnost' WHERE ID_Abiturient='$ID_Abiturient'");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh' CONTENT='0; url=index.php'>";			
		} else {
			echo "Error: " . mysqli_error($db);
		}
