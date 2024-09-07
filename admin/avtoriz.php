


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="root.css" />
    <link rel="stylesheet" href="kabina.css" />

</head>
<body>

    <div class="container">
			<nav>
				<div class="nav-img"><a href="../index.html"><img src="../assets/images/navbar/domik.png"></a></div>
				<div class="navbar-links">
					<a href="../college.html">Колледж</a>
					<a href="../education.html">Обучение</a>
					<a href="../admission.php">Поступление</a>
					<a href="../contacts.html">Контакты</a>
                    <a href="../admin/index.php">Войти</a>
				</div>
			</nav>
        </div>
    <div class="container">
        <section>
            <header>
                <div class="header-title">
                    <? echo "<h3>Личный Кабинет пользователя</h3>";
                    echo "<h4>$abit</h4>";?>

                </div>
                <main>
                <div class="phpcode">
                <?
                    echo "<div id='auto-menu'>";
                    $my_array1 = array('#','ФИО','Адрес','Телефон','Эл.Почта','Увлечения/хобби','ФИО матери (зак. представителя)','Адрес Матери (З.П.)','Место работы','Должность','Телефон','Почта','ФИО Отца(зак.представитель)','Адрес Отца (З.П.)','Место работы','Должность','Телефон','Почта','Тип договора','Отделение');
                    $r = mysqli_query($db,"SELECT * FROM `abiturient`, `Dogovor`, `Departments` where Abiturient.id_d = Dogovor.id_d and Abiturient.ID_Departments =Departments.ID_Departments   and fio_a = '$abit'");
                    $myrow = mysqli_fetch_array($r);
                    echo"<h3>Ваши заявления</h3>";
                    echo"<table class = 'display nowrap'>";
                    echo"<thead><tr>";
                    foreach($my_array1 as $myarr){
                        echo"<th>$myarr</th>";
                    }
                    echo"</tr></thead></tbody>";
                    do{
                        $ID_Abiturient = $myrow['ID_Abiturient'];
                        $fio_a = $myrow['fio_a'];
                        $adres_a = $myrow['adres_a'];
                        $nomer_a = $myrow['nomer_a'];
                        $email_a = $myrow['email_a'];
                        $dop_a = $myrow['dop_a'];
                        $fio_m = $myrow['fio_m'];
                        $adres_m = $myrow['adres_m'];
                        $mesto_m = $myrow['mesto_m'];
                        $dolzh_m = $myrow['dolzh_m'];
                        $nomer_m = $myrow['nomer_m'];
                        $email_m = $myrow['email_m'];
                        $fio_o = $myrow['fio_o'];
                        $adres_o = $myrow['adres_o'];
                        $mesto_o = $myrow['mesto_o'];
                        $dolzh_o = $myrow['dolzh_o'];
                        $nomer_o = $myrow['nomer_o'];
                        $email_o = $myrow['email_o'];
                        $id_d = $myrow['type_d'];
                        $ID_Departments = $myrow['Name_Departments'];
                            echo "<tr>";
                            echo "<form action='updatecabinet.php' method='post'> ";
                            echo "<td><p name='id'>$ID_Abiturient</p></td>"; 
                            echo "<td><input type = 'text' name='abit' value ='$fio_a' style='width:19rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>"; 
                            echo "<td><input type = 'text' name='adres_a' value ='$adres_a' style='width:9rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>";
                            echo "<td><input type = 'text' name='nomer_a' value ='$nomer_a' style='width:9rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>"; 
                            echo "<td><input type = 'text' name='email_a' value ='$email_a' style='width:9rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>";
                            echo "<td><input type = 'text' name='dop_a' value ='$dop_a' style='width:7rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>"; 
                            echo "<td><input type = 'text' name='fio_m' value ='$fio_m' style='width:10rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>"; 
                            echo "<td><input type = 'text'name='adres_m' value ='$adres_m' style='width:9rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>";
                            echo "<td><input type = 'text'name='mesto_m' value ='$mesto_m' style='width:9rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>";
                            echo "<td><input type = 'text'name='dolzh_m' value ='$dolzh_m' style='width:9rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>";
                            echo "<td><input type = 'text'name='nomer_m' value ='$nomer_m' style='width:9rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>";
                            echo "<td><input type = 'text'name='email_m' value ='$email_m' style='width:9rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>";
                            echo "<td><input type = 'text'name='fio_o' value ='$fio_o' style='width:9rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>";
                            echo "<td><input type = 'text'name='adres_o' value ='$adres_o' style='width:9rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>";
                            echo "<td><input type = 'text'name='mesto_o' value ='$mesto_o' style='width:9rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>";
                            echo "<td><input type = 'text'name='dolzh_o' value ='$dolzh_o' style='width:9rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>";
                            echo "<td><input type = 'text'name='nomer_o' value ='$nomer_o' style='width:9rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>";
                            echo "<td><input type = 'text'name='email_o' value ='$email_o' style='width:9rem; height: 3rem; display:flex; justify-content:center; text-align:center'></input></td>";
                            echo "<td><p name='id_d[$ID_Abiturient]' style='width:7rem; display:flex; justify-content:center; text-align:center'>$id_d</p></td>"; 
                            echo "<td><p name='ID_Departments[$ID_Abiturient]'style='width:9rem; display:flex; justify-content:center; text-align:center'>$ID_Departments</p></td>"; 
                            echo "
                             <td>
                            
                            </form></td>";
                        } 
                        while ($myrow = mysqli_fetch_array($r));
                        echo"</div>"
                ?>
                
			
                </div>
                
            </main>
            </header>
           
            
        </section>        
    </div>
    
</body>
<!-- written by Artem Bazhenov, spizjeno by Me -->
</html>
