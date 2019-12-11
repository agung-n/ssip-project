<?php
    include 'connection.php';
// menyimpan data kedalam variabel
    $studentID = $_POST['studentID'];
    $studentName = $_POST['studentName'];
    $studentGender = $_POST['studentGender'];
// query SQL untuk update
    $query="UPDATE mst_student SET studentName='$studentName',studentGender='$studentGender' WHERE studentID='$studentID'";
    mysqli_query($connection, $query);
    header("location:student-list.php");
?>