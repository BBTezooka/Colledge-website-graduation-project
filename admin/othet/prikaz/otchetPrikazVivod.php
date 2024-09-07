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
	@media print {
		@page {
			margin: 0;
			margin-top: 10mm;
		}

		input {
			border: none;
			outline: none;
		}

		.print {
			display: none;
		}
	}

	.print {
		margin-bottom: 30px;
	}

	.btn-back {
		font-size: 16px;
		padding: 7px 16px;
		background-color: #6c757d;
		border-color: #6c757d;
		color: #fff;
		cursor: pointer;
		border-radius: 0.25rem;
		margin-right: 10px;
	}

	.btn-print {
		font-size: 16px;
		padding: 7px 16px;
		background-color: #0d6efd;
		border-color: #0d6efd;
		color: #fff;
		cursor: pointer;
		border-radius: 0.25rem;
	}

	h1 {
		font-weight: 800;
	}
</style>

<body>

	<?php
	if (isset($_POST['prikaz_btn'])) {

		$ID_Departments = $_POST['ID_Specialnost'];
		$id_d = $_POST['id_d'];
		$date = $_POST['date'];
		
		if ($id_d == 2) {
			$query = "SELECT ab.fio_a, ab.id_d, ab.sr_bal, dog.type_d, ab.ID_Specialnost, Name_Specialnost, ab.data_podach FROM Abiturient ab JOIN  Dogovor dog ON ab.id_d = dog.id_d JOIN Specialnost spec ON ab.ID_Specialnost = spec.ID_Specialnost WHERE YEAR(ab.data_podach) = $date AND dog.id_d = $id_d AND ab.ID_Specialnost = $ID_Departments ORDER BY ab.sr_bal DESC LIMIT 20";
		} else {
			$query = "SELECT ab.fio_a, ab.id_d, ab.sr_bal, dog.type_d, ab.ID_Specialnost, Name_Specialnost, ab.data_podach FROM Abiturient ab JOIN  Dogovor dog ON ab.id_d = dog.id_d JOIN Specialnost spec ON ab.ID_Specialnost = spec.ID_Specialnost WHERE YEAR(ab.data_podach) = $date AND dog.id_d = $id_d AND ab.ID_Specialnost= $ID_Departments ORDER BY ab.sr_bal DESC LIMIT 10";
		}
		$query_run = mysqli_query($db, $query);

		if (mysqli_num_rows($query_run) > 0) {
			$row = mysqli_fetch_assoc($query_run);
	?>
			<div class="container">
				<div class="text-center py-4 text-dark">
					<h5>ФГБОУ ВО</h5>
					<h5>«КАЛИНИНГРАДСКИЙ ГОСУДАРСТВЕННЫЙ ТЕХНИЧЕСКИЙ УНИВЕРСИТЕТ»</h5>
					<h5 class="fw-bold">Калининградский морской рыбопромышленный колледж</h5>
					<h5 class="fw-bold">ПОФАМИЛЬНЫЙ ПЕРЕЧЕНЬ</h5>
					<h5>лиц, рекомендованных к зачислению и предоставивших оригиналы соответствуюших документов</h5>
				</div>
				<div class="text-left py-4 text-dark">
					<h5 class="fw-bold">Форма обучения: <span class="fw-normal text-decoration-underline">Очная форма обучения</span></h5>
					<h5 class="fw-bold">Специальность: <span class="fw-normal text-decoration-underline"><?php echo $row['Name_Departments'] ?></span></h5>
					<h5 class="fw-bold">Тип договора: <span class="fw-normal text-decoration-underline"><?php echo $row['type_d'] ?></span></h5>
				</div>
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-dark">
						<thead>
							<tr>
								<th scope="col" class="text-center align-middle">№</th>
								<th scope="col" class="text-center align-middle">Фамилия Имя Отчество</th>
								<th scope="col" class="text-center align-middle">Результаты освоения образовательной программы основного общего или среднего общего образования</th>
								<th scope="col" class="text-center align-middle">Оригинал соответствующего документа</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1; // initialize the counter variable
							do {
							?>
								<tr>
									<td class="text-dark"><?php echo $i ?></td>
									<td class="text-dark"><?php echo $row['fio_a'] ?></td>
									<td class="text-dark"><?php echo $row['Ochcenka_attestata'] ?></td>
									<td class="text-dark">ДА</td>
								</tr>
							<?php
								$i++; // increment the counter variable
							}while ($row = mysqli_fetch_assoc($query_run));
							?>
						</tbody>
					</table>
				</div>
				<div class="signs">
					<p class="text-dark fw-bold text-end">Начальник колледжа &nbsp;&nbsp;_______________</p>
					<p class="text-dark fw-bold text-end">Зам. ответственного секретаря приёмной комиссии по колледжу &nbsp;&nbsp;_______________</p>
				</div>
			</div>
			<div class="print">
				<input type="button" class="btn-back" value="Назад" onclick="history.back();">
				<input type="button" class="btn-print" value="Печать" onclick="window.print();">
			</div>
	<?php
		} else {
			echo "Записи не найдены";
		}
	}
	?>

	<script src="js/bsjs/bootstrap.js"></script>
	<script src="js/scriptreg.js"></script>
</body>

</html>