<?php
	$db=mysqli_connect("localhost", "root", "", "Kursach");
	mysqli_query($db, "set names utf8");

if(isset($_POST['ID_Specialnost'])) {
    $ID_Specialnost = $_POST['ID_Specialnost'];

    $students_query = "SELECT * FROM Abiturient WHERE ID_Specialnost = '$ID_Specialnost' and id_d = 1 order by sr_bal DESC LIMIT 10;";
    $students_result = mysqli_query($db, $students_query);

    if(mysqli_num_rows($students_result) > 0) {
        while($student = mysqli_fetch_assoc($students_result)) {
            echo '
            <div class = "student-list-holder">
                <p class = "student-list">' . $student['fio_a'] . '</p>
                <p class = "student-list">' . $student['sr_bal'] . '</p>
            </div>';
        }
    } else {
        echo '<p>Нет студентов по этой специальности </p>';
    }
}
?>