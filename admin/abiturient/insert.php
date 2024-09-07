<?php
	$fio_a = $_POST['fio_a'];
	$adres_a = $_POST['adres_a'];
	$nomer_a = $_POST['nomer_a'];
	$email_a = $_POST['email_a'];
	$dop_a = $_POST['dop_a'];
	$fio_m = $_POST['fio_m'];
	$adres_m = $_POST['adres_m'];
	$mesto_m = $_POST['mesto_m'];
	$dolzh_m = $_POST['dolzh_m'];
	$nomer_m = $_POST['nomer_m'];
	$email_m = $_POST['email_m'];
	$fio_o = $_POST['fio_o'];
	$adres_o = $_POST['adres_o'];
	$mesto_o = $_POST['mesto_o'];
	$dolzh_o = $_POST['dolzh_o'];
	$nomer_o = $_POST['nomer_o'];
	$email_o = $_POST['email_o'];
	$id_d = $_POST['id_d'];
	$ID_Departments = $_POST['ID_Departments'];

	
	include('../database/dbconfig.php');
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "INSERT INTO `Abiturient`( fio_a, adres_a, nomer_a, email_a, dop_a, fio_m, adres_m, mesto_m, dolzh_m, nomer_m, email_m, fio_o, adres_o, mesto_o, dolzh_o, nomer_o, email_o, id_d, ID_Departments ) VALUES ( '$fio_a', '$adres_a', '$nomer_a', '$email_a', '$dop_a', '$fio_m', '$adres_m', '$mesto_m', '$dolzh_m', '$nomer_m', '$email_m', '$fio_o', '$adres_o', '$mesto_o', '$dolzh_o', '$nomer_o', '$email_o', '$id_d', '$ID_Departments')");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh' CONTENT='0; url=index.php'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh' CONTENT='0; url=index.php'>";
		}
