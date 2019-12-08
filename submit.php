		<?php
    include 'connection.php';
// menyimpan data kedalam variabel
    $studentID = $_POST['studentID'];
    $studentName = $_POST['studentName'];
    $studentGender = $_POST['studentGender'];
// query SQL untuk insert data
    $query="INSERT INTO student_tbl SET studentID='$studentID',studentName='$studentName',studentMajor='$studentMajor',studentGender='$studentGender'";
    mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
    header("location:index.php");
?>