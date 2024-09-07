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
				<th scope="col">Название специальности</th>
				<th scope="col">#Отделения</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include('../database/dbconfig.php');
			mysqli_query($db, "set names utf8");

			// Запрос для таблицы Specialnost
			$specialnost = mysqli_query($db, "SELECT * FROM `Specialnost`");

			// Запрос для таблицы Departments
			$departments = mysqli_query($db, "SELECT * FROM `Departments`");

			// Перебор каждой строки в таблице Specialnost
			while ($myrow = mysqli_fetch_array($specialnost)) {

				// Получить название отдела и ID для текущей строки Specialnost
				$department_id = $myrow['ID_Departments'];
				$department_result = mysqli_query($db, "SELECT Name_Departments FROM `Departments` WHERE ID_Departments='$department_id'");
				$department_row = mysqli_fetch_array($department_result);
				$department_name = $department_row['Name_Departments'];

				// Вывод строки с входными данными и элементом select
				echo "<tr>
				<form action='redit.php' method='GET'>
					<td><input size='15' class='form-control' name='ID_Specialnost' type='text' value='$myrow[ID_Specialnost]' readonly='readonly'></td>
					<td><input size='15' class='form-control' name='Name_Specialnost' type='text' value='$myrow[Name_Specialnost]'></td>
					<td>
						<select class='form-select'tabindex='10' name='ID_Departments'>
							<option value='$department_id'>$department_name</option>";

				// Перебираем каждую строку отдела для вывода в качестве опций в элементе select
				while ($departments_row = mysqli_fetch_array($departments)) {
					$option_id = $departments_row['ID_Departments'];
					$option_name = $departments_row['Name_Departments'];
					echo "<option value='$option_id'>$option_name</option>";
				}

				mysqli_data_seek($departments, 0); // Сбросить указатель запроса отделов на начало

				echo "</select>
					</td>
					<td><input type='submit' class='btn btn-warning' value='Изменить'></td>
				</form>
				<td><a class='btn btn-danger' href='delit.php?ID_Specialnost=$myrow[ID_Specialnost]'>Удалить</a></td>
			</tr>";
			}

			// Вывод строки для добавления новой записи
			echo "<tr>
			<form action='insert.php' method='POST'>
				<td readonly='readonly'>$myrow[ID_Specialnost]</td>
				<td><input size='15' class='form-control' name='Name_Specialnost' type='text' value='' ></td>
				<td>
					<select class='form-select' tabindex='10' name='ID_Departments'>
						<option value=''></option>";

			// Перебираем каждую строку отдела для вывода в качестве опций в элементе select
			while ($departments_row = mysqli_fetch_array($departments)) {
				$option_id = $departments_row['ID_Departments'];
				$option_name = $departments_row['Name_Departments'];
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