<?
include('../../database/dbconfig.php');
mysqli_query($db, "set names utf8");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Абитуриент</title>

	<link rel="stylesheet" href="css/bscss/bootstrap.css">
	<link rel="stylesheet" href="css/stylenotes.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
  .text-main {
    color: #6610f2;
  }
</style> 

<body>
	<div class="container-fluid">

		<div class="card shadow mb-5 mt-5">
			<div class="card-header py-3">
				<h3 class="m-0 fw-bold text-main">Отчет количество поступивших
				</h3>
			</div>
		</div>

		<form action="kolvoZayavVivod.php" method="POST">
		<div class="card-body">

				<div class="form-group">
					<label> Год приемной комисии </label>
					<input type="text" name="date" class="form-control" placeholder="Введите год" required>
				</div>
				<div class="modal-footer">
					<button type="submit" name="zayav_btn" class="btn btn-success mt-5">Сформировать отчет</button>
				</div>
		</div>
		</form>

	</div>
	</div>


	<script src="js/bsjs/bootstrap.js"></script>
	<script src="js/scriptreg.js"></script>
</body>

</html>