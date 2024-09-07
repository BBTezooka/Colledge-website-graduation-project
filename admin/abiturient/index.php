<!DOCTYPE html>
<html lang="ru">

<head>
	<title></title>
	<link rel="stylesheet" href="style.css ?<?echo time();?>">
</head>

<body>
	<div class="wrapper">
		<?php
				include('../database/dbconfig.php');
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
					<form action='redit.php' method='GET'>
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

						
						<input type='submit' class='btn btn-warning' value='Изменить'>
						<a class='btn btn-danger' href='delit.php?ID_Abiturient=$myrow[ID_Abiturient]'>Удалить</a>
					</form>
				</div>";
				}
	echo "</div>";
				echo "<div class = 'insert-form'>
				<h2>Добавить студента</h2> <br>
				<form action='insert.php' method='POST'>
					<p readonly='readonly'>$myrow[ID_Abiturient]</p>
					<input size='2' class='form-control', name='fio_a' type='text' value='$myrow[fio_a]' placeholder = 'ФИО'>
					<input size='2' class='form-control', name='adres_a' type='text' value='' placeholder = 'Адрес'>
					<input size='2' class='form-control', name='nomer_a' type='text' value='' placeholder = 'Номер телефона'>
					<input size='2' class='form-control', name='email_a' type='text' value='' placeholder = 'Email'>
					<input size='2' class='form-control', name='dop_a' type='text' value='' placeholder = 'Доп. инфо'>
					<input size='2' class='form-control', name='fio_m' type='text' value='' placeholder = 'ФИО матери'>
					<input size='2' class='form-control', name='adres_m' type='text' value='' placeholder = 'Адрес матери'>
					<input size='2' class='form-control', name='mesto_m' type='text' value='' placeholder = 'Место работы матери'>
					<input size='2' class='form-control', name='dolzh_m' type='text' value='' placeholder = 'Должность'>
					<input size='2' class='form-control', name='nomer_m' type='text' value='' placeholder = 'Номер телефона матери'>
					<input size='2' class='form-control', name='email_m' type='text' value='' placeholder = 'Email матери'>
					<input size='2' class='form-control', name='fio_o' type='text' value='' placeholder = 'ФИО отца'>
					<input size='2' class='form-control', name='adres_o' type='text' value='' placeholder = 'Адоес отца'>
					<input size='2' class='form-control', name='mesto_o' type='text' value='' placeholder = 'Место работы отца'>
					<input size='2' class='form-control', name='dolzh_o' type='text' value='' placeholder = 'Должность отца'>
					<input size='2' class='form-control', name='nomer_o' type='text' value='' placeholder = 'Номер телефона отца'>
					<input size='2' class='form-control', name='email_o' type='text' value='' placeholder = 'Email отца'>

					<td>
						<select class='form-select' tabindex='10' name='id_d'>
							<option value=''></option>";

				while ($dogovor_row = mysqli_fetch_array($dogovor)) {
					$option_id = $dogovor_row['id_d'];
					$option_name = $dogovor_row['type_d'];
					echo "<option value='$option_id'>$option_name</option>";
				}

				echo "</select>
					</td>
					
					<td>
						<select class='form-select' tabindex='10' name='ID_Departments'>
							<option value=''></option>";

				while ($specialnost_row = mysqli_fetch_array($specialnost)) {
					$option_id = $specialnost_row['ID_Specialnost'];
					$option_name = $specialnost_row['Name_Specialnost'];
					echo "<option value='$option_id'>$option_name</option>";
				}

				echo "</select>
					</td>
			<td><input type='submit' class='btn btn-warning' value='Добавить'></td>
			</form>
			<td>
			</td>
			</div>";
		?>


	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>