<!DOCTYPE html>
<html lang="ru">

<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Оценка аттестата</th>
				<th scope="col">#Абитуриента</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include('../database/dbconfig.php');
			mysqli_query($db, "set names utf8");

			$ocenka = mysqli_query($db, "SELECT * FROM `Ochcenka`");

			$abiturient = mysqli_query($db, "SELECT * FROM `Abiturient`");

			while ($myrow = mysqli_fetch_array($ocenka)) {

				$abiturient_id = $myrow['ID_Abiturient'];
				$abiturient_result = mysqli_query($db, "SELECT fio_a FROM `Abiturient` WHERE ID_Abiturient='$abiturient_id'");
				$abiturient_row = mysqli_fetch_array($abiturient_result);
				$abiturient_name = $abiturient_row['fio_a'];

				echo "<tr>
				<form action='redit.php' method='GET'>
					<td><input size='15' class='form-control' name='ID_Ochcenka' type='text' value='$myrow[ID_Ochcenka]' readonly='readonly'></td>
					<td><input size='15' class='form-control' name='Ochcenka_attestata' type='text' value='$myrow[Ochcenka_attestata]'></td>
					<td>
						<select class='form-select'tabindex='10' name='ID_Abiturient'>
							<option value='$abiturient_id'>$abiturient_name</option>";

				while ($abiturient_row = mysqli_fetch_array($abiturient)) {
					$option_id = $abiturient_row['ID_Abiturient'];
					$option_name = $abiturient_row['fio_a'];
					echo "<option value='$option_id'>$option_name</option>";
				}

				mysqli_data_seek($abiturient, 0); 

				echo "</select>
					</td>
					<td><input type='submit' class='btn btn-warning' value='Изменить'></td>
				</form>
				<td><a class='btn btn-danger' href='delit.php?ID_Ochcenka=$myrow[ID_Ochcenka]'>Удалить</a></td>
			</tr>";
			}

			// Вывод строки для добавления новой записи
			echo "<tr>
			<form action='insert.php' method='POST'>
				<td readonly='readonly'>$myrow[ID_Ochcenka]</td>
				<td><input size='15' class='form-control' name='Ochcenka_attestata' type='text' value='' ></td>
				<td>
					<select class='form-select' tabindex='10' name='ID_Abiturient'>
						<option value=''></option>";

			// Перебираем каждую строку отдела для вывода в качестве опций в элементе select
			while ($abiturient_row = mysqli_fetch_array($abiturient)) {
				$option_id = $abiturient_row['ID_Abiturient'];
				$option_name = $abiturient_row['fio_a'];
				echo "<option value='$option_id'>$option_name</option>";
			}

			echo "</select>
				</td>
		<td><input type='submit' class='btn btn-warning' value='Добавить'></td>
	</form>
	<td>
	</td>
	</tr>";
			?>
		</tbody>

	</table>


	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>