<?php
    include 'connection.php';
// menyimpan data kedalam variabel
    $studentName = $_POST['studentName'];
    $studentGender = $_POST['studentGender'];
    $studentBirthdate = $_POST['studentBirthdate'];
// query SQL untuk insert data
    $query="INSERT INTO mst_student SET studentName='$studentName',studentGender='$studentGender',studentBirthdate='$studentBirthdate'";
    mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
    header("location:student-list.php");
?>