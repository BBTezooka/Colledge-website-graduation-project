<?
include('../database/dbconfig.php');
mysqli_query($db, "set names utf8");
?>

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Анкета</title>
	<meta name="generator" content="LibreOffice 7.4.2.3 (Linux)" />
	<meta name="author" content="LITASOVA" />
	<meta name="created" content="2023-03-05T22:35:00" />
	<meta name="changedby" content="☣[₥Łρ]Šĭ₥ĭĦĐ☣John_Prise☭ ☣[₥Łρ]Šĭ₥ĭĦĐ☣John_Prise☭" />
	<meta name="changed" content="2023-03-07T18:27:00" />
	<meta name="AppVersion" content="16.0000" />
	<meta name="Company" content="Organization" />
	<style type="text/css">
		@page {
			size: 1600px;
			margin-top: 1in;
			margin-bottom: 1in
		}

		p {
			color: #000000;
			line-height: 115%;
			text-align: left;
			orphans: 2;
			widows: 2;
			margin-bottom: 0.1in;
			direction: ltr;
			background: transparent
		}

		p.western {
			font-family: "Calibri", serif;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		p.name {
			margin-left: 3%;
		}

		p.table_name {}

		p.inside_table {
			display: flex;
			justify-content: flex-start;
			align-items: center;
			font-size: 16pt
		}

		body {
			max-width: 1600px;
		}

		p.podpis {
			display: flex;
			justify-content: flex-end;
			align-items: center;
			margin-right: 200px;
		}

		p.cjk {
			font-family: "Calibri"
		}

		p.ctl {
			font-family: "Calibri"
		}

		@media print {
			input {
				border: none;
				outline: none;
			}

			.print {
				display: none;
			}
		}

		.print {
			float: right;
			margin-bottom: 100px;
		}

		.btn-back {
			font-size: 16px;
			padding: 7px 16px;
			background-color: #567492;
			border-color: #2f455c;
			color: #fff;
			cursor: pointer;
			border-radius: 0.25rem;
			margin-right: 10px;
		}

		.btn-print {
			font-size: 16px;
			padding: 7px 16px;
			background-color: #567492;
			border-color: #2f455c;
			color: #fff;
			cursor: pointer;
			border-radius: 0.25rem;
		}
	</style>
</head>

<body lang="en-US" text="#000000" link="#000080" vlink="#800000" dir="ltr">
	<p class="western" align="center" style="line-height: 108%;  margin-right: 0in; text-indent: -0.01in; margin-bottom: 0.08in">
		<font face="Times New Roman, serif" style="font-size: 16pt"><span lang="ru-RU">Федеральное
				агентство по рыболовству </span></font>
	</p>
	<p class="western" align="center" style="line-height: 108%;  text-indent: -0.01in; margin-bottom: 0.02in">
		<font face="Times New Roman, serif" style="font-size: 16pt"><span lang="ru-RU">БГАРФ
				ФГБОУ ВО «КГТУ» </span></font>
	</p>
	<p class="western" style="line-height: 108%;  margin-bottom: 0.08in">
		<font face="Times New Roman, serif" style="font-size: 16pt"><span lang="ru-RU"><b>Калининградский
					морской рыбопромышленный колледж</b></span></font>
		<font face="Times New Roman, serif"><span lang="ru-RU">
			</span></font>
	</p>
	<p class="western" align="center" style="line-height: 108%; margin-left: 0.25in; margin-right: 0.07in; text-indent: -0.01in; margin-bottom: 0.11in">
		<font face="Times New Roman, serif" style="font-size: 16pt"><span lang="ru-RU"><b>А Н К Е
					Т А </b></span></font>
	</p>
	<p class="western" align="center" style="line-height: 108%; margin-left: 0.25in; text-indent: -0.01in; margin-bottom: 0.07in">
		<font face="Times New Roman, serif" style="font-size: 16pt"><span lang="ru-RU"><b>Сведения
					об абитуриенте и родителях (законных представителях):
				</b></span></font>
	</p>
	<?php
	if (isset($_POST['otchet1_btn'])) {
		$ID_Abiturient = $_POST['ID_Abiturient'];
		$query = "SELECT * FROM `Abiturient` where ID_Abiturient = '$ID_Abiturient'";
		$query_run = mysqli_query($db, $query);

		if (mysqli_num_rows($query_run) > 0) {
	?>
			<?php
			while ($row = mysqli_fetch_assoc($query_run)) {
			?>
				<p class="name" style="line-height: 108%; ; text-indent: -0.01in; margin-bottom: 0in">
					<font face="Times New Roman, serif">
						<font size="2" style="font-size: 14pt"><span lang="ru-RU"><b>Студент</b></span></font>
					</font>
					<font face="Times New Roman, serif">
						<font size="2" style="font-size: 10pt"><b>:
							</b></font>
					</font>
				</p>
				<table width="1600" cellpadding="1" cellspacing="0">
					<col width="148" />

					<col width="564" />

					<tr valign="top">
						<td width="148" height="13" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><b>ФИО
										</b></font>
								</font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['fio_a'] ?>
							</p>
						</td>
					</tr>
					<tr valign="top">
						<td width="148" height="14" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><b>Адрес
											проживания </b></font>
								</font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['adres_a'] ?>
							</p>
						</td>
					</tr>
					<tr valign="top">
						<td width="148" height="14" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><span lang="en-US"><b>Контактный телефон</b></span></font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['nomer_a'] ?>
							</p>
						</td>
					</tr>
					<tr valign="top">
						<td width="148" height="13" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><b>e-mail
										</b></font>
								</font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['email_a'] ?>
							</p>
						</td>
					</tr>
				</table>
				<p class="name" style="line-height: 108%; ; text-indent: -0.01in; margin-bottom: 0in">
					<font face="Times New Roman, serif">
						<font size="2" style="font-size: 14pt"><b>Мать:
							</b></font>
					</font>
				</p>
				<table width="1600" cellpadding="1" cellspacing="0">
					<col width="148" />

					<col width="564" />

					<tr valign="top">
						<td width="148" height="13" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><b>ФИО
										</b></font>
								</font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['fio_m'] ?>
							</p>
						</td>
					</tr>
					<tr valign="top">
						<td width="148" height="14" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><b>Адрес
											проживания </b></font>
								</font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['adres_m'] ?>
							</p>
						</td>
					</tr>
					<tr valign="top">
						<td width="148" height="14" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><b>Место
											работы </b></font>
								</font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['mesto_m'] ?>
							</p>
						</td>
					</tr>
					<tr valign="top">
						<td width="148" height="14" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><b>Должность
										</b></font>
								</font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['dolzh_m'] ?>
							</p>
						</td>
					</tr>
					<tr valign="top">
						<td width="148" height="14" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><span lang="en-US"><b>Контактный телефон</b></span></font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['nomer_m'] ?>
							</p>
						</td>
					</tr>
					<tr valign="top">
						<td width="148" height="13" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><b>e-mail
										</b></font>
								</font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['email_m'] ?>
							</p>
						</td>
					</tr>
				</table>
				<p class="name" style="line-height: 108%; ; text-indent: -0.01in; margin-bottom: 0in">
					<font face="Times New Roman, serif">
						<font size="2" style="font-size: 14pt"><b>Отец:
							</b></font>
					</font>
				</p>
				<table width="1600" cellpadding="1" cellspacing="0">
					<col width="148" />

					<col width="564" />

					<tr valign="top">
						<td width="148" height="13" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><b>ФИО
										</b></font>
								</font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['fio_o'] ?>
							</p>
						</td>
					</tr>
					<tr valign="top">
						<td width="148" height="14" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><b>Адрес
											проживания </b></font>
								</font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['adres_o'] ?>
							</p>
						</td>
					</tr>
					<tr valign="top">
						<td width="148" height="14" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><b>Место
											работы </b></font>
								</font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['mesto_o'] ?>
							</p>
						</td>
					</tr>
					<tr valign="top">
						<td width="148" height="14" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><b>Должность
										</b></font>
								</font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['dolzh_o'] ?>
							</p>
						</td>
					</tr>
					<tr valign="top">
						<td width="148" height="14" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><span lang="en-US"><b>Контактный телефон</b></span></font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['nomer_o'] ?>
							</p>
						</td>
					</tr>
					<tr valign="top">
						<td width="148" height="13" bgcolor="#d9d9d9" style="background: #d9d9d9; border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2">
								<font face="Times New Roman, serif">
									<font size="2" style="font-size: 14pt"><b>e-mail
										</b></font>
								</font>
							</p>
						</td>
						<td width="564" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="inside_table" align="left" style="orphans: 2; widows: 2; ">
							<?php echo $row['email_o'] ?>
							</p>
						</td>
					</tr>
				</table>
				<p class="western" style="line-height: 108%; margin-bottom: 0.08in">
				</p>
				<p class="table_name" style="line-height: 108%; margin-left: 0.08in; margin-bottom: 0in">
					<font face="Times New Roman, serif">
						<font size="2" style="font-size: 16pt"><span lang="ru-RU"><b>О
									себе сообщаю дополнительно </b></span></font>
					</font>
					<font face="Times New Roman, serif">
						<font style="font-size: 16pt"><span lang="ru-RU"><i>(увлечения,
									хобби, иностранные языки, спорт и др.)</i></span></font>
					</font>
					<font face="Times New Roman, serif">
						<font size="2" style="font-size: 10pt"><span lang="ru-RU"><b>:
								</b></span></font>
					</font>
				</p>
				<table width="1600" cellpadding="1" cellspacing="0">
					<col width="714" />

					<tr>
						<td width="714" height="12" valign="top" style="border: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0.08in">
							<p class="table_name" align="left" style="orphans: 2; widows: 2; ">
								<font size="2" style="font-size: 14pt"><?php echo $row['dop_a'] ?></font>
							</p>
						</td>
					</tr>
				</table>
		<?php
			}
		}
		?>
	<?php
	} else {
		echo "Записи не найдены";
	}
	?>
	<p class="western" style="line-height: 108%; margin-left: 0.08in; margin-bottom: 0in">
		<br />

	</p>
	<p class="podpis" style="line-height: 108%; margin-bottom: 0in">
		<font face="Times New Roman, serif">
			<font size="1" style="font-size: 8pt"> </font>
		</font>
		<font face="Times New Roman, serif">
			<font size="1" style="font-size: 12pt"><b>подпись
					поступающего </b></font>
		</font>
	</p>
	<p class="western" align="right" style="line-height: 108%; margin-bottom: 0in">

	</p>
	<p class="western" align="center" style="line-height: 108%; margin-left: 0.08in; margin-bottom: 0in">
		<br />

	</p>
	<div class="print">
		<input type="button" class="btn-back" value="Назад" onclick="history.back();">
		<input type="button" class="btn-print" value="Печать" onclick="window.print();">
	</div>
</body>

</html>