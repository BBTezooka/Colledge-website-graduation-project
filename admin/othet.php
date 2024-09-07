<!DOCTYPE html>
<html lang="ru">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="abiturient/style.css ?<?echo time();?>">
<head>
	<title>Отчёт анкета</title>
</head>

<body>
<div class="wrapper">
		<?php
				include('database/dbconfig.php');
				mysqli_query($db, "set names utf8");

				$abiturient = mysqli_query($db, "SELECT * FROM `Abiturient`");

				$dogovor = mysqli_query($db, "SELECT * FROM `Dogovor`");

				$specialnost = mysqli_query($db, "SELECT * FROM `Specialnost`");

				while ($myrow = mysqli_fetch_array($abiturient)) {


					$dogovor_id = $myrow['id_d'];
					$dogovor_result = mysqli_query($db, "SELECT type_d FROM `Dogovor` WHERE id_d='$dogovor_id'");
					$dogovor_row = mysqli_fetch_array($dogovor_result);
					$dogovor_name = $dogovor_row['type_d'];

					$specialnost_id = $myrow['ID_Specialnost'];
					$specialnost_result = mysqli_query($db, "SELECT Name_Specialnost FROM `Specialnost` WHERE ID_Specialnost='$specialnost_id'");
					$specialnost_row = mysqli_fetch_array($specialnost_result);
					$specialnost_name = $specialnost_row['Name_Specialnost'];
					echo "<div class = 'item-holder'>
					<form action = 'othet/anketa.php' method = 'POST'>
						<div class = 'item'><p># <input size='10' class='form-control id-inp' name='ID_Abiturient' type='text' value='$myrow[ID_Abiturient]' readonly='readonly'></p></div>
						<div class = 'item'><p>ФИО абитуриента</p><input size='10' class='form-control', name='fio_a' type='text' value='$myrow[fio_a]'></div>
						<div class = 'item'><p>Адрес абитуриента</p><input size='10' class='form-control', name='adres_a' type='text' value='$myrow[adres_a]'></div>
						<div class = 'item'><p>Номер телефона абитуриента</p><input size='10' class='form-control', name='nomer_a' type='text' value='$myrow[nomer_a]'></div>
						<div class = 'item'><p>Email абитуриента</p><input size='10' class='form-control', name='email_a' type='text' value='$myrow[email_a]'></div>
						<div class = 'item'><p>Доп. инфо</p><input size='10' class='form-control', name='dop_a' type='text' value='$myrow[dop_a]'></div>
						<div class = 'item'><p>Ср. балл</p><input size='10' class='form-control', name='sr_bal' type='text' value='$myrow[sr_bal]'></div>
						<div class = 'item'><p>ФИО матери</p><input size='10' class='form-control', name='fio_m' type='text' value='$myrow[fio_m]'></div>
						<div class = 'item'><p>Адрес матери</p><input size='10' class='form-control', name='adres_m' type='text' value='$myrow[adres_m]'></div>
						<div class = 'item'><p>Место работы</p><input size='10' class='form-control', name='mesto_m' type='text' value='$myrow[mesto_m]'></div>
						<div class = 'item'><p>должность</p><input size='10' class='form-control', name='dolzh_m' type='text' value='$myrow[dolzh_m]'></div>
						<div class = 'item'><p>Номер телефона матери</p><input size='10' class='form-control', name='nomer_m' type='text' value='$myrow[nomer_m]'></div>
						<div class = 'item'><p>Email матери</p><input size='10' class='form-control', name='email_m' type='text' value='$myrow[email_m]'></div>
						<div class = 'item'><p>ФИО отца</p><input size='10' class='form-control', name='fio_o' type='text' value='$myrow[fio_o]'></div>
						<div class = 'item'><p>Адрес отца</p><input size='10' class='form-control', name='adres_o' type='text' value='$myrow[adres_o]'></div>
						<div class = 'item'><p>Место работы отца</p><input size='10' class='form-control', name='mesto_o' type='text' value='$myrow[mesto_o]'></div>
						<div class = 'item'><p>Должность отца</p><input size='10' class='form-control', name='dolzh_o' type='text' value='$myrow[dolzh_o]'></div>
						<div class = 'item'><p>Номер телефона отца</p><input size='10' class='form-control', name='nomer_o' type='text' value='$myrow[nomer_o]'></div>
						<div class = 'item'><p>Email отца</p><input size='10' class='form-control', name='email_o' type='text' value='$myrow[email_o]'></div>
						<div class = 'item'>
							<p>Финансирование</p>
							<select class='form-select'tabindex='10' name='id_d'>
								<option value='$dogovor_id'>$dogovor_name</option>";

					while ($dogovor_row = mysqli_fetch_array($dogovor)) {
						$option_id = $dogovor_row['id_d'];
						$option_name = $dogovor_row['type_d'];
						echo "<option value='$option_id'>$option_name</option>";
					}

					mysqli_data_seek($dogovor, 0); // 

					echo "</select></div>
					<div class = 'item'>
							<p>Специальность</p>
							<select class='form-select'tabindex='10' name='ID_Specialnost'>
								<option value='$specialnost_id'>$specialnost_name</option>";

							while ($specialnost_row = mysqli_fetch_array($specialnost)) {
								$option_id = $specialnost_row['ID_Specialnost'];
								$option_name = $specialnost_row['Name_Specialnost'];
								echo "<option value='$option_id'>$option_name</option>";
							}

					mysqli_data_seek($specialnost, 0); 

					echo "</select></div>

						
					<button type='submit' name='otchet1_btn' class='btn btn-warning' value='$myrow[ID_Abiturient]'>Сформировать</button>
					</form>
				</div>";
				}
	echo "</div>";
	?>
	<table class='table'>
		<thead>
			<tr>
				<th scope='col'>#</th>
				<th scope='col'>ФИО абитуриента</th>
				<th scope='col'>Адрес абитуриента</th>
				<th scope='col'>Номер абитуриента</th>
				<th scope='col'>Email абитуриента</th>
				<th scope='col'>Доп. хобби абитуриента</th>
				<th scope='col'>ФИО матери</th>
				<th scope='col'>Адрес матери</th>
				<th scope='col'>Место работы матери</th>
				<th scope='col'>Должность матери</th>
				<th scope='col'>Номер матери</th>
				<th scope='col'>Email матери</th>
				<th scope='col'>ФИО отца</th>
				<th scope='col'>Адрес отца</th>
				<th scope='col'>Место работы отца</th>
				<th scope='col'>Должность отца</th>
				<th scope='col'>Номер отца</th>
				<th scope='col'>Email отца</th>
			</tr>
		</thead>
		<?php
		include('database/dbconfig.php');
		mysqli_query($db, "set names utf8");
		$res = mysqli_query($db, "SELECT * FROM `Abiturient`");
		$myrow = mysqli_fetch_array($res);
		do {
			echo "<tr>
				<form action = 'othet/anketa.php' method = 'POST'>
					<td><input size='3' class='form-control', name='ID_Abiturient' type='text' value='$myrow[ID_Abiturient]'></input></td>
					<td><input size='2' class='form-control', name='fio_a' type='text' value='$myrow[fio_a]'></td>
					<td><input size='1' class='form-control', name='adres_a' type='text' value='$myrow[adres_a]'></td>
					<td><input size='1' class='form-control', name='nomer_a' type='text' value='$myrow[nomer_a]'></td>
					<td><input size='1' class='form-control', name='email_a' type='text' value='$myrow[email_a]'></td>
					<td><input size='1'  class='form-control', name='dop_a' type='text' value='$myrow[dop_a]'></td>
					<td><input size='2' class='form-control', name='fio_m' type='text' value='$myrow[fio_m]'></td>
					<td><input size='1' class='form-control', name='adres_m' type='text' value='$myrow[adres_m]'></td>
					<td><input size='1' class='form-control', name='mesto_m' type='text' value='$myrow[mesto_m]'></td>
					<td><input size='1' class='form-control', name='dolzh_m' type='text' value='$myrow[dolzh_m]'></td>
					<td><input size='1' class='form-control', name='nomer_m' type='text' value='$myrow[nomer_m]'></td>
					<td><input size='1' class='form-control', name='email_m' type='text' value='$myrow[email_m]'></td>
					<td><input size='2' class='form-control', name='fio_o' type='text' value='$myrow[fio_o]'></td>
					<td><input size='1' class='form-control', name='adres_o' type='text' value='$myrow[adres_o]'></td>
					<td><input size='1' class='form-control', name='mesto_o' type='text' value='$myrow[mesto_o]'></td>
					<td><input size='1' class='form-control', name='dolzh_o' type='text' value='$myrow[dolzh_o]'></td>
					<td><input size='1' class='form-control', name='nomer_o' type='text' value='$myrow[nomer_o]'></td>
					<td><input size='1' class='form-control', name='email_o' type='text' value='$myrow[email_o]'></td>
					<td>
						<button type='submit' name='otchet1_btn' class='btn btn-warning' value='$myrow[ID_Abiturient]'>Сформировать</button>
					</td>
				</form>
                </tr>";
		} while ($myrow = mysqli_fetch_array($res));
		echo "</table>";

		?>

		<script src="js/jquery-3.6.0.min.js"></script>
</body>

</html>