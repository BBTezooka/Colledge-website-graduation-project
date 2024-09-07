<?php
include('database/dbconfig.php');
mysqli_query($db, "set names utf8");
session_start(); //Начало сессии
if (!empty($_REQUEST['password']) and !empty($_REQUEST['login']) ) {
   $login = $_REQUEST['login'];
   $password = $_REQUEST['password'];
   $query = "SELECT * from user where login = '$login' and password = '$password'";
   $result = mysqli_query($db, $query);
   $login = mysqli_fetch_row($result);
   $role=$login[4];
   $Id_users=$login[0];

   if(!empty($login)){
       $_SESSION['idRole'] = $role;
       $_SESSION['id'] = $Id_users;
       if($role !=='2'){echo'<script>alert("Здравствуйте, " $_REQUEST[login]) </script>';}
   };
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Adminpanel</title>

</head>
    <? 
        $log = $_REQUEST['login'];
        $ir = mysqli_query($db,"SELECT * FROM `user` where `login` = '$log'");
        $myrow = mysqli_fetch_array($ir);
        $abit= $myrow['abit'];
    ?>
<body>
    <?
        if($role =='1'){ ?>
            <div class="container">
                <div class="main">
                <p><?echo "Администратор: $abit"?></p>
                    <ul class="widget-list">
                        <li><a href="user/index.php" target="frametb">Пользователи</a></li>
                        <li><a href="specialnost/index.php" target="frametb">Специальность</a></li>
                        <li><a href="departments/index.php" target="frametb">Отделения</a></li>
                        <li><a href="abiturient/index.php" target="frametb">Абитуриент</a></li>
                        <li><a href="othet.php" target="frametb">Отчет Анкета</a></li>
                        <li><a href="othet/prikaz/otchetPrikaz.php" target="frametb">Отчет приказ</a></li>
                    </ul>
                </div>
                <div class="profile">
                    <a href="logout.php" class="logout">Выход</a>
                </div>
            </div>
            <div class="tabl">
                <section>
                    <iframe id="sizeframe" name="frametb"></iframe>
                </section>
            </div>
        <?} else if($role =='3'){ ?>
            <div class="container">
                <div class="main">
                <p><?echo "Оператор: $abit"?></p>
                    <ul class="widget-list">
                        <li><a href="abiturient/index.php" target="frametb">Абитуриент</a></li>
                        <li><a href="othet.php" target="frametb">Отчет Анкета</a></li>
                        <li><a href="othet/prikaz/otchetPrikaz.php" target="frametb">Отчет приказ</a></li>
                    </ul>
                </div>
                <div class="profile">
                    <a href="logout.php" class="logout">Выход</a>
                </div>
            </div>
            <div class="tabl">
                <section>
                    <iframe id="sizeframe" name="frametb"></iframe>
                </section>
            </div>
       <? }
    ?>

</body>

</html>