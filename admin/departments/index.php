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
				<th scope="col">Название отделения</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include('../database/dbconfig.php');
			mysqli_query($db, "set names utf8");
			$r = mysqli_query($db, "SELECT * FROM `Departments`");
			$myrow = mysqli_fetch_array($r);
			do {
				echo "<tr>
				<form action = 'redit.php' method = 'GET'>
					<td><input size='15' class='form-control', name = 'ID_Departments' type='text' value='$myrow[ID_Departments]' readonly='readonly'></td>
					<td><input size='15' class='form-control', name = 'Name_Departments' type='text' value='$myrow[Name_Departments]'></td>
					<td><input type='submit' class='btn btn-warning' value='Изменить'></td>
				</form>
				<td><a class='btn btn-danger' href='delit.php?ID_Departments=$myrow[ID_Departments]'>Удалить</a></td>
				</tr>";
			} while ($myrow = mysqli_fetch_array($r));

			echo "<tr>
				<form action = 'insert.php' method = 'POST'>
					<td readonly='readonly'>$myrow[ID_Departments]</td>
					<td><input size='15' class='form-control', name = 'Name_Departments' type='text' value='' ></td>
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