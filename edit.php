<?php
    include 'connection.php';
// menyimpan data kedalam variabel
    $studentID = $_POST['studentID'];
    $studentName = $_POST['studentName'];
    $studentMajor = $_POST['majorName'];
    $studentGender = $_POST['studentGender']; //jika ada error indefined index berarti ada value yang belum terisi
    $studentBirthdate = $_POST['studentBirthdate'];
// query SQL untuk update query berdasarkan row yang diedit
    mysqli_query($connection, "UPDATE mst_student SET studentName='$studentName',studentMajor='$studentMajor',studentGender='$studentGender', studentBirthdate='$studentBirthdate' WHERE studentID='$studentID'");
    header("location:student-list.php");
?>