<?php

	session_start();
	$db=mysqli_connect("localhost", "root", "", "Kursach");
	mysqli_query($db, "set names utf8");

	if(isset($_POST['submit_button']))
	{
		$fio_a = $_POST['fio_a'];
		$adres_a = $_POST['adres_a'];
		$nomer_a = $_POST['nomer_a'];
		$email_a = $_POST['email_a'];
		$dop_a = $_POST['dop_a'];
		$sr_bal = $_POST['sr_bal'];
		if($sr_bal >= 4.5){
			$id_d = 1;
		}else{
			$id_d = 2;
		}
		$ID_Specialnost = $_POST['ID_Specialnost'];
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
		$r = "INSERT INTO Abiturient (fio_a, adres_a, nomer_a, email_a, dop_a, sr_bal, fio_m, adres_m, mesto_m, dolzh_m, nomer_m, email_m, fio_o, adres_o, mesto_o, dolzh_o, nomer_o, email_o, id_d, ID_Specialnost) VALUES ('$fio_a', '$adres_a', '$nomer_a', '$email_a', '$dop_a', '$sr_bal', '$fio_m', '$adres_m', '$mesto_m', '$dolzh_m', '$nomer_m', '$email_m', '$fio_o', '$adres_o', '$mesto_o', '$dolzh_o', '$nomer_o', '$email_o', '$id_d', '$ID_Specialnost')";
		$query_run=mysqli_query($db,$r);
		if($query_run)
		{
			echo "<script>alert('Успешно добавлено')</script>";
			header("Location: admission.php");
		}
		else{
			echo "<script>alert('Не удалось добавить :(')</script>";
			echo "Error: " . mysqli_error($db);
			header("Location: admission.php");
		}
		}
?>